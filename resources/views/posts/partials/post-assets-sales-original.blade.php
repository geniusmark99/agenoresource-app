<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class="">
    <section>
    <header class="flex justify-between flex-col gap-y-4 lg:flex-row">
    <div>
    <h2 class="text-sm md:text-lg font-medium text-gray-900 dark:text-gray-100">
    {{ __('Post Assets for Sales, Lease or Partnership') }}
    </h2>

    <p class="mt-1 text-xs md:text-sm text-gray-600 dark:text-gray-400">
    {{ __("Post your assets for sales, lease or partnership information") }}
    </p>
    </div>


    <div class="flex flex-col justify-start">
    <div class="flex gap-10 mb-5">
    <div class="inline-flex items-center">  
    <label class="relative flex items-center p-3 rounded-full cursor-pointer" >
    <input name="type" type="radio"
    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border-2 border-blue-gray-200 text-white transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-indigo-900 checked:before:bg-indigo-900 hover:before:opacity-10"
    id="publish" />
    <span
    class="absolute text-indigo-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
    </svg>
    </span>
    </label>
    <label class="mt-px font-light text-gray-700 dark:text-gray-300 cursor-pointer select-none">
    Publish
    </label>
    </div>  
    <div class="inline-flex items-center" x-data="{ open: false }">

    <button  @click="open = true" class="mt-px p-2 rounded-md bg-ageno-2 hover:bg-indigo-500/80 hover:shadow-md font-light text-white outline-none focus:outline-none focus:ring-0 appearance-none dark:bg-indigo-500 dark:hover:bg-indigo-600 dark:text-gray-200 cursor-pointer select-none" >
     How to publish
    </button>

       <!-- Modal -->
        <div x-show="open" 
             @click.away="open = false"
             
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
             class="fixed inset-0 flex z-[1000] items-center justify-center bg-gray-300/80 dark:bg-slate-500/30 bg-opacity-80">
             <div class="mx-4">
            <div class="bg-white dark:bg-slate-900 dark:text-gray-300 rounded-lg shadow-lg p-6 w-full lg:max-w-[500px] min-h-[400px]">
                <h2 class="text-xl font-semibold mb-4 text-center">How to publish</h2>
                <p class="mb-4">
                    <ul class="list-disc space-y-2 mb-10">
                        <li class="leading-7">Make your payment to Agenoresource Account based on your choosen plan (i.e Bronze,Silver,Gold,Diamond or Platinum)</li>
                        <li class="leading-7">Send your payment receipt with your ID at the top of your Dashboard profile to Admin Whatsapp</li>
                        <li class="leading-7">After Admin has verified your payment then your assets will be publised on our page for your potential customers to see</li>
                    </ul>
                </p>
                <div class="flex justify-end">
                    <button @click="open = false" class="px-4 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-500/80">Close</button>
                </div>
            </div>
             </div>
        </div>
    </div>

   
    </div> 

    <p class="pl-3 text-xs md:text-sm lg:text-base">
    <a href="" class="text-indigo-500 underline font-thin">
    Upgrade to <b class="font-bold">premium feature</b>  this listing
    </a>
    </p>





    </div>

    </header>
<div class="rounded-md border shadow-sm mt-10 py-3 px-2 md:mx-40">
    <div class="flex items-center justify-between">

