@extends('layouts.general')
@section('app-title','Contact us')

@section('app-content')



{{-- <div class="container">
    <h1 class="text-2xl font-bold mb-4">Search Results</h1>
    
    <div class="mt-4">
        <h2 class="text-xl font-semibold">Filtered Assets</h2>
        <ul>
            @forelse($assets as $asset)
                <li class="mb-2 border-b border-gray-300 pb-2">
                    <h3 class="text-lg font-bold">{{ $asset->asset_name }}</h3>
                    <p>Type: {{ $asset->asset_type }}</p>
                    <p>Price: ${{ number_format($asset->price, 2) }}</p>
                    <p>Location: {{ $asset->asset_location_details ?? 'N/A' }}</p>
                </li>
            @empty
                <li>No assets available with the selected criteria.</li>
            @endforelse
        </ul>
    </div>
</div> --}}


<section class="py-10">
    <div class="px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
          <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-1 gap-6 md:gap-8 lg:gap-10 lg:max-w-2xs  pb-20 lg:pb-9 px-4">
            <div class="pb-10 lg:border-b border-blueGray-800">
              <h6 class="font-bold text-gray-800 mb-5">Price</h6>
              <input class="w-full" type="range">
              <div class="flex items-center justify-between">
                <span class="text-sm font-medium text-gray-500">&#8358; 0</span>
                <span class="text-sm font-medium text-gray-500">&#8358; 200</span>
              </div>
            </div>
            <div class="pb-10 lg:border-b border-blueGray-800">
              <h6 class="font-bold text-gray-800 mb-8">Category</h6>
              <ul class="list-unstyled mb-0">
                <li class="mb-4"><a class="inline-block font-medium text-gray-500 hover:text-gray-200" href="#">Sales</a></li>
                <li class="mb-4"><a class="inline-block font-medium text-ageno-2" href="#">Lease</a></li>
                <li class="mb-4"><a class="inline-block font-medium text-gray-500 hover:text-gray-200" href="#">Equipment</a></li>
                <li class="mb-4"><a class="inline-block font-medium text-gray-500 hover:text-gray-200" href="#"></a></li>
              </ul>
            </div>
            <div class="max-w-xs">
              <h6 class="font-bold text-white mb-5">Age</h6>
              <div class="flex flex-wrap -mx-1 -mb-2">
                <div class="w-1/3 px-1 mb-2">
                  <button class="flex items-center justify-center h-7 w-full text-sm font-bold text-gray-400 hover:text-gray-200 border border-gray-800 hover:border-gray-200">6m</button>
                </div>
                <div class="w-1/3 px-1 mb-2">
                  <button class="flex items-center justify-center h-7 w-full text-sm font-bold text-black bg-yellow-500">1y</button>
                </div>
                <div class="w-1/3 px-1 mb-2">
                  <button class="flex items-center justify-center h-7 w-full text-sm font-bold text-gray-400 hover:text-gray-200 border border-gray-800 hover:border-gray-200">2y</button>
                </div>
                <div class="w-1/3 px-1 mb-2">
                  <button class="flex items-center justify-center h-7 w-full text-sm font-bold text-gray-400 hover:text-gray-200 border border-gray-800 hover:border-gray-200">3y</button>
                </div>
                <div class="w-1/3 px-1 mb-2">
                  <button class="flex items-center justify-center h-7 w-full text-sm font-bold text-gray-400 hover:text-gray-200 border border-gray-800 hover:border-gray-200">4y</button>
                </div>
                <div class="w-1/3 px-1 mb-2">
                  <button class="flex items-center justify-center h-7 w-full text-sm font-bold text-gray-400 hover:text-gray-200 border border-gray-800 hover:border-gray-200">5y</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-8/12 xl:9/12 px-4">
         
          <div class="flex flex-wrap -mb-8 -mx-4">

            @forelse($assets as $asset)
            <div class="w-full sm:w-1/2 xl:w-1/3 mb-8 px-4 border shadow-sm">
                <a class="group block" href="#">
                  <img class="block mb-5 h-88 w-full object-cover transition-transform duration-500 transform group-hover:scale-102" src="https://shuffle.dev/vendia-assets/images/item-cards/shirt-products4.png" alt="">
                  <div class="text-xs font-bold ">Price: <span class="text-ageno-2">&#8358;{{ number_format($asset->price, 2) }}</span></div>
                  {{-- <h6 class="font-bold text-sm mt-2">Summer T-Shirt 0492</h6> --}}
                  <div class="text-xs font-bold ">Asset name: <span class="text-ageno-2">{{ $asset->asset_name}}</span></div>

                  <div class="text-xs font-bold ">Asset Type: <span class="text-ageno-2">{{ $asset->asset_type}}</span></div>

                </a>
              </div>
 
        @empty

