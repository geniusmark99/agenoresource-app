<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Asset;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\User;

class ProfileController extends Controller
{

    public function testCloudinaryUpload(Request $request, $assetId)
    {


        $request->validate([
            'pictures' => 'required|array',
            'pictures.*' => 'image|max:3024', // max 1MB per image
        ]);

        $uploadedImages = [];

        // Upload each image to Cloudinary
        if ($request->hasFile('pictures')) {
            foreach ($request->file('pictures') as $image) {
                $uploadedFileUrl = Cloudinary::upload($image->getRealPath())->getSecurePath();
                $uploadedImages[] = $uploadedFileUrl;
            }
        }

        // Save asset and Cloudinary image URLs to the database
        $asset = Asset::find($assetId);
        $asset->user_id = auth()->id();  // Assuming the asset belongs to the authenticated user
        $asset->pictures = json_encode($uploadedImages); // Store the array of image URLs as JSON
        $asset->save();

        return redirect()->route('assets.index')->with('success', 'Assets uploaded successfully!');
    }






    public function myAsset()
    {
        $user = Auth::user();
        $user_assets = Asset::where('user_id', $user->id)->get();
        return view('users.asset', compact('user_assets'));
    }

    public function choosePlan()
    {
        return view('users.plan');
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->save();
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);
        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::to('/');
    }

    public function postAsset()
    {
        return view('users.post-assets');
    }


    public function uploadAssetImages(Request $request)
    {
        $request->validate([
            'pictures.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pictures = [];
        foreach ($request->file('pictures') as $picture) {
            $pictures[] = Cloudinary::upload($picture->getRealPath())->getSecurePath();
        }

        $asset = new Asset();
        $asset->user_id = auth()->id(); // Assign to the current user
        $asset->pictures = json_encode($pictures);
        $asset->save();

        return redirect()->route('profile')->with('success', 'Asset images uploaded successfully!');
    }

    public function postSaleAsset(Request $request)
    {

        if ($request->isMethod('post')) {
            $user = auth()->user();
            try {

                $asset = Asset::create([
                    'user_id' => $user->id,
                    'uid' => Str::uuid(),
                    'project_id' => $user->uuid . '_' . $user->id,
                    'asset_name' => $request->asset_name,
                    'asset_type' => $request->asset_type,
                    'video' => $request->video,
                    'asset_location_details' => $request->asset_location_details,
                    'asset_information' => $request->asset_information,
                    'technical_report' => $request->technical_report,
                    'price' => $request->price,
                    'coordinates' => $request->coordinates,
                    'land_size' => $request->land_size,
                    'mineral_details' => $request->mineral_details,
                    'reserve_deposit' => $request->reserve_deposit,
                    'plan' => $request->plan,
                    'duration' => $request->duration,
                    'contact_information' => $request->contact_information,
                    'jorc_report' => $request->jorc_report,
                    'opportunity_type' => $request->opportunity_type,
                    'geological_location' => $request->geological_location,
                    'slug' => Str::slug($request->asset_name . '-' . time())
                ]);

                Log::info('Asset uploaded successfully.', ['asset' => $asset]);

                return redirect()->route('user.asset')->with('success', 'Now go upload the asset images.');
            } catch (\Exception $e) {
                Log::error('Error uploading asset: ' . $e->getMessage(), ['exception' => $e]);
                return redirect()->route('post.assets')->with('error', 'Error uploading asset.');
            }
        }
    }

    public function uploadAssetImage($assetId)
    {
        $asset = Asset::findOrFail($assetId);
        if ($asset->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to edit this asset.');
        } else {
            $assetImageId = $assetId;
            return view('users.upload-assets-image', compact('assetImageId', 'asset'));
        }
    }

    public function postSaleAssetEdit($id)
    {
        $asset = Asset::findOrFail($id);
        if ($asset->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to edit this asset.');
        }

        return view('users.post-assets-edit', compact('asset'));
    }

    public function postSaleAssetUpdate(Request $request, $id)
    {
        $asset = Asset::findOrFail($id);

        if ($asset->user_id !== Auth::id()) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to update this asset.');
        }

        $validatedData = $request->validate([
            'plan' => 'required|string',
            'asset_type' => 'required|string|max:255',
            'asset_name' => 'required|string|max:255',
            'technical_report' => 'required|string|max:255',
            'asset_information' => 'required|string|max:255',
            'asset_location_details' => 'required|string|max:255',
            'geological_location' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'coordinates' => 'nullable|string|max:255',
            'reserve_deposit' => 'required|string|max:255',
            'jorc_report' => 'nullable|string|max:255',
            'opportunity_type' => 'nullable|string|max:255',
            'land_size' => 'nullable|string|max:255',
            'mineral_details' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'contact_information' => 'required|string|min:12|max:15',
            'pictures' => 'nullable|array',
            'pictures.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $asset->update($validatedData);

        $user = auth()->user();
        $userFolder = $user->first_name . '_' . $user->last_name . '_' . $user->uuid;


        if ($request->hasFile('pictures')) {
            $picturePaths = [];
            foreach ($request->file('pictures') as $picture) {
                $pictureName = $userFolder . '_' . $picture->getClientOriginalName();
                $path = $picture->storeAs('public/assets/' . $userFolder, $pictureName);
                $picturePaths[] = Storage::url($path);
            }
            $asset->pictures = json_encode($picturePaths);
            $asset->save();
        }

        return redirect()->route('post.assets.edit', $id)->with('success', 'Asset updated successfully.');
    }

    public function notification()
    {
        return view('users.notification');
    }

    public function destroyGovtId()
    {
        $user = Auth::user();
        try {
            Storage::delete($user->govt_id);
            $user->govt_id = NULL;
            $user->save();
            return redirect()->route('profile.edit')->with('success', 'Your Govt ID is successfully deleted.');
        } catch (\Exception $e) {
            Log::error('Failed to delete image path: ' . $e->getMessage());
            session()->flash('error', 'Failed to delete image path.');
            return;
        }
    }

    public function destroyCacDocument()
    {
        $user = Auth::user();
        try {
            Storage::delete($user->cac_document);
            $user->cac_document = NULL;
            $user->save();
            return redirect()->route('profile.edit')->with('success', 'Your CAC Document is successfully deleted.');
        } catch (\Exception $e) {
            Log::error('Failed to delete image path: ' . $e->getMessage());
            session()->flash('error', 'Failed to delete image path.');
            return;
        }
    }





    public function uploadGovtId(Request $request)
    {
        $user = auth()->user();
        $request->validate(['govt_id' => 'required|image|mimes:jpeg,png,jpg|max:5048']);
        $govtImage = Cloudinary::upload($request->file('govt_id')->getRealPath())->getSecurePath();
        $user->govt_id = $govtImage;
        $user->save();
        return redirect()->back()->with('success', 'Govt id images uploaded successfully!');
    }



    public function uploadCacDocument(Request $request)
    {
        $user = auth()->user();
        $request->validate(['cac_document' => 'required|image|mimes:jpeg,png,jpg|max:5048']);
        $cacImage = Cloudinary::upload($request->file('cac_document')->getRealPath())->getSecurePath();
        $user->cac_document =  $cacImage;
        $user->save();
        return redirect()->back()->with('success', 'Govt id images uploaded successfully!');
    }

    public function deleteNinCac($type)
    {
        $user = auth()->user();
        if ($type === 'govt_id' && $user->govt_id) {
            Cloudinary::destroy($user->govt_id);
            $user->govt_id = null;
            $user->save();
        } elseif ($type === 'cac_document' && $user->cac_document) {
            Cloudinary::destroy($user->cac_document);
            $user->cac_document = null;
            $user->save();
        }
        return redirect()->back()->with('success', ucfirst($type) . 'Govt id images uploaded successfully!');
    }
}
