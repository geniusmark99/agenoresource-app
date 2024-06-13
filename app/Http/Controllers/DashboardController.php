<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $assets = Asset::latest()->take(10)->with('user')->get();

        return view('dashboard', compact('assets'));
    }
}