<button class="flex flex-col justify-center items-center md:flex-row md:gap-x-2">
    <div class="bg-ageno-2 rounded-full size-10 flex justify-center items-center">
    <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M7.5 7C6.1364058 7 5 8.1364058 5 9.5L5 14.5C5 15.863594 6.1364058 17 7.5 17L12.5 17C13.863594 17 15 15.863594 15 14.5L15 9.5C15 8.1364058 13.863594 7 12.5 7L7.5 7 z M 8 10L12 10L12 14L8 14L8 10 z M 19.5 11 A 1.50015 1.50015 0 1 0 19.5 14L27.5 14 A 1.50015 1.50015 0 1 0 27.5 11L19.5 11 z M 33.5 11 A 1.50015 1.50015 0 1 0 33.5 14L41.5 14 A 1.50015 1.50015 0 1 0 41.5 11L33.5 11 z M 7.5 19C6.1364058 19 5 20.136406 5 21.5L5 26.5C5 27.863594 6.1364058 29 7.5 29L12.5 29C13.863594 29 15 27.863594 15 26.5L15 21.5C15 20.136406 13.863594 19 12.5 19L7.5 19 z M 8 22L12 22L12 26L8 26L8 22 z M 19.5 23 A 1.50015 1.50015 0 1 0 19.5 26L27.5 26 A 1.50015 1.50015 0 1 0 27.5 23L19.5 23 z M 33.5 23 A 1.50015 1.50015 0 1 0 33.5 26L41.5 26 A 1.50015 1.50015 0 1 0 41.5 23L33.5 23 z M 7.5 31C6.1364058 31 5 32.136406 5 33.5L5 38.5C5 39.863594 6.1364058 41 7.5 41L12.5 41C13.863594 41 15 39.863594 15 38.5L15 33.5C15 32.136406 13.863594 31 12.5 31L7.5 31 z M 8 34L12 34L12 38L8 38L8 34 z M 19.5 35 A 1.50015 1.50015 0 1 0 19.5 38L27.5 38 A 1.50015 1.50015 0 1 0 27.5 35L19.5 35 z M 33.5 35 A 1.50015 1.50015 0 1 0 33.5 38L41.5 38 A 1.50015 1.50015 0 1 0 41.5 35L33.5 35 z" fill="#ECE8E8" />
    </svg>
    </div>
    <div class="flex flex-col justify-start items-center">
    <span class="text-sm text-ageno font-normal">Step One</span>
    <span class="text-xs md:text-base font-medium">
    Asset Plan Details
    </span>
    </div>
</button>


<button class="flex flex-col justify-center items-center md:flex-row md:gap-x-2">
    <div class="bg-ageno-2 rounded-full size-10 flex justify-center items-center">
    <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M7.5 7C6.1364058 7 5 8.1364058 5 9.5L5 14.5C5 15.863594 6.1364058 17 7.5 17L12.5 17C13.863594 17 15 15.863594 15 14.5L15 9.5C15 8.1364058 13.863594 7 12.5 7L7.5 7 z M 8 10L12 10L12 14L8 14L8 10 z M 19.5 11 A 1.50015 1.50015 0 1 0 19.5 14L27.5 14 A 1.50015 1.50015 0 1 0 27.5 11L19.5 11 z M 33.5 11 A 1.50015 1.50015 0 1 0 33.5 14L41.5 14 A 1.50015 1.50015 0 1 0 41.5 11L33.5 11 z M 7.5 19C6.1364058 19 5 20.136406 5 21.5L5 26.5C5 27.863594 6.1364058 29 7.5 29L12.5 29C13.863594 29 15 27.863594 15 26.5L15 21.5C15 20.136406 13.863594 19 12.5 19L7.5 19 z M 8 22L12 22L12 26L8 26L8 22 z M 19.5 23 A 1.50015 1.50015 0 1 0 19.5 26L27.5 26 A 1.50015 1.50015 0 1 0 27.5 23L19.5 23 z M 33.5 23 A 1.50015 1.50015 0 1 0 33.5 26L41.5 26 A 1.50015 1.50015 0 1 0 41.5 23L33.5 23 z M 7.5 31C6.1364058 31 5 32.136406 5 33.5L5 38.5C5 39.863594 6.1364058 41 7.5 41L12.5 41C13.863594 41 15 39.863594 15 38.5L15 33.5C15 32.136406 13.863594 31 12.5 31L7.5 31 z M 8 34L12 34L12 38L8 38L8 34 z M 19.5 35 A 1.50015 1.50015 0 1 0 19.5 38L27.5 38 A 1.50015 1.50015 0 1 0 27.5 35L19.5 35 z M 33.5 35 A 1.50015 1.50015 0 1 0 33.5 38L41.5 38 A 1.50015 1.50015 0 1 0 41.5 35L33.5 35 z" fill="#ECE8E8" />
    </svg>
    </div>
    <div class="flex flex-col justify-start items-center">
    <span class="text-sm text-ageno font-normal">Step Two</span>
    <span class="text-xs md:text-base font-medium">
    Asset Details
    </span>
    </div>
</button>

{{-- <div class="hidden md:flex w-full lg:w-6/12 h-0.5 bg-ageno-2 bg-opacity-10 lg:mx-2 rounded-md">

</div> --}}

