<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AssetRequest;
use Illuminate\View\View;
use App\Models\Asset;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{


    public function myAsset()
    {
        $user = Auth::user();
        $user_assets = Asset::where('user_id', $user->id)->get();
        // $pictures = json_decode($asset->pictures, true);

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

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
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


    // public function testView()
    // {
    //     return view('users.trash-asset');
    // }

    // public function testUpload(Request $request)
    // {
    //     $request->validate([
    //         'pictures.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'video' => 'mimes:mp4,mov,ogg,qt|max:20000',
    //         'asset_name' => 'required|string|max:255',
    //         'asset_type' => 'required|string',
    //         'asset_location_details' => 'nullable|string',
    //         'asset_information' => 'required|string',
    //         'technical_report' => 'required|string',
    //         'price' => 'nullable|numeric',
    //         'coordinates' => 'nullable|string',
    //         'land_size' => 'nullable|numeric',
    //         'mineral_details' => 'required|string',
    //         'reserve_deposit' => 'required|string',
    //         'plan' => 'required',
    //         'active' => 'nullable|boolean',
    //         'duration' => 'required|string',
    //         'contact_information' => 'required|string',
    //         'jorc_report' => 'required|string',
    //         'opportunity_type' => 'required|string',
    //         'geological_location' => 'required|string',
    //     ]);

    //     $user = auth()->user();
    //     $userFolder = $user->first_name . '_' . $user->last_name . '_' . $user->uuid;

    //     $picturePaths = [];
    //     if ($request->hasFile('pictures')) {
    //         foreach ($request->file('pictures') as $picture) {
    //             $pictureName = $userFolder . '_' . $picture->getClientOriginalName();
    //             $path = $picture->storeAs('public/assets/' . $userFolder, $pictureName);
    //             $picturePaths[] = Storage::url($path);
    //         }
    //     }

    //     $videoPath = null;
    //     if ($request->hasFile('video')) {
    //         $video = $request->file('video');
    //         $videoName = $userFolder .  '_' . $video->getClientOriginalName();
    //         $path = $video->storeAs('public/assets/' . $userFolder, $videoName);
    //         $videoPath = Storage::url($path);
    //     }


    //     try {
    //         $asset = Asset::create([
    //             'user_id' => $user->id,
    //             'uid' => Str::uuid(),
    //             'project_id' => $user->uuid . '_' . $user->id,
    //             'asset_name' => $request->asset_name,
    //             'asset_type' => $request->asset_type,
    //             'pictures' => json_encode($picturePaths),
    //             'video' => $videoPath,
    //             'asset_location_details' => $request->asset_location_details,
    //             'asset_information' => $request->asset_information,
    //             'technical_report' => $request->technical_report,
    //             'price' => $request->price,
    //             'coordinates' => $request->coordinates,
    //             'land_size' => $request->land_size,
    //             'mineral_details' => $request->mineral_details,
    //             'reserve_deposit' => $request->reserve_deposit,
    //             'plan' => $request->plan,
    //             'duration' => $request->duration,
    //             'contact_information' => $request->contact_information,
    //             'jorc_report' => $request->jorc_report,
    //             'opportunity_type' => $request->opportunity_type,
    //             'geological_location' => $request->geological_location,
    //             'slug' => Str::slug($request->asset_name . '-' . time())
    //         ]);



    //         Log::info('Asset uploaded successfully.', ['asset' => $asset]);

    //         return redirect()->route('test.view')->with('success', 'Asset uploaded successfully.');
    //     } catch (\Exception $e) {
    //         Log::error('Error uploading asset: ' . $e->getMessage(), ['exception' => $e]);
    //         return redirect()->route('test.view')->with('error', 'Error uploading asset.');
    //     }
    // }

    public function postSaleAsset(Request $request)
    {
        $request->validate([
            'pictures.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'mimes:mp4,mov,ogg,qt|max:20000',
            'asset_name' => 'required|string|max:255',
            'asset_type' => 'required|string',
            'asset_location_details' => 'nullable|string',
            'asset_information' => 'required|string',
            'technical_report' => 'required|string',
            'price' => 'nullable|numeric',
            'coordinates' => 'nullable|string',
            'land_size' => 'nullable|numeric',
            'mineral_details' => 'required|string',
            'reserve_deposit' => 'required|string',
            'plan' => 'required',
            'active' => 'nullable|boolean',
            'duration' => 'required|string',
            'contact_information' => 'required|string',
            'jorc_report' => 'required|string',
            'opportunity_type' => 'required|string',
            'geological_location' => 'required|string',
        ]);

        if ($request->isMethod('post')) {


            $user = auth()->user();
            $userFolder = $user->first_name . '_' . $user->last_name . '_' . $user->uuid;

            $picturePaths = [];
            if ($request->hasFile('pictures')) {
                foreach ($request->file('pictures') as $picture) {
                    $pictureName = $userFolder . '_' . $picture->getClientOriginalName();
                    $path = $picture->storeAs('public/assets/' . $userFolder, $pictureName);
                    $picturePaths[] = Storage::url($path);
                }
            }

            $videoPath = null;
            if ($request->hasFile('video')) {
                $video = $request->file('video');
                $videoName = $userFolder .  '_' . $video->getClientOriginalName();
                $path = $video->storeAs('public/assets/' . $userFolder, $videoName);
                $videoPath = Storage::url($path);
            }

            try {
                $asset = Asset::create([
                    'user_id' => $user->id,
                    'uid' => Str::uuid(),
                    'project_id' => $user->uuid . '_' . $user->id,
                    'asset_name' => $request->asset_name,
                    'asset_type' => $request->asset_type,
                    'pictures' => json_encode($picturePaths),
                    'video' => $videoPath,
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

                return redirect()->route('post.assets')->with('success', 'Asset uploaded successfully.');
            } catch (\Exception $e) {
                Log::error('Error uploading asset: ' . $e->getMessage(), ['exception' => $e]);
                return redirect()->route('test.view')->with('error', 'Error uploading asset.');
            }
        }
    }


    public function notification()
    {
        return view('users.notification');
    }
}
