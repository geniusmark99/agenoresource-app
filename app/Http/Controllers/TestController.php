<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{

    public function upload(Request $request)
    {
        // Validate the incoming request to ensure an image is being uploaded
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Attempt to store the image in the S3 bucket
            $path = $request->file('image')->store('public/images');

            // Generate the full URL of the uploaded image
            // $imageUrl = Storage::disk('s3')->url($path);

            // Return success response with the image URL
            return back()->with('success', 'Image uploaded successfully!');
            // ->with('imageUrl', $imageUrl)
        } catch (Exception $e) {
            // Return error response if something goes wrong
            return back()->with('error', 'Failed to upload image: ' . $e->getMessage());
        }
    }
}
