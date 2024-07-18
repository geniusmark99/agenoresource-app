<div 
x-data="{ scrolled: false,open: false, selectedMinPrice: '', selectedMaxPrice: '', selectedAssetType: '', searchTerm: '' }"
class="w-full z-[1000] left-0 transition-all duration-300"
x-init="window.pageYOffset > 50 ? scrolled = true : scrolled = false" 
@scroll.window="window.pageYOffset > 50 ? scrolled = true : scrolled = false" 
:class="scrolled ? 'bg-white shadow-lg top-0 fixed transition-all duration-300' : 'bg-transparent relative'"

>
<div class="flex justify-center item-center   dark:bg-ageno-dark shadow-lg w-full" :class="scrolled ? 'bg-blue-600' : 'bg-white'">


   
    <form method="GET" action="{{ route('assets.search') }}" 
    class="flex justify-center gap-x-1 items-center  py-2 transition-all duration-300 w-full">

        <div class=" relative min-w-24  md:min-w-32" x-data="{ open: false }">
            <button type="button" @click="open = !open" class="whitespace-nowrap w-full px-2 md:px-4 py-2 flex justify-between items-center rounded-md text-left" :class="scrolled ? 'bg-white text-blue-600' : 'bg-blue-600 text-white'">
                <span class="text-xs md:text-base font-semibold" x-text="selectedAssetType ? selectedAssetType : 'Asset Type'"></span>
                <svg class="size-3 transition-transform fill-current" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
                  </svg>
            </button>
            <div x-cloak x-show="open" @click.away="open = false" class="absolute mt-1 w-full bg-white border dark:text-gray-400 dark:bg-gray-900 dark:border-gray-600 border-gray-300 rounded-md shadow-lg">
                <ul class="text-xs md:text-base max-h-[350px] overflow-x-hidden overflow-y-auto">
                    <li @click="selectedAssetType = ''; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">All</li>
                    <li @click="selectedAssetType = 'gold'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Gold</li>
                    <li @click="selectedAssetType = 'silver'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Silver</li>
                    <li @click="selectedAssetType = 'diamond'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Diamond</li>
                    <li @click="selectedAssetType = 'cobalt'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Cobalt</li>
                    <li @click="selectedAssetType = 'lithium'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Lithium</li>
                    <li @click="selectedAssetType = 'tantalite'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Tantalite</li>
                    <li @click="selectedAssetType = 'columbite'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Columbite</li>
                    <li @click="selectedAssetType = 'zinc'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Zinc</li>
                    <li @click="selectedAssetType = 'tourmaline'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Tourmaline</li>
                    <li @click="selectedAssetType = 'tin'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Tin</li>
                    <li @click="selectedAssetType = 'tungsten'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Tungsten</li>
                    <li @click="selectedAssetType = 'nickel'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Nickel</li>
                    <li @click="selectedAssetType = 'manganese'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Manganese</li>
                    <li @click="selectedAssetType = 'lead'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Lead</li>
                    <li @click="selectedAssetType = 'beryl'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Beryl</li>
                </ul>
            </div>
            <input type="hidden" name="assetType" x-model="selectedAssetType">
        </div>

