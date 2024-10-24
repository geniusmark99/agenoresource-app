<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\UserUploadedDocuments;
use Illuminate\Support\Facades\Notification;
use Illuminate\View\View;
use App\Models\Asset;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\User;
use App\Models\Admin;

class ProfileController extends Controller
{

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



    public function testCloudinaryUpload(Request $request, $assetId)
    {

        // Validate that 'pictures' is required and must be an array of files
        $request->validate([
            'pictures' => 'required|array',
            // 'pictures.*' => 'image|max:3024', // optional: max 3MB per image
        ]);

        // Ensure that files exist before proceeding
        if ($request->hasFile('pictures')) {
            $uploadedImages = [];

            foreach ($request->file('pictures') as $image) {
                $uploadedFileUrl =  Cloudinary::upload($image->getRealPath());
                // $uploadedImages[] = $uploadedFileUrl;  // Add URL to the array
                $uploadedImages[] = [
                    'url' => $uploadedFileUrl->getSecurePath(),
                    'public_id' => $uploadedFileUrl->getPublicId(),
                ];
            }

            $asset = Asset::find($assetId);
            if ($asset) {
                $asset->user_id = auth()->id();
                $asset->pictures = json_encode($uploadedImages);
                $asset->save();

                return redirect()->route('user.asset')->with('success', 'Assets uploaded successfully!');
            } else {
                return redirect()->back()->with('error', 'Asset not found.');
            }
        } else {
            dd("Error in uploading images");
            // return redirect()->back()->with('error', 'No images were uploaded.');
        }

        /*

        $request->validate([
            'pictures' => 'required|array',
            // 'pictures.*' => 'image|max:3024', // max 3MB per image size
        ]);

        $uploadedImages = [];

        // if ($request->hasFile('pictures')) {

        foreach ($request->file('pictures') as $image) {
            $uploadedFileUrl = Cloudinary::upload($image->getRealPath())->getSecurePath();
            $uploadedImages[] = $uploadedFileUrl;
        }
        // dd($request);

        // } else {
        //     dd('Error Uploading Pictures');
        // }

        $asset = Asset::find($assetId);
        $asset->user_id = auth()->id();
        $asset->pictures = json_encode($uploadedImages);
        $asset->save();

        return redirect()->route('post.assets')->with('success', 'Assets uploaded successfully!');

        */
    }






    public function myAsset(Asset $asset)
    {
        $user = Auth::user();
        $subscriptionFee = '';
        $user_assets = Asset::where('user_id', $user->id)->get();
        foreach ($user_assets as $asset) {

            switch ($asset->plan) {
                case 'bronze':
                    $subscriptionFee = 18000 * intval($asset->duration);
                    break;
                case 'silver':
                    $subscriptionFee = 21600 * intval($asset->duration);
                    break;
                case 'gold':
                    $subscriptionFee = 22400 * intval($asset->duration);
                    break;
                case 'diamond':
                    $subscriptionFee = 25600 * intval($asset->duration);
                    break;
                case 'platinum':
                    $subscriptionFee = 28800 * intval($asset->duration);
                    break;
                default:
                    $subscriptionFee = 0; // Or handle the default case as needed
                    break;
            }

            if ($asset->date_activated && $asset->duration) {
                $expiration = $asset->date_activated->addDays($asset->duration);  // Calculate expiration time based on duration
                $asset->time_left = $expiration->diffForHumans();  // Get the time left in human-readable format
            } else {
                $asset->time_left = null;
            }
        }


        return view('users.asset', compact('user_assets', 'subscriptionFee'));
    }

    public function choosePlan()
    {
        return view('users.plan');
    }

