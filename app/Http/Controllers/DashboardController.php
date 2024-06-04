<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $assets = Asset::latest()->take(10)->with('user')->get();

        return view('dashboard', compact('assets'));
    }
}