<div class="flex justify-center items-center flex-col">
  <div>

  <svg class="text-neutral-300" width="87" height="65" viewBox="0 0 87 65" fill="none" xmlns="http://www.w3.org/2000/svg">
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


            <p>No assets available with the selected criteria.</li>

</div>
        @endforelse
           
            {{-- <div class="w-full sm:w-1/2 xl:w-1/3 mb-8 px-4">
              <a class="group block" href="#">
                <img class="block mb-5 h-88 w-full object-cover transition-transform duration-500 transform group-hover:scale-102" src="https://shuffle.dev/vendia-assets/images/item-cards/shirt-products3.png" alt="">
                <span class="text-xs font-bold text-yellow-500">$99.63</span>
                <h6 class="font-bold text-sm text-white mt-2">Summer T-Shirt 0492</h6>
              </a>
            </div>
            <div class="w-full sm:w-1/2 xl:w-1/3 mb-8 px-4">
              <a class="group block" href="#">
                <img class="block mb-5 h-88 w-full object-cover transition-transform duration-500 transform group-hover:scale-102" src="https://shuffle.dev/vendia-assets/images/item-cards/shirt-products2.png" alt="">
                <span class="text-xs font-bold text-yellow-500">$99.63</span>
                <h6 class="font-bold text-sm text-white mt-2">Summer T-Shirt 0492</h6>
              </a>
            </div>
            <div class="w-full sm:w-1/2 xl:w-1/3 mb-8 px-4">
              <a class="group block" href="#">
                <img class="block mb-5 h-88 w-full object-cover transition-transform duration-500 transform group-hover:scale-102" src="https://shuffle.dev/vendia-assets/images/item-cards/shirt-products1.png" alt="">
                <span class="text-xs font-bold text-yellow-500">$99.63</span>
                <h6 class="font-bold text-sm text-white mt-2">Summer T-Shirt 0492</h6>
              </a>
            </div>
            <div class="w-full sm:w-1/2 xl:w-1/3 mb-8 px-4">
              <a class="group block" href="#">
                <img class="block mb-5 h-88 w-full object-cover transition-transform duration-500 transform group-hover:scale-102" src="https://shuffle.dev/vendia-assets/images/item-cards/shirt-products4.png" alt="">
                <span class="text-xs font-bold text-yellow-500">$99.63</span>
                <h6 class="font-bold text-sm text-white mt-2">Summer T-Shirt 0492</h6>
              </a>
            </div>
            <div class="w-full sm:w-1/2 xl:w-1/3 mb-8 px-4">
              <a class="group block" href="#">
                <img class="block mb-5 h-88 w-full object-cover transition-transform duration-500 transform group-hover:scale-102" src="https://shuffle.dev/vendia-assets/images/item-cards/shirt-products4.png" alt="">
                <span class="text-xs font-bold text-yellow-500">$99.63</span>
                <h6 class="font-bold text-sm text-white mt-2">Summer T-Shirt 0492</h6>
              </a>
            </div> --}}
          </div>
          {{-- <nav class="pt-10 mt-14 border-t border-blueGray-800">
            <ul class="flex items-center justify-center">
              <li class="mr-5"><a class="inline-flex items-center h-6 px-2 text-sm text-white font-bold hover:bg-gray-900" href="#">1</a></li>
              <li class="mr-5"><a class="inline-flex items-center h-6 px-2 text-sm text-white font-bold hover:bg-gray-900" href="#">2</a></li>
              <li class="mr-5"><a class="inline-flex items-center h-6 px-2 text-sm text-black font-bold bg-yellow-500" href="#">3</a></li>
              <li class="mr-5"><a class="inline-flex items-center h-6 px-2 text-sm text-white font-bold hover:bg-gray-900" href="#">4</a></li>
              <li><a class="inline-flex items-center h-6 px-2 text-sm text-white font-bold hover:bg-gray-900" href="#">5</a></li>
            </ul>
          </nav> --}}
        </div>
      </div>
    </div>
  </section>
@endsection