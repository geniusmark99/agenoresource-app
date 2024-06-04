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

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
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

    public function postSaleAsset(AssetRequest $request)
    {
        $validated = $request->validated();


        $uploadedFiles = [];
        foreach ($request->file('pictures') as $file) {
            $path = $file->store('pictures', 'public');
            $uploadedFiles[] = $path;
        }

        $asset = Asset::create($validated);
        return redirect()->route('post.assets', $asset->slug)
            ->with('success', 'Asset created successfully.');
    }


    public function notification()
    {
        return view('users.notification');
    }
}