<button class="flex flex-col justify-center items-center md:flex-row md:gap-x-2">
    <div class="bg-ageno-2 rounded-full size-10 flex justify-center items-center">
  <svg class="size-6"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
        <path d="M9.5 6C5.3754991 6 2 9.3754991 2 13.5L2 29.5C2 33.624501 5.3754991 37 9.5 37L33.5 37C37.624501 37 41 33.624501 41 29.5L41 13.5C41 9.3754991 37.624501 6 33.5 6L9.5 6 z M 9.5 9L33.5 9C36.003499 9 38 10.996501 38 13.5L38 29.5C38 29.673588 37.96792 29.837643 37.949219 30.005859L29.75 22.072266C29.016121 21.362903 28.056962 21.007812 27.097656 21.007812C26.13835 21.007812 25.179192 21.362903 24.445312 22.072266 A 1.50015 1.50015 0 0 0 24.443359 22.072266L22.345703 24.101562L17.150391 19.074219C16.416511 18.364857 15.4554 18.009766 14.496094 18.009766C13.536788 18.009766 12.577629 18.364857 11.84375 19.074219L5 25.695312L5 13.5C5 10.996501 6.9965009 9 9.5 9 z M 43 10.513672L43 30.5C43 35.187 39.187 39 34.5 39L12.013672 39C13.383672 40.818 15.553 42 18 42L34.5 42C40.841 42 46 36.841 46 30.5L46 16.5C46 14.054 44.818 11.883672 43 10.513672 z M 30.5 13 A 2.5 2.5 0 0 0 30.5 18 A 2.5 2.5 0 0 0 30.5 13 z M 14.498047 20.992188C14.699678 20.992188 14.900333 21.071831 15.064453 21.230469L20.189453 26.1875L12.113281 34L9.5 34C7.1117621 34 5.2055653 32.176628 5.0332031 29.835938L13.929688 21.230469C14.093808 21.071831 14.296416 20.992188 14.498047 20.992188 z M 27.095703 23.992188C27.297334 23.992188 27.499942 24.071831 27.664062 24.230469L27.664062 24.228516L36.537109 32.814453C35.73831 33.545784 34.68019 34 33.5 34L16.427734 34L26.529297 24.228516L26.529297 24.230469C26.693417 24.071831 26.894072 23.992188 27.095703 23.992188 z" fill="#ECE8E8" />
      </svg>
    </div>
    <div class="flex flex-col justify-start items-center">
    <span class="text-sm text-ageno font-normal">Step Three</span>
    <span class="text-xs md:text-base font-medium">
    Asset Files
    </span>
    </div>
</button>
</div>

