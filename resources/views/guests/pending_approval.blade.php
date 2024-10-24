@extends('layouts.general')
@section('app-title','Pending Approval...')

@section('app-content')
<div class="min-h-screen flex flex-col justify-center items-center py-10">
    <!-- Card Container -->
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md text-center">
        <!-- Icon or Image -->
        <div class="flex justify-center mb-4">
            
            <img src="{{ asset('images/approval.png') }}" alt="Approval icon"  class="w-16 h-16">
           
        </div>

        <!-- Main Message -->
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Asset Pending Approval</h1>
        <p class="text-gray-600 mb-6">
            This asset is awaiting admin approval. It will be publicly available once approved. Check back later for updates.
        </p>

        <!-- Asset Information (Optional) -->
        <div class="bg-gray-100 rounded-lg p-4 mb-4">
            <h2 class="text-base text-gray-700">It's an {{ $asset->asset_type_value }} asset type</h2>
            {{-- <p class="text-gray-500">{{ $asset->description }}</p> --}}
        </div>

        <!-- Action Button -->
        <a href="{{ route('assets') }}" class="bg-blue-500 text-white  py-2 px-4 rounded-md shadow-lg hover:bg-blue-600 transition duration-300 ease-in-out">
            back Assets page
        </a>
    </div>

    <!-- Footer Section -->
    <footer class="mt-10 text-center text-white">
        <p>&copy; {{ date('Y') }} Agenoresource. All Rights Reserved.</p>
    </footer>
</div>

@endsection