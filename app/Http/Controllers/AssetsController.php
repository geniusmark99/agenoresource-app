<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetsController extends Controller
{


    function generateUniqueId()
    {
        $prefix = 'E'; // Static prefix
        $randomNumber = mt_rand(100000, 999999); // Random 6-digit number
        return $prefix . $randomNumber;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    // public function show($slug)
    // {
    //     $asset = Assets::with('user')->where('slug', $slug)->firstOrFail();
    //     return view('assets.show', compact('asset'));
    // }

    /**
     * Display the specified resource.
     */
    public function show(Asset $assets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asset $assets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asset $assets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asset $assets)
    {
        //
    }
}