</div>
@session('success')
<div class="w-full flex justify-center items-center ">
<div class="max-w-[250px] whitespace-nowrap bg-teal-600 dark:bg-green-700 text-green-200 rounded-lg px-2 py-1 shadow-lg">
{{ session('success') }}
</div>
</div>
@endsession

    {{-- <form id="assetForm" class="mt-6 space-y-6" method="POST" 
    @submit.prevent="submitStep(1)"
    action="{{ route('post.sale.assets') }}" 
    enctype="multipart/form-data"> --}}
    <form  
    x-data="
      {
            step: 1,
            formData: {
                name: '',
                email: '',
                address: '',
                city: ''
            },
            submitStep(stepNumber) {
            this.step = stepNumber + 1;
            },
            submitFinal() {
                
            }
        }
    "
    >

    <div x-show="step === 1" class="mt-6 space-y-6">

        
    <div>
            <x-input-label for="plan" :value="__('Asset Plan')" />

            <div class="gap-y-5 lg:py-4 mt-1 flex px-3 justify-start items-start flex-col lg:flex-row lg:justify-between lg:items-center bg-white dark:bg-gray-900 dark:border-gray-700 border shadow py-3 rounded-lg">
            <div class="flex items-center">
            <input id="bronze-plan" name="plan" type="radio" value="bronze" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="bronze-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
            Bronze Plan
            </label>
            </div>

            <div class="flex items-center">
            <input id="silver-plan" name="plan" type="radio" value="silver" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="silver-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
            Silver Plan
            </label>
            </div>

            <div class="flex items-center">
            <input id="gold-plan" name="plan" type="radio" value="gold" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="gold-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
            Gold Plan
            </label>
            </div>

            <div class="flex items-center">
            <input id="diamond-plan" name="plan" type="radio" value="diamond" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="diamond-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
            Diamond Plan
            </label>
            </div>


            <div class="flex items-center">
            <input id="platinum-plan" name="plan" type="radio" value="platinum" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
            <label for="platinum-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
            Platinum Plan
            </label>
            </div>
            </div>

    </div>
    
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative">
        <x-input-label for="asset_type" :value="__('Asset Type')" />    
        <div x-data="{ open: false, selectedMinPrice: '', selectedMaxPrice: '', selectedAssetType: '', searchTerm: '', }"
            class=" relative min-w-24  md:min-w-32" x-data="{ open: false }">
            <button type="button" @click="open = !open" class="whitespace-nowrap border mt-1 shadow-sm w-full px-2 border-gray-300 dark:border-gray-700  dark:text-gray-300 md:px-4 py-2 bg-white dark:bg-gray-900 flex justify-between items-center rounded-md text-left">
                <span class="font-normal" x-text="selectedAssetType ? selectedAssetType : 'Asset Type'"></span>
                <svg class="size-3 transition-transform dark:fill-gray-100" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
                    </svg>
            </button>
            <div x-show="open" @click.away="open = false" class="z-[1000] absolute mt-1 w-full bg-white dark:bg-gray-900 border dark:border-gray-700  dark:text-gray-300 border-gray-300 rounded-md shadow-lg">
                <ul>
                    <li @click="selectedAssetType = ''; open = false" class="px-4 py-2 rounded-t-md hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">All</li>
                    <li @click="selectedAssetType = 'sale'; open = false" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">Sale</li>
                    <li @click="selectedAssetType = 'lease'; open = false" class="px-4 py-2 hover:bg-gray-100  dark:hover:bg-gray-700 cursor-pointer">Lease</li>
                    <li @click="selectedAssetType = 'partner'; open = false" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">Partner</li>
                    <li @click="selectedAssetType = 'equipment'; open = false" class="px-4 py-2 rounded-b-md hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">Equipment</li>
                </ul>
            </div>
            <input type="hidden" id="asset_type" name="asset_type" x-model="selectedAssetType" value="{{ old('asset_type')}}">
        </div>
        
        <x-input-error class="mt-2" :messages="$errors->get('asset_type')" />
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="asset_name" :value="__('Asset Name')" />
        <x-text-input id="asset_name" name="asset_name" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('asset_name')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('asset_name')" />
        </div>
    </div>
    
    
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative">
        <x-input-label for="technical_report" :value="__('Technical Report (URL)')" />
        <x-text-input id="technical_report" name="technical_report" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('technical_report')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('technical_report')" />
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="asset_information" :value="__('Asset Information')" />
        <x-text-input id="asset_information" name="asset_information" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('asset_information')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('asset_information')" />
        </div>
    </div>
    
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

        <div class="mb-4 relative">
        <x-input-label for="asset_location_details" :value="__('Assets Location Details')" />
        <x-text-input id="asset_location_details" name="asset_location_details" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('asset_location_details')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('asset_location_details')" />
        </div>

        <div class="mb-4 relative">
        <x-input-label for="geological_location" :value="__('Geological Location')" />
        <x-text-input id="geological_location" name="geological_location" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('geological_location')"  autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('geological_location')" />
        </div>

    </div>
    
     <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative" x-data="{ price: '' }" >
        <x-input-label for="price" :value="__('Price')" />
        <div class="flex items-center w-full gap-x-2">
        <div class="py-2 px-3 mt-1 rounded-md border shadow-sm  text-gray-500 dark:border-gray-700 dark:bg-gray-900 font-semibold text-base">&#8358;</div>
        <input 
        x-on:input="price = price.replace(/[^0-9.]/g, '')"
        type="text"
        name="price"
        id="price"
        placeholder="0.00"
        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"
        value="{{ old('price')}}">
        </div>
        
        <x-input-error class="mt-2" :messages="$errors->get('price')" />
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="coordinates" :value="__('Coordinates')" />
        <x-text-input id="coordinates" name="coordinates" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('coordinates')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('coordinates')" />
        </div>
    </div>
    
    
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative">
        <x-input-label for="reserve_deposit" :value="__('Reserve Deposit')" />
        <x-text-input id="reserve_deposit" name="reserve_deposit" type="text"
        class="mt-1 block w-full dark:bg-gray-900" :value="old('reserve_deposit')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('reserve_deposit')" />
        
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="jorc_report" :value="__('JORC Report')" />
        <x-text-input id="jorc_report" name="jorc_report" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('jorc_report')"  autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('jorc_report')" />
        </div>
    </div>

    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative">
        <x-input-label for="opportunity_type" :value="__('Opportunity Type')" />
        <x-text-input value="{{old('opportunity_type')}}" id="opportunity_type"  name="opportunity_type" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('opportunity_type')" autofocus />
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="land_size" :value="__('Land Size')" />
        <div class="flex items-center gap-x-2">     
        <div x-data="{ quantity: 1 }" class="flex gap-x-2 items-center">
        <div @click="quantity = Math.max(1, quantity - 1)" class="cursor-pointer bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm  dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        -
        </div>
        <input  x-model="quantity" name="land_size" value="{{old('land_size')}}" type="number" min="1"  class='appearance-none bg-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 shadow-sm text-gray-700 text-center border border-gray-300 rounded w-[100px] py-2 px-4'>
        <div @click="quantity = quantity + 1" class="cursor-pointer bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
        +
        </div>
        </div>
        <select
        class="mt-1 block w-2/12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"         
        >
        <option value="USD">Cadastre</option>
        <option value="USD">
        Kilometre
        
        </option>
        </select>
        </div>
        
        <x-input-error class="mt-2" :messages="$errors->get('land_size')" />
        </div>
    </div> 
    
    
    

    
