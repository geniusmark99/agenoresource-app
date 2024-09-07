@extends('layouts.app')
@section('app-header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight md:ml-16 lg:ml-24">
{{ __('My Assets') }}
</h2>
<x-menu-desc-widget>
See all your asset(s)
</x-menu-desc-widget>
@endsection


@section('app-content')
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
@if (count($user_assets) < 1)
<div class="flex flex-col justify-center items-center">
<img src="{{ asset('./images/no-notification.svg') }}" alt="" class="size-60">
<p class="dark:text-gray-400 text-gray-500 text-sm md:text-base">You don't have any assets posted yet</p>
<a href="{{ route('post.assets') }}" class="py-1 px-2 rounded-md bg-ageno text-white mt-2 hover:bg-ageno/80">Post an asset</a>

</div> 


@else
<div class="grid lg:grid-cols-2 gap-4 sm:gap-6">


@foreach($user_assets  as $asset)
<div class="group flex flex-col relative justify-between gap-y-1 overflow-hidden bg-white border border-gray-300/50 rounded-xl dark:bg-gray-800 dark:border-gray-700">

    <span class="absolute inset-x-0 top-[-0.5px] h-2 bg-gradient-to-r group-hover:from-indigo-500 group-hover:via-blue-500 group-hover:to-purple-600"></span>
    <span class="text-center text-base md:text-xl my-4 font-med border-b shadow-sm py-1">
        plan: {{ $asset->plan }}
    </span>


<div class="p-2 md:p-2.5 flex gap-x-3 flex-col lg:flex-row w-full">

<div class="w-full lg:w-5/12 overflow-hidden rounded-md">
@if ($asset->pictures)
@if (count($asset->pictures) > 1)
<x-swiper-gallery :pictures="$asset->pictures" />
@else
@foreach ($asset->pictures as $picture) 
<img src="{{ asset($picture) }}" alt="" 
class="w-full h-[230px] object-cover transition-all transform hover:filter rounded-md group-hover:scale-105" draggable="false">
@endforeach 
@endif

@endif 
</div>  

<div class="w-full lg:w-7/12 flex flex-col gap-y-3">
<h2 class="text-base lg:text-2xl font-bold text-blue-600">{{ $asset->asset_information }}</h2>
<p class="text-gray-500 dark:text-gray-200 relative min-h-[150px] before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 dark:before:bg-gray-600 before:-bottom-1">
{{ $asset->mineral_details }}
<div class="flex gap-x-3 items-center">
<h1 class="text-base lg:text-2xl font-bold"><span class="text-gray-600 dark:text-gray-300">Price:</span>
<span class="text-blue-600">&#8358;{{ $asset->price }}</span>
</h1>
</div>
</div>
</div>

<div class="flex border-t-[0.5px] p-2 bg-gray-300/20 rounded-br-xl rounded-bl-xl border-gray-300/50 dark:border-gray-500 justify-between dark:text-gray-300">


{{-- @auth
<a href="{{ route('post.assets.edit',[$asset->id]) }}" class="flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4" width="48" height="48" viewBox="0 0 48 48">
<path d="M36 5.0097656C34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812L8.9160156 29.183594C8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219L5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406L17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656C17.874212 39.808939 18.39521 39.50518 18.816406 39.083984L40.949219 16.949219C43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812C39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875C37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875C40.403 10.74675 40.403 13.25325 38.828125 14.828125L36.888672 16.767578L31.232422 11.111328L33.171875 9.171875C33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422L34.767578 18.888672L16.693359 36.962891C16.634729 37.021121 16.560472 37.065723 16.476562 37.089844L8.6835938 39.316406L10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531C10.933086 31.438901 10.975086 31.366709 11.037109 31.304688L29.111328 13.232422 z" fill="#ECE8E8" />
</svg>

<div>Edit</div>
</a>  
@endauth --}}

@auth
<a href="{{ route('upload.image',[$asset->id]) }}" class="flex text-sm md:text-base gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4" width="48" height="48" viewBox="0 0 48 48">
<path d="M36 5.0097656C34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812L8.9160156 29.183594C8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219L5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406L17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656C17.874212 39.808939 18.39521 39.50518 18.816406 39.083984L40.949219 16.949219C43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812C39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875C37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875C40.403 10.74675 40.403 13.25325 38.828125 14.828125L36.888672 16.767578L31.232422 11.111328L33.171875 9.171875C33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422L34.767578 18.888672L16.693359 36.962891C16.634729 37.021121 16.560472 37.065723 16.476562 37.089844L8.6835938 39.316406L10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531C10.933086 31.438901 10.975086 31.366709 11.037109 31.304688L29.111328 13.232422 z" fill="#ECE8E8" />
</svg>

<div>Upload asset image</div>
</a>  
@endauth

@auth
<a href="{{ route('assets.show',[$asset->slug]) }}" class="flex text-sm md:text-base gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
<div>Preview</div>
</a>  
@endauth

@guest
<button @click="showLoginPopup = true"  class="flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
<div>View</div>
</button>
@endguest


</div>

</div>
@endforeach
</div>
@endif



</div>
</div>
</div>
</div>

@endsection