    public function edit(Request $request): View
    {

        $states = [
            'Abia',
            'Adamawa',
            'Akwa Ibom',
            'Anambra',
            'Bauchi',
            'Bayelsa',
            'Benue',
            'Borno',
            'Cross River',
            'Delta',
            'Ebonyi',
            'Edo',
            'Ekiti',
            'Enugu',
            'Gombe',
            'Imo',
            'Jigawa',
            'Kaduna',
            'Kano',
            'Katsina',
            'Kebbi',
            'Kogi',
            'Kwara',
            'Lagos',
            'Nasarawa',
            'Niger',
            'Ogun',
            'Ondo',
            'Osun',
            'Oyo',
            'Plateau',
            'Rivers',
            'Sokoto',
            'Taraba',
            'Yobe',
            'Zamfara',
            'FCT'
        ];
        return view('profile.edit', [
            'user' => $request->user(),
            'states' => $states,
            'currentState' => Auth::user()->business_state
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

    public function updatePics(Request $request)
    {
        $request->validate([
            'profile_pics' => 'required|image|mimes:jpg,jpeg,png,gif|max:5048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('profile_pics')) {
            $uploadedFileUrl = Cloudinary::upload($request->file('profile_pics')->getRealPath(), [
                'folder' => 'profile_pictures',
            ])->getSecurePath();

            $user->profile_pics = $uploadedFileUrl;
        }

        $request->user()->save();


        return redirect()->back()->with('success', 'Profile picture updated successfully!');
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

        // dd($request);
        if ($request->isMethod('post')) {
            $user = auth()->user();
            try {

                $asset = Asset::create([
                    'user_id' => $user->id,
                    'uid' => Str::uuid(),
                    'project_id' => $user->uuid . '_' . $user->id,
                    'asset_type' => $request->asset_type,
                    'asset_qty' => $request->asset_qty,
                    'asset_type_value' => $request->asset_type_value,
                    'asset_location_details' => $request->asset_location_details,
                    'asset_information' => $request->asset_information,
                    'technical_report' => $request->technical_report,
                    'price' => $request->price,
                    'land_size' => $request->land_size,
                    'mineral_details' => $request->mineral_details,
                    'reserve_deposit' => $request->reserve_deposit,
                    'plan' => $request->plan,
                    'duration' => $request->duration,
                    'contact_information' => $request->contact_information,
                    'jorc_report' => $request->jorc_report,
                    'opportunity_type' => $request->opportunity_type,
                    'geological_location' => $request->geological_location,
                    'slug' => Str::slug($request->asset_type_value . '-' . time())
                ]);

                Log::info('Asset uploaded successfully.', ['asset' => $asset]);

                return redirect()->route('user.asset')->with('success', 'Now go upload the asset images.');
            } catch (\Exception $e) {
                Log::error('Error uploading asset: ' . $e->getMessage(), ['exception' => $e]);
                return redirect()->route('post.assets')->with('error', 'Error uploading asset.');
            }
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


    public function updateBusinessInfo(Request $request)
    {
        $user = auth()->user();
        $user->business_description = $request->business_description;
        $user->business_address = $request->business_address;
        $user->business_state = $request->business_state;
        $request->user()->save();

        // $request->user()->fill($request->validated());
        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    public function uploadGovtId(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $user = auth()->user();
        $request->validate(['govt_id' => 'required|image|mimes:jpeg,png,jpg|max:5048']);
        $govtImage = Cloudinary::upload($request->file('govt_id')->getRealPath())->getSecurePath();
        $user->govt_id = $govtImage;
        $user->save();
        Notification::send($admin, new UserUploadedDocuments($user));
        return redirect()->back()->with('success', 'Govt id images uploaded successfully!');
    }



    public function uploadCacDocument(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $user = auth()->user();
        $request->validate(['cac_document' => 'required|image|mimes:jpeg,png,jpg|max:5048']);
        $cacImage = Cloudinary::upload($request->file('cac_document')->getRealPath())->getSecurePath();
        $user->cac_document =  $cacImage;
        $user->save();
        Notification::send($admin, new UserUploadedDocuments($user));
        return redirect()->back()->with('success', 'Govt id images uploaded successfully!');
    }

    public function uploadGovtAndCacDocument(Request $request)
    {
        // $admin = Auth::guard('admin')->user();
        // $admin = auth()->user();
        $admin = Admin::find(1);
        $user = auth()->user();

        $request->validate([
            'govt_id' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'cac_document' => 'required|image|mimes:jpeg,png,jpg|max:5048',
        ]);

        $govtImage = Cloudinary::upload($request->file('govt_id')->getRealPath())->getSecurePath();
        $cacImage = Cloudinary::upload($request->file('cac_document')->getRealPath())->getSecurePath();
        $user->govt_id = $govtImage;
        $user->cac_document = $cacImage;
        $user->save();
        Notification::send($admin, new UserUploadedDocuments($user));



        // if ($admin) {
        // }

        return redirect()->back()->with('success', 'Your documents uploaded successfully!');
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

    public function deleteAsset($id)
    {
        $asset = Asset::find($id);


        if ($asset->user_id === auth()->id()) {
            $pictures = json_encode($asset->pictures);

            if (is_array($pictures)) {
                foreach ($pictures as $picture) {
                    if (isset($picture['public_id'])) {
                        Cloudinary::destroy($picture['public_id']);
                    }
                }
            }

            $asset->delete();

            return redirect()->route('dashboard')->with('success', 'Asset and associated images deleted successfully!');
        } else {
            return redirect()->route('post.assets')->with('error', 'You do not have permission to delete this asset.');
        }

        // if (!$asset || $asset->user_id !== auth()->id()) {
        //     return redirect()->back()->with('error', 'You do not have permission to delete this asset.');
        // }

        // $asset->delete();

        // return redirect()->route('dashboard')->with('success', 'Asset deleted successfully!');
    }

    public function assetBought()
    {
        return view('users.asset-bought');
    }
}
