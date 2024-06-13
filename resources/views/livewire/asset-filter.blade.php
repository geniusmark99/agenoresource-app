<div x-data="{ open: false, selectedMinPrice: '', selectedMaxPrice: '', selectedAssetType: '', searchTerm: '' }">
    <form method="GET" action="{{ route('assets.search') }}" class="flex justify-center gap-x-1 items-center bg-ageno shadow-lg py-2">

        <div class=" relative min-w-24  md:min-w-32" x-data="{ open: false }">
            <button type="button" @click="open = !open" class="whitespace-nowrap w-full px-2 md:px-4 py-2 bg-white flex justify-between items-center rounded-md text-left">
                <span class="text-ageno font-semibold" x-text="selectedAssetType ? selectedAssetType : 'Asset Type'"></span>
                <svg class="size-3 transition-transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
                  </svg>
            </button>
            <div x-show="open" @click.away="open = false" class="absolute mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                <ul>
                    <li @click="selectedAssetType = ''; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">All</li>
                    <li @click="selectedAssetType = 'sale'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Sale</li>
                    <li @click="selectedAssetType = 'lease'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Lease</li>
                    <li @click="selectedAssetType = 'partner'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Partner</li>
                    <li @click="selectedAssetType = 'equipment'; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Equipment</li>
                </ul>
            </div>
            <input type="hidden" name="assetType" x-model="selectedAssetType">
        </div>

{{--         
        <div class="w-6/12">
            <input type="text" id="search" name="search" wire:model="search" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div> --}}

        <div class=" relative min-w-24  md:min-w-36" x-data="{ open: false }">
            <button type="button" @click="open = !open" class="whitespace-nowrap w-full px-2 md:px-4 py-2 bg-white gap-x-2 rounded-md text-left flex justify-between items-center">
                <span class="text-ageno font-semibold" x-text="selectedMinPrice ? '&#8358;' + selectedMinPrice : 'Min Price'"></span>
                <svg class="size-3 transition-transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
                  </svg>
                
            </button>
            <div x-show="open" @click.away="open = false" class="absolute mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg">
                <ul class="max-h-[300px] overflow-x-hidden overflow-y-auto">
                    <li @click="selectedMinPrice = ''; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Any</li>
                    <li @click="selectedMinPrice = 50000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">50,000</li>
                    <li @click="selectedMinPrice = 100000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">100,000</li>
                    <li @click="selectedMinPrice = 200000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">200,000</li>
                    <li @click="selectedMinPrice = 300000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">300,000</li>
                    <li @click="selectedMinPrice = 400000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">400,000</li>
                    <li @click="selectedMinPrice = 500000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">500,000</li>
                    <li @click="selectedMinPrice = 1000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">1million</li>
                    <li @click="selectedMinPrice = 2000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">2million</li>
                    <li @click="selectedMinPrice = 3000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">3million</li>
                    <li @click="selectedMinPrice = 4000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">4million</li>
                    <li @click="selectedMinPrice = 5000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">5million</li>
                    <li @click="selectedMinPrice = 10000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">10million</li>
                    <li @click="selectedMinPrice = 20000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">20million</li>
                    <li @click="selectedMinPrice = 30000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">30million</li>
                    <li @click="selectedMinPrice = 40000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">40million</li>
                    <li @click="selectedMinPrice = 50000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">50million</li>
                    <li @click="selectedMinPrice = 100000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">100million</li>
                
                </ul>
            </div>
            <input type="hidden" name="minPrice" x-model="selectedMinPrice">
        </div>

       <!-- Max Price Dropdown -->
       <div class=" relative min-w-20  md:min-w-32" x-data="{ open: false }">
        <button type="button" @click="open = !open" class=" whitespace-nowrap w-full px-2 md:px-4 py-2 bg-white rounded-md text-left flex justify-between items-center">
            <span class="text-ageno font-semibold" x-text="selectedMaxPrice ? '&#8358;' + selectedMaxPrice : 'Max Price'"></span>
            <svg class="size-3 transition-transform" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
              </svg>
        </button>
        <div x-show="open" @click.away="open = false" class="absolute mt-1 w-full bg-white border border-gray-300 rounded-md shadow-lg">
           
            <ul class="max-h-[300px] overflow-x-hidden overflow-y-auto">
                <li @click="selectedMaxPrice = ''; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Any</li>
                <li @click="selectedMaxPrice = 500000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">500,000</li>
                <li @click="selectedMaxPrice = 600000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">600,000</li>
                <li @click="selectedMaxPrice = 700000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">700,000</li>
                <li @click="selectedMaxPrice = 800000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">800,000</li>
                <li @click="selectedMaxPrice = 900000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">900,000</li>
                <li @click="selectedMaxPrice = 1000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">1million</li>
                <li @click="selectedMaxPrice = 2000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">2million</li>
                <li @click="selectedMaxPrice = 3000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">3million</li>
                <li @click="selectedMaxPrice = 4000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">4million</li>
                <li @click="selectedMaxPrice = 5000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">5million</li>
                <li @click="selectedMaxPrice = 10000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">10million</li>
                <li @click="selectedMaxPrice = 20000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">20million</li>
                <li @click="selectedMaxPrice = 30000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">30million</li>
                <li @click="selectedMaxPrice = 40000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">40million</li>
                <li @click="selectedMaxPrice = 50000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">50million</li>
                <li @click="selectedMaxPrice = 100000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">100million</li>
                <li @click="selectedMaxPrice = 200000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">200million</li>
                <li @click="selectedMaxPrice = 300000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">300million</li>
                <li @click="selectedMaxPrice = 500000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">500million</li>
                <li @click="selectedMaxPrice = 1000000000; open = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">1bilion</li>
            
            </ul>
        </div>
        <input type="hidden" name="maxPrice" x-model="selectedMaxPrice">
    </div>

     


        <div class="">
            <button type="submit" class="px-4 py-2 bg-[#216bff] text-white rounded-md">Search</button>
        </div>
    </form>

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
