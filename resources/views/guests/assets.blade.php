@extends('layouts.general')
@section('app-title','Assets')
@section('app-content')

@livewire('asset-filter')


<section class="py-14 lg:py-24 relative z-0 bg-gray-50 dark:bg-gray-800 ">
    <div class="diamond-pattern bg-gray-100/50 dark:bg-gray-700 mx-3 md:mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center shadow-md dark:shadow-sm shadow-ageno-2/20 py-6 rounded-lg">
        <h1
            class="dark:text-gray-300 max-w-[700px] mx-auto text-center font-manrope font-bold text-3xl md:text-4xl  text-gray-900 mb-5 lg:text-5xl md:leading-normal">
            <span class="text-ageno">Search</span> and <span class="text-ageno">Filter</span> your <span class="text-ageno">Desired</span> mining assets 
        </h1>


    </div>
</section>


<div class="flex flex-col mt-4">
    <h3 class=" px-4 sm:px-6 lg:px-28 text-left text-ageno lg:text-3xl font-bold dark:text-white">Top Latest assets</h3>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    {{-- grid lg:grid-cols-2 gap-4 sm:gap-6 --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8">
        @foreach($assets as $asset)
        <div class="group relative flex flex-col justify-between gap-y-1 bg-white border overflow-hidden border-gray-300/50 rounded-xl dark:bg-gray-800 dark:border-gray-700">
    <span class="absolute inset-x-0 top-[-0.5px] h-2 bg-gradient-to-r group-hover:from-indigo-500 group-hover:via-blue-500 group-hover:to-purple-600"></span>
         
             
    <div class="p-2 md:p-2.5 items-center text-center border-b font-semibold bg-ageno/5 text-ageno">
        {{ $asset->asset_type }} asset
     </div>
 
        
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
            {{-- <h2 class="text-base lg:text-2xl font-bold text-blue-600">{{ $asset->asset_information }}</h2> --}}
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
            <div class="flex gap-x-2 items-center">
            <div class="text-xs md:text:sm text-gray-500 font-semibold dark:text-gray-100">
                Asset Type:
            </div>
            <div class="text-blue-600 font-bold">
            {{ $asset->asset_type }}
            </div>
            </div>
          
            <a href="{{ route('assets.show',[$asset->slug]) }}" class="flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
            <div>View</div>
            </a>
            </div>
        
        </div>
        @endforeach
    </div>
    </div>

</div>
@endsection

