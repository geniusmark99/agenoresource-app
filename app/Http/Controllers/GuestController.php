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


    public function buyer()
    {
        return view('users.buyer');
    }

    public function assetPlan()
    {

        $assets = Asset::where('active', 1);

        // dd($assets);
        //  $assetPlan = Asset::with('user')->where('slug', $slug)->firstOrFail();
        // $silverPlan =   $assets->where('plan', '>=', 'silver');
        // $bronzePlan =   $assets->where('plan', '>=', 'bronze');
        // $goldPlan =   $assets->where('plan', '>=', 'gold');
        // $diamondPlan =   $assets->where('plan', '>=', 'diamond');
        // $plantinumPlan =   $assets->where('plan', '>=', 'plantinum');
        $plantinum_assets = $assets->where('plan', 'platinum')->get();

        dd($plantinum_assets);
        // $query->where('price', '>=', $request->minPrice);



    }

    public function testFilter()
    {
        $assets = Asset::latest()->get();
        return view('test-filter-search', compact('assets'));
    }

    public function showAsset(Request $request, $slug)
    {

        $asset = Asset::with('user')->where('slug', $slug)->firstOrFail();
        $user = auth()->user();

        if (!$asset) {
            return abort(404);
        }

        if ($asset->active || ($user && $user->id === $asset->user_id)) {
            if ($asset && (!auth()->check() || auth()->id() !== $asset->user_id)) {
                $asset->increment('view_count');
                $asset->click_rate = $asset->view_count / max($asset->view_count, 1);
                $asset->save();
            }
            return view('guests.assetsmore', compact('asset'));
        }

        return view('guests.pending_approval', compact('asset'));
        // http://127.0.0.1:8000/assets/equipment-16
        // return view('guests.assetsmore', compact('asset'));
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
        // $assets = Asset::latest()->where('active', 1)->limit(10)->get();
        $assetAll = Asset::latest()->where('active', 1)->get();
        $silver_assets =    Asset::where('plan', 'silver')->where('active', 1)->get();
        $bronze_assets =    Asset::where('plan', 'bronze')->where('active', 1)->get();
        $gold_assets =   Asset::where('plan', 'gold')->where('active', 1)->get();
        $diamond_assets =   Asset::where('plan', 'diamond')->where('active', 1)->get();
        $plantinum_assets =  Asset::where('plan', 'platinum')->where('active', 1)->get();

        return view(
            'guests.home',
            [
                'platinum_assets' => $plantinum_assets,
                'silver_assets' => $silver_assets,
                'gold_assets' => $gold_assets,
                'diamond_assets' => $diamond_assets,
                'bronze_assets' => $bronze_assets,
                'assetAll' => $assetAll
            ]
        );
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