{{--         
        <div class="w-6/12">
            <input type="text" id="search" name="search" wire:model="search" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div> --}}

        <div class=" relative min-w-24  md:min-w-36" x-data="{ open: false }">
            <button type="button" @click="open = !open" class="whitespace-nowrap w-full px-2 md:px-4 py-2 gap-x-2 rounded-md text-left flex justify-between items-center" :class="scrolled ? 'bg-white text-blue-600' : 'bg-blue-600 text-white'">
                <span class="text-xs md:text-base font-semibold" x-text="selectedMinPrice ? '&#8358;' + selectedMinPrice : 'Min Price'"></span>
                <svg class="size-3 transition-transform fill-current" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
                  </svg>
                
            </button>
            <div x-cloak x-show="open" @click.away="open = false" class="absolute z-[1000] mt-1 w-full bg-white border dark:text-gray-400 dark:bg-gray-900 dark:border-gray-600 border-gray-300 rounded-md shadow-lg">
                <ul class="max-h-[300px] overflow-x-hidden overflow-y-auto text-xs md:text-base">
                    <li @click="selectedMinPrice = ''; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Any</li>
                    <li @click="selectedMinPrice = 50000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">50,000</li>
                    <li @click="selectedMinPrice = 100000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">100,000</li>
                    <li @click="selectedMinPrice = 200000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">200,000</li>
                    <li @click="selectedMinPrice = 300000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">300,000</li>
                    <li @click="selectedMinPrice = 400000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">400,000</li>
                    <li @click="selectedMinPrice = 500000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">500,000</li>
                    <li @click="selectedMinPrice = 1000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">1million</li>
                    <li @click="selectedMinPrice = 2000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">2million</li>
                    <li @click="selectedMinPrice = 3000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">3million</li>
                    <li @click="selectedMinPrice = 4000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">4million</li>
                    <li @click="selectedMinPrice = 5000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">5million</li>
                    <li @click="selectedMinPrice = 10000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">10million</li>
                    <li @click="selectedMinPrice = 20000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">20million</li>
                    <li @click="selectedMinPrice = 30000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">30million</li>
                    <li @click="selectedMinPrice = 40000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">40million</li>
                    <li @click="selectedMinPrice = 50000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">50million</li>
                    <li @click="selectedMinPrice = 100000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">100million</li>
                
                </ul>
            </div>
            <input type="hidden" name="minPrice" x-model="selectedMinPrice">
        </div>

       <!-- Max Price Dropdown -->
       <div class=" relative min-w-20  md:min-w-32" x-data="{ open: false }">
        <button type="button" @click="open = !open" class=" whitespace-nowrap w-full px-2 md:px-4 py-2  rounded-md text-left flex justify-between items-center" :class="scrolled ? 'bg-white text-blue-600' : 'bg-blue-600 text-white'">
            <span class="text-xs md:text-base font-semibold" x-text="selectedMaxPrice ? '&#8358;' + selectedMaxPrice : 'Max Price'"></span>
            <svg class="size-3 transition-transform fill-current" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
              </svg>
        </button>
        <div x-cloak x-show="open" @click.away="open = false" class="absolute z-[1000] mt-1 w-full bg-white dark:text-gray-400 dark:bg-gray-900 dark:border-gray-600 border border-gray-300  rounded-md shadow-lg">
           
            <ul class="max-h-[300px] overflow-x-hidden overflow-y-auto text-xs md:text-base">
                <li @click="selectedMaxPrice = ''; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">Any</li>
                <li @click="selectedMaxPrice = 500000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">500,000</li>
                <li @click="selectedMaxPrice = 600000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">600,000</li>
                <li @click="selectedMaxPrice = 700000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">700,000</li>
                <li @click="selectedMaxPrice = 800000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">800,000</li>
                <li @click="selectedMaxPrice = 900000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">900,000</li>
                <li @click="selectedMaxPrice = 1000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">1million</li>
                <li @click="selectedMaxPrice = 2000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">2million</li>
                <li @click="selectedMaxPrice = 3000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">3million</li>
                <li @click="selectedMaxPrice = 4000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">4million</li>
                <li @click="selectedMaxPrice = 5000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">5million</li>
                <li @click="selectedMaxPrice = 10000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">10million</li>
                <li @click="selectedMaxPrice = 20000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">20million</li>
                <li @click="selectedMaxPrice = 30000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">30million</li>
                <li @click="selectedMaxPrice = 40000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">40million</li>
                <li @click="selectedMaxPrice = 50000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">50million</li>
                <li @click="selectedMaxPrice = 100000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">100million</li>
                <li @click="selectedMaxPrice = 200000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">200million</li>
                <li @click="selectedMaxPrice = 300000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">300million</li>
                <li @click="selectedMaxPrice = 500000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">500million</li>
                <li @click="selectedMaxPrice = 1000000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer dark:hover:bg-gray-600 dark:hover:text-gray-300">1bilion</li>
            
            </ul>
        </div>
        <input type="hidden" name="maxPrice" x-model="selectedMaxPrice">
    </div>

     


        <div class="">
            <button type="submit" class="flex items-center font-semibold gap-x-1 justify-center px-4 py-2 text-xs md:text-base bg-[#216bff] text-white rounded-md">
                Filter
                  <svg class="size-4 fill-gray-100 dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M8.5 6C7.1364058 6 6 7.1364058 6 8.5L6 11.589844C6 13.886494 7.0554772 16.058837 8.859375 17.480469L19 25.470703L19 40.5 A 1.50015 1.50015 0 0 0 21.371094 41.720703L28.371094 36.720703 A 1.50015 1.50015 0 0 0 29 35.5L29 25.46875L39.140625 17.480469C40.944523 16.058837 42 13.886494 42 11.589844L42 8.5C42 7.1364058 40.863594 6 39.5 6L8.5 6 z M 9 9L39 9L39 11.589844C39 12.969193 38.369258 14.268678 37.285156 15.123047L27.287109 23L20.712891 23L10.714844 15.123047C9.6307412 14.268678 9 12.969193 9 11.589844L9 9 z M 22 26L26 26L26 34.728516L22 37.585938L22 26 z" />
                  </svg>
            </button>
        </div>
    </form>

</div>

    {{-- <div class="mt-4">
        <h2 class="text-xl font-semibold">Filtered Assets</h2>
        <ul>
            @forelse($assets as $asset)
                <li class="mb-2 border-b border-gray-300 pb-2">
                    <h3 class="text-lg font-bold">{{ $asset->asset_name }}</h3>
                    <p>Type: {{ $asset->asset_type }}</p>
                    <p>Price: ${{ number_format($asset->price, 2) }}</p>
                    <p>Location: {{ $asset->asset_location_details ?? 'N/A' }}</p>
                    <!-- Add other asset details as needed -->
                </li>
            @empty
                <li>No assets available with the selected criteria.</li>
            @endforelse
        </ul>
    </div> --}}
</div>
