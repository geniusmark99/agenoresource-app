<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function home()
    {
        // $assets = Assets::all();
        $assets = Assets::latest()->get();
        return view('guests.home', ['assets' => $assets]);
    }

    public function assets()
    {
        $assets = Assets::with('user')->paginate(15);
        return view('guests.assets', compact('assets'));
    }

    public function assetsmore($id)
    {
        $asset = Assets::with('user')->findOrFail($id);
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

    public function services()
    {
        return view('guests.services');
    }

    public function pricing()
    {
        return view('guests.pricing');
    }
}