<div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
    <div class="mb-1 w-full relative">
    <x-input-label for="mineral_details" :value="__('Mineral Details')" />
    <x-input-textarea />
    <x-input-error class="mt-2" :messages="$errors->get('mineral_details')" />
    </div>

    <div class="mb-1 mt-4 w-full relative flex flex-col gap-y-10 lg:gap-y-5">


    <div>   
    <x-input-label for="mineral_details" :value="__('Duration')" />
    <div x-data="{ open: false, selectedDurationType: '', }"
    class=" relative min-w-24  md:min-w-32" x-data="{ open: false }">
    <button type="button" @click="open = !open" class="whitespace-nowrap border mt-1 shadow-sm w-full px-2 border-gray-300 dark:border-gray-700  dark:text-gray-300 md:px-4 py-2 bg-white dark:bg-gray-900 flex justify-between items-center rounded-md text-left">
    <span class="font-normal" x-text="selectedDurationType ? selectedDurationType : 'Duration'"></span>
    <svg class="size-3 transition-transform dark:fill-gray-100" :class="open ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
    <path d="M41.586,12.586L24,30.172L6.414,12.586c-0.781-0.781-2.047-0.781-2.828,0s-0.781,2.047,0,2.828l19,19 C22.977,34.805,23.488,35,24,35s1.023-0.195,1.414-0.586l19-19c0.781-0.781,0.781-2.047,0-2.828S42.367,11.805,41.586,12.586z" />
    </svg>
    </button>
    <div x-show="open" @click.away="open = false" class="z-[1000] absolute mt-1 w-full bg-white dark:bg-gray-900 border dark:border-gray-700  dark:text-gray-300 border-gray-300 rounded-md shadow-lg">
    <ul>
    <li @click="selectedDurationType = ''; open = false" class="px-4 py-2 rounded-t-md hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">All</li>
    <li @click="selectedDurationType = '1 week'; open = false" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">1 week</li>
    <li @click="selectedDurationType = '2 weeks'; open = false" class="px-4 py-2 hover:bg-gray-100  dark:hover:bg-gray-700 cursor-pointer">2 weeks</li>
    <li @click="selectedDurationType = '3 weeks'; open = false" class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">3 weeks</li>
    <li @click="selectedDurationType = '4 weeks'; open = false" class="px-4 py-2 rounded-b-md hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">4 weeks</li>
    </ul>
    </div>
    <input type="hidden"  id="duration" name="duration" x-model="selectedDurationType" value="{{ old('duration')}}">
    <x-input-error class="mt-2" :messages="$errors->get('duration')" />
    </div>
    </div>

    <div class="mb-1 w-full relative">
    <x-input-label for="contact_information" :value="__('Contact Information')" />
    <x-text-input id="contact_information" name="contact_information" type="text"
    class="mt-1 block w-full dark:bg-gray-900" :value="old('contact_information')" autofocus />
    <x-input-error class="mt-2" :messages="$errors->get('contact_information')" />
    </div>
    </div>
</div>

    
    
    <div class="flex flex-col gap-y-4 lg:flex-row items-center lg:justify-between">
        <button type='submit' class='invisible items-center justify-center text-center px-4 py-3 w-80 bg-ageno dark:bg-ageno-2 dark:hover:bg-ageno-3 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-300 uppercase tracking-widest hover:bg-ageno-2  focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'>
            Submit
 *         </button>

          <button type='button' class='flex items-center justify-center text-center px-4 py-3 w-80 bg-ageno dark:bg-ageno-2 dark:hover:bg-ageno-3 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-300 uppercase tracking-widest hover:bg-ageno-2  focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'>
            Next
          </button>
    </div>

