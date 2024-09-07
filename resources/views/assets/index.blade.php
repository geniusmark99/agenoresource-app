@extends('layouts.general')
@section('app-title',"Asset matched {{ count($assets)}}")

@section('app-content')
<section class="py-10">
<div class="px-4 mx-auto">
<div class="flex flex-wrap -mx-4">
<div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
  <h1 class="text-center items-center justify-center my-10 text-5xl font-extrabold *:
text-ageno
  ">
    @if (count($assets) < 1)
    No asset(s) found
      <div class="flex justify-center items-center mt-5">
      <svg class="text-ageno-2" width="87" height="65" viewBox="0 0 87 65" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect y="35" width="6" height="30" fill="currentColor"></rect>
      <rect x="9" y="20" width="6" height="45" fill="currentColor"></rect>
      <rect x="18" y="25" width="6" height="40" fill="currentColor"></rect>
      <rect x="27" width="6" height="65" fill="currentColor"></rect>
      <rect x="36" y="5" width="6" height="60" fill="currentColor"></rect>
      <rect x="45" y="40" width="6" height="25" fill="currentColor"></rect>
      <rect x="54" y="25" width="6" height="40" fill="currentColor"></rect>
      <rect x="63" y="12" width="6" height="53" fill="currentColor"></rect>
      <rect x="72" width="6" height="65" fill="currentColor"></rect>
      <rect x="81" y="44" width="6" height="21" fill="currentColor"></rect>
      </svg>
      </div>
    @elseif (count($assets) > 1)
    {{ count($assets) }} assets found
    @else
    {{ count($assets) }} asset found
    @endif
  </h1>
<div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8">
  @forelse($assets as $asset)
  <div class="group flex flex-col relative justify-between gap-y-1 overflow-hidden bg-white border-2 border-gray-300/50 hover:border-ageno-2 rounded-xl dark:bg-gray-800 dark:border-gray-700">
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

  <div class="w-full lg:w-7/12 flex flex-col gap-y-3 mt-10">
  <p style="display: -webkit-box; -webkit-box-orient: vertical;  -webkit-line-clamp: 3;"
  class="text-gray-500 w-full max-h-[4.5em]  overflow-hidden text-ellipsis dark:text-gray-200 relative min-h-[150px] before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 dark:before:bg-gray-600 before:-bottom-1">
  {{ $asset->mineral_details }}
  </p>
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

  @auth
  <a href="{{ route('assets.show',[$asset->slug]) }}" class="outset-none flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
  <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
  <div>View</div>
  </a>  
  @endauth

  @guest
  <button @click="showLoginPopup = true"  class="outset-none group flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
  <svg xmlns="http://www.w3.org/2000/svg" class="hidden size-4 fill-white group-hover:block transition-all" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>

  <svg  class="size-4 fill-white group-hover:hidden transition-all" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
  <path d="M16.085938 4C12.077347 4 8.4120791 5.626878 5.65625 8.2792969L7.0429688 9.7207031C9.4571396 7.397122 12.616528 6 16.085938 6C19.52373 6 22.655075 7.3722574 25.060547 9.6582031L26.4375 8.2089844C23.690972 5.5989301 20.058142 4 16.085938 4 z M 27.732422 14.529297C25.328915 19.038932 20.996033 22 16.068359 22C11.150761 22 6.8271852 19.053156 4.4199219 14.558594L2.65625 15.501953C3.4310162 16.948507 4.3979396 18.254863 5.5097656 19.392578L2.3007812 22.53125L3.6992188 23.960938L6.9960938 20.734375C7.866762 21.428723 8.7988317 22.035862 9.7910156 22.523438L7.7421875 27.060547L9.5644531 27.882812L11.644531 23.28125C12.739676 23.64253 13.884159 23.879004 15.066406 23.962891L15.066406 29L17.066406 29L17.066406 23.960938C18.237058 23.878176 19.369601 23.643677 20.455078 23.289062L22.337891 27.853516L24.1875 27.089844L22.308594 22.537109C23.283254 22.061749 24.208613 21.486457 25.066406 20.810547L28.210938 23.953125L29.623047 22.539062L26.560547 19.474609C27.710518 18.310688 28.701805 16.961005 29.496094 15.470703L27.732422 14.529297 z"/>
  </svg>

  <div>View</div>
  </button>
  @endguest
  </div>
  </div>


@empty

@endforelse
</div>
</div>


</div>
</div>
</section>
@endsection