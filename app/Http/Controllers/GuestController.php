<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class GuestController extends Controller
{


    public function testImage()
    {
        return view('test-image-video');
    }

    // public function testUpload(Request $request)
    // {
    //     $request->validate([
    //         'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
    //         'videos.*' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:50240',
    //     ]);

    //     $uploadedFiles = [];

    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             $path = $image->store('public/images');
    //             $uploadedFiles[] = [
    //                 'user_id' => auth()->id(),
    //                 'file_path' => $path,
    //                 'file_type' => 'image',
    //             ];
    //         }
    //     }

    //     if ($request->hasFile('videos')) {
    //         foreach ($request->file('videos') as $video) {
    //             $path = $video->store('public/videos');
    //             $uploadedFiles[] = [
    //                 'user_id' => auth()->id(),
    //                 'file_path' => $path,
    //                 'file_type' => 'video',
    //             ];
    //         }
    //     }

    //     UserAsset::insert($uploadedFiles);

    //     return response()->json(['message' => 'Files uploaded successfully!']);
    // }

    public function testFilter()
    {
        $assets = Asset::latest()->get();
        return view('test-filter-search', compact('assets'));
    }

    public function showAsset($slug)
    {

        $asset = Asset::with('user')->where('slug', $slug)->firstOrFail();
        return view('guests.assetsmore', compact('asset'));
    }


    public function searchAsset(Request $request)
    {

        $query = Asset::query();

        if ($request->minPrice) {
            $query->where('price', '>=', $request->minPrice);
        }

        if ($request->maxPrice) {
            $query->where('price', '<=', $request->maxPrice);
        }

        if ($request->assetType) {
            $query->where('asset_type', $request->assetType);
        }

        if ($request->search) {
            $query->where('asset_name', 'like', '%' . $request->search . '%');
        }

        $assets = $query->paginate(15);

        return view('assets.index', compact('assets'));
    }



    public function uploadImages(Request $request)
    {

        $request->validate([
            'images' => 'required|array|min:1|max:5',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $uploadedFiles = [];
        foreach ($request->file('images') as $file) {
            $path = $file->store('images', 'public');
            $uploadedFiles[] = $path;
        }

        return redirect()->back()->with('success', 'Images uploaded successfully!');
    }

    public function  uploadVideo(Request $request)
    {
        // Validate the uploaded videos
        $request->validate([
            'videos.*' => 'required|mimes:mp4,mov,avi,wmv|max:50000', // Adjust the mime types and max file size as needed
        ]);

        $uploadedVideos = [];
        foreach ($request->file('videos') as $video) {
            $path = $video->store('videos', 'public');
            $uploadedVideos[] = $path;
        }


        return response()->json(['message' => 'Videos uploaded successfully'], 200);
    }


    public function home()
    {
        $assets = Asset::latest()->where('active', 1)->limit(10)->get();
        $assetAll = Asset::latest()->where('active', 1)->get();
        return view('guests.home', ['assets' => $assets, 'assetAll' => $assetAll]);
    }

    public function assets()
    {
        $assets = Asset::with('user')->where('active', 1)->get();
        return view('guests.assets', compact('assets'));
    }

    public function assetsmore($slug)
    {
        $asset = Asset::with('user')->where('slug', $slug)->firstOrFail();
        return view('guests.assetsmore', compact('asset'));
    }

    public function about()
    {
        return view('guests.about');
    }

    public function contact()
    {
        return view('guests.contact');
    }

    public function contactUs(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|string|max:255',
                'message' => 'required|string|max:255',
            ]);
            // dd($request);
            ContactUs::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            return redirect()->route('contact.us')->with('success', 'Your message have been sent successfully.');
        }
    }

    public function services()
    {
        return view('guests.services');
    }

    public function pricing()
    {
        return view('guests.pricing');
    }

    public function blog()
    {
        return view('guests.blog');
    }
}
