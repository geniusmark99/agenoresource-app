<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $assets = Assets::latest()->take(10)->with('user')->get();

        return view('dashboard', compact('assets'));
    }
}