</div>


</form>


{{-- <div x-show="step === 2">
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
    
        <div class="mb-1 w-full relative">
        <input type="file" multiple  name="video"  accept="video/*"/>
        <x-input-error class="mt-2" :messages="$errors->get('video')" />
        </div>
<div x-data="videoUploader()" class="p-5 bg-white dark:bg-slate-900 rounded-lg shadow-md">
        <x-input-label for="pictures" :value="__('Upload your assets video(s)')" class="mb-5"/>

    
        <div x-show="successMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-green-100 text-green-700 rounded shadow-md" x-text="successMessage" x-transition x-init="setTimeout(() => { successMessage = '' }, 5000)"></div>
        <div x-show="errorMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-red-100 text-red-700 rounded shadow-md" x-text="errorMessage" x-transition x-init="setTimeout(() => { errorMessage = '' }, 5000)"></div>
        <div x-show="warningMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-yellow-100 text-yellow-700 rounded shadow-md" x-text="warningMessage" x-transition x-init="setTimeout(() => { warningMessage = '' }, 5000)"></div>
        <div  class="space-y-5">
            <div
                x-ref="dropArea"
                @dragover.prevent="dragOver"
                @dragleave.prevent="dragLeave"
                @drop.prevent="handleDrop"
                class="border-2 border-dashed border-gray-200 rounded-lg p-10 text-center cursor-pointer"
                :class="{'bg-gray-200': isDragging}"
                @click="$refs.fileInput.click()"
            >
                <p class="text-gray-500">Drag & drop videos here, or click to select videos</p>
                <input type="file" multiple x-ref="fileInput" name="video[]" @change="handleFiles" accept="video/*" 
                class="hidden">
            </div>
    
            <div class="grid grid-cols-3 gap-4">
                <template x-for="(file, index) in files" :key="index">
                    <div class="relative">
                        <video class="w-full h-32 object-cover rounded-lg" controls>
                            <source :src="file.url" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <button type="button" @click="removeFile(index)" 
                        title="click to remove"
                  class="absolute text-xl top-0 right-0 size-6 flex justify-center items-center hover:bg-red-700 bg-red-500 text-white p-1 rounded-full">

                            &times;
                        </button>
                    </div>
                </template>
            </div>

        </div>


        
    </div> 


    
        
<div class="container mx-auto py-8">
    <div class="mb-1 w-full relative">

    <input type="file" multiple name="pictures[]" >
    <x-input-error class="mt-2" :messages="$errors->get('pictures')" />
    

    </div>

    <div x-data="imageUploader()" class="max-w-2xl mx-auto p-5 bg-white dark:bg-slate-900 rounded-lg shadow-md">
      <x-input-label for="pictures" :value="__('Upload your assets images')" class="mb-5"/>
      
    
      <!-- Popup Messages -->
      <div x-show="successMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-green-100 text-green-700 rounded shadow-md" x-text="successMessage" x-transition x-init="setTimeout(() => successMessage = '', 5000)"></div>
      <div x-show="errorMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-red-100 text-red-700 rounded shadow-md" x-text="errorMessage" x-transition x-init="setTimeout(() => errorMessage = '', 5000)"></div>
    
      
      <div class="space-y-5">
          <div
              x-ref="dropArea"
              @dragover.prevent="dragOver"
              @dragleave.prevent="dragLeave"
              @drop.prevent="handleDrop"
              class="border-2 mb-5 border-dashed border-gray-200 rounded-lg p-10 text-center cursor-pointer"
              :class="{'bg-gray-200': isDragging}"
              @click="$refs.fileInput.click()"
          >
              <p class="text-gray-500">Drag & drop images here, or click to select images</p>
              <input type="file" multiple name="pictures[]" x-ref="fileInput" @change="handleFiles" class="hidden">
          </div>
    
          <div class="grid grid-cols-3 gap-4 mb-5">
              <template x-for="(file, index) in files" :key="index">
                  <div class="relative">
                      <img :src="file.url" class="w-full h-32 object-cover rounded-lg">
                      <button type="button" @click="removeFile(index)" 
                      title="click to remove"
                      class="absolute text-xl top-0 right-0 size-6 flex justify-center items-center hover:bg-red-700 bg-red-500 text-white p-1 rounded-full">
                          &times;
                      </button>
                  </div>
              </template>
          </div>
    
      
        </div> 
    </div> 
    </div> 

    </div>


</div> --}}

</section>
</div>
</div>




</div>

  