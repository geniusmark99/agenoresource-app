
@php
    $dynamicClass = 'pointer-events-none opacity-50 select-none';
@endphp

<div 
@if (!Auth::user()->govt_id || !Auth::user()->cac_document)
class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 {{ $dynamicClass }}" 
@elseif (Auth::user()->govt_id || Auth::user()->cac_document)
@if ("blocked" === Auth::user()->status)
class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 {{ $dynamicClass }}" 
@else class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6"
@endif
@endif
x-data="{ showPopup: false, showPlanChoose: false, showMore:false ,selectedPlan: '', planContent: '', acceptTerms: false }">

@if (!Auth::user()->govt_id || !Auth::user()->cac_document)
<div class="w-full flex justify-center text-center ">
    <div class="text-emerald-200 bg-emerald-500 px-3 py-2 rounded-md shadow-md">
        You can't upload assets until you have uploaded your NIN and CAC
    </div>
</div>
@endif
<div 
class="p-4 sm:p-8 bg-white shadow sm:rounded-lg" >
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
<label class="mt-px font-light text-gray-700 dark:text-gray-300 cursor-pointer select-none">
Publish
</label>
</div>  
<div class="inline-flex items-center" x-data="{ open: false }">
<button  @click="open = true" class="mt-px p-2 rounded-md bg-ageno-2 hover:bg-ageno hover:shadow-md font-light text-white outline-none focus:outline-none focus:ring-0 appearance-none dark:bg-ageno-2 dark:hover:bg-indigo-600 dark:text-gray-200 cursor-pointer select-none" >
How to publish
</button>
<template x-if="true">
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
<button @click="open = false" class="px-4 py-2 text-white bg-ageno-2 rounded hover:bg-ageno-2/80">Close</button>
</div>
</div>
</div>
</div>
</template>
</div>
</div> 
</div>
</header>


<div class="rounded-md border shadow-sm mt-10 py-3"  x-data="priceCalculator()">

<div class="p-8 rounded-lg">
<div class="form-progress relative justify-between mx-0 px-0 mb-6 flex">

<div class="absolute top-[50%] left-[10%] transform translate-y-[50%] h-[2px] w-[10%] bg-ageno-2 
transition-all ease-in-out z-10" id="progressBar"></div>

<div class="absolute top-[50%] left-[10%] transform translate-y-[50%] h-[2px] w-[80%] bg-gray-300 
transition-all ease-in-out"></div>

<div class="form-progress-indicator w-1/4 text-center relative z-30">
<div class="size-8 lg:size-12 text-sm rounded-full border-2 shadow-lg border-white bg-ageno-2 mx-auto text-white flex items-center justify-center z-10">
<svg class="fill-current size-3 md:size-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
    <path d="M43.470703 8.9863281 A 1.50015 1.50015 0 0 0 42.439453 9.4394531L16.5 35.378906L5.5605469 24.439453 A 1.50015 1.50015 0 1 0 3.4394531 26.560547L15.439453 38.560547 A 1.50015 1.50015 0 0 0 17.560547 38.560547L44.560547 11.560547 A 1.50015 1.50015 0 0 0 43.470703 8.9863281 z" />
    </svg>
</div>
</div>
<div class="form-progress-indicator w-1/4 text-center relative z-30">
<div class="size-8 lg:size-12 rounded-full border-2 shadow-lg border-white mx-auto text-white flex items-center justify-center z-10">
<svg class="fill-current size-3 md:size-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
    <path d="M43.470703 8.9863281 A 1.50015 1.50015 0 0 0 42.439453 9.4394531L16.5 35.378906L5.5605469 24.439453 A 1.50015 1.50015 0 1 0 3.4394531 26.560547L15.439453 38.560547 A 1.50015 1.50015 0 0 0 17.560547 38.560547L44.560547 11.560547 A 1.50015 1.50015 0 0 0 43.470703 8.9863281 z" />
    </svg>
</div>
</div>
<div class="form-progress-indicator w-1/4 text-center relative z-30">
<div class="size-8 lg:size-12 rounded-full border-2 shadow-lg border-white mx-auto text-white flex items-center justify-center z-10">
<svg class="fill-current size-3 md:size-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
    <path d="M43.470703 8.9863281 A 1.50015 1.50015 0 0 0 42.439453 9.4394531L16.5 35.378906L5.5605469 24.439453 A 1.50015 1.50015 0 1 0 3.4394531 26.560547L15.439453 38.560547 A 1.50015 1.50015 0 0 0 17.560547 38.560547L44.560547 11.560547 A 1.50015 1.50015 0 0 0 43.470703 8.9863281 z" />
    </svg>
</div>
</div>
<div class="form-progress-indicator w-1/4 text-center relative z-30">
<div class="size-8 lg:size-12 rounded-full border-2 shadow-lg border-white mx-auto text-white flex items-center justify-center z-10">
<svg class="fill-current size-3 md:size-4" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
    <path d="M43.470703 8.9863281 A 1.50015 1.50015 0 0 0 42.439453 9.4394531L16.5 35.378906L5.5605469 24.439453 A 1.50015 1.50015 0 1 0 3.4394531 26.560547L15.439453 38.560547 A 1.50015 1.50015 0 0 0 17.560547 38.560547L44.560547 11.560547 A 1.50015 1.50015 0 0 0 43.470703 8.9863281 z" />
    </svg>
</div>
</div>


</div>



<template x-if="true">
    {{-- <div class="mt-4 p-4 bg-green-100 text-green-800 rounded-lg">
        <p class="text-lg font-semibold">Total Price: $<span x-text="totalPrice"></span></p>
      </div> --}}
    <div  x-show="showPrice">
<div class="flex justify-center items-center text-center my-5">
    <span class="mt-3 inline-block whitespace-nowrap text-base leading-5 font-semibold tracking-wide uppercase bg-blue-600 text-white rounded-full py-1 px-2.5"
    >Total Price:  &#8358;<span x-text="totalPrice"></span></span>

</div>
    </div>
</template>

<form id="progressForm" method="POST" action="{{route('post.sale.assets')}}">
@csrf
<div class="js-form-step active" data-step="1">
<div class="flex flex-col gap-y-4">
<div>
<x-input-label for="plan" :value="__('Asset Plan')" />
<div class="gap-y-5 lg:py-4 mt-1 flex px-3 justify-start items-start flex-col lg:flex-row lg:justify-between lg:items-center bg-white dark:bg-gray-900 dark:border-gray-700 border shadow py-3 rounded-lg">
<div class="flex items-center">
    {{-- HERE --}}
<input id="bronze-plan" name="plan" type="radio" 
@click="selectedPlan = 'bronze'; 
planContent = ['Bronze plan',18000,`Why choose Bronze`,
`This is a standard plan. The number of assets that can be published on this plan are highly limited to 65. Assets published here get limited views as they are usually pushed to the bottom of the page due to high influx of assets that are being published each seconds. On this plan, boost is not allowed and the number of weeks are fixed.`,
`10 assets`,
`1 month duration`,
`can't be boosted`,
`10% discount`,
`20,000`
];
showPopup = true
" 
value="bronze" 
class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
<label for="bronze-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
Bronze Plan
</label>
</div>

<div class="flex items-center">
<input id="silver-plan" name="plan" type="radio" 
@click="selectedPlan = 'silver'; 
planContent = ['Silver plan',21600,`Why choose Silver?`,`This is a premium plan. The number of assets that can be published on this plan are slightly flexible  and the maximum number of assets that can be published is 78. Assets published here get more views as they can be boosted to bring them to the top of the page if they get pushed to the bottom of the page due to high influx of assets that are being published each seconds. In addition, on this plan, boost is allowed.`,
`20 assets`,
`1 month duration`,
`can be boosted`,
`10% discount`,
`24,000`
];
showPopup = true"

value="silver" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
<label for="silver-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
Silver Plan
</label>
</div>

<div class="flex items-center"> 
<input id="gold-plan" name="plan" type="radio" 
@click="selectedPlan = 'gold'; 
planContent = ['Gold plan',22400,`Why choose Gold?`,`This is also a premium plan. The number of assets that can be published on this plan are flexible  and the maximum number of assets that can be published is 91. Assets published here get more views as they can be boosted to bring them to the top of the page if they get pushed to the bottom of the page due to high influx of assets that are being published each seconds. In addition, on this plan boost is allowed.`,
`30 assets`,
`1 month duration`,
`can be boosted`,
`20% discount`,
`28,000`
];

showPopup = true"

value="gold" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
<label for="gold-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
Gold Plan
</label>
</div>

<div class="flex items-center">
<input id="diamond-plan" name="plan" type="radio" 
@click="selectedPlan = 'diamond'; 
planContent = ['Diamond plan',25600,`Why choose Diamond?`,`This is also a premium plan. The number of assets that can be published on this plan are flexible  and the maximum number of assets that can be published per time is 104. Assets published here get more views as they can be boosted to bring them to the top of the page if they get pushed to the bottom of the page due to high influx of assets that are being published each seconds. In addition, on this plan boost is allowed. There is self boost on this plan. Self boost is when the published assets are automatically boosted after some time so they appear at the top of the page. The maximum number of time assets can self boost here is one.`,
`40 assets`,
`3 weeks duration`, 
`can be boosted`,
`20% discount`,
`32,000`
];
showPopup = true"
value="diamond" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
<label for="diamond-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
Diamond Plan
</label>
</div>


<div class="flex items-center">
<input id="platinum-plan" name="plan" type="radio" 
@click="selectedPlan = 'platinum'; 
planContent = ['Platinum plan',28800,
`Why choose Platinum?`,`This is also a premium plan. The number of assets that can be published on this plan are flexible  and the maximum number of assets that can be published per time is 117. Assets published here get great number views as they can be boosted to bring them to the top of the page if they get pushed to the bottom of the page due to high influx of assets that are being published each seconds. There is also self boost on this plan. Self boost is when the published assets are automatically boosted after some time so they appear at the top of the page. The maximum number of times assets can self boost here is two.`,
`50 assets`,
`4 weeks duration`,
`can be boosted`,
`20% discount`,
`36,000`
];
showPopup = true"
value="platinum" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
<label for="platinum-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
Platinum Plan
</label>
</div>
</div>

</div>

<div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5" x-data="dropdowns()" >



    <div class="space-y-6">
        <div>
<x-input-label for="asset_type" :value="__('Choose Asset Type')" /> 
            
            <div class="space-y-2 flex gap-x-2 items-center mt-2">
                <template x-for="(mineral, index) in minerals" :key="index">
                    <label class="inline-flex items-center">
                        <input type="radio" x-model="selectedMineral" :value="mineral" name="asset_type" 
                        @change="loadMineralAssets()" class="form-radio h-4 w-4 text-indigo-600">
                        <span class="ml-2" x-text="mineral"></span>
                    </label>
                </template>
            </div>
        </div>
    </div>

<div class="transition duration-300" >
    {{-- <label class="block text-gray-700 text-sm font-bold mb-2">Select Mineral Asset:</label> --}}
<x-input-label for="asset_type_value" :value="__('Asset Type')" />
    <select x-model="selectedAsset" @change="loadLandsAndEquipment()" id="asset_type_value" name="asset_type_value" class="block w-full mt-1 bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-md shadow-sm focus:outline-none focus:ring focus:border-indigo-500">
        <template x-for="(asset, index) in mineralAssets" :key="index">
            <option :value="asset.toLowerCase()" x-text="asset"></option>
        </template>
    </select>
</div>

</div>

<div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

<div class="mb-4 relative ">   
    <x-input-label for="duration" :value="__('Duration')" />
    <select
    x-model="selectedMonths"
     name="duration" id="duration" class="border-gray-300 mt-1 block w-full dark:bg-gray-900 dark:border-gray-700  dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm">
    <option value="1">1 month</option>    
    <option value="2">2 months</option>    
    <option value="3">3 months</option>    
    <option value="6">6 months</option>    
    </select>   
    </div> 

<div class="mb-4 relative">
<x-input-label for="asset_information" :value="__('Asset Information')" />
<x-text-input id="asset_information" name="asset_information" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('asset_information')" autofocus />
<x-input-error class="mt-2" :messages="$errors->get('asset_information')" />
</div>
</div>

</div>
<div class="w-full items-center justify-center my-5 flex" id="form_section_one">
<div class="bg-rose-300/50 text-rose-500 rounded-lg py-3 px-2 text-sm leading-5">
Fill all the inputs or type <b class="italic">NILL</b> if you don't have the details to be filled before clicking the 
<span class="py-1.5 px-2 bg-ageno rounded text-white">next</span> button.
</div>
</div>
<div class="mt-4 flex justify-end items-end">
<button id="first_next_btn" type="button" class="js-next bg-rose-500/50 text-white px-4 py-2 rounded cursor-not-allowed" disabled>Next</button>
</div>


</div>
<div class="js-form-step hidden" data-step="2">
<div class="flex flex-col gap-y-4">

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
<x-input-label for="asset_qty" :value="__('Asset Quantity')" />
<x-text-input id="asset_qty" name="asset_qty" type="number" class="mt-1 block w-full dark:bg-gray-900" :value="old('asset_qty')" autofocus />
<x-input-error class="mt-2" :messages="$errors->get('asset_qty')" />
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



</div>


<div class="w-full items-center justify-center my-5 flex" id="form_section_two">
<div class="bg-rose-300/50 text-rose-500 rounded-lg py-3 px-2 text-sm">
    Fill all the inputs or type <b class="italic">NILL</b> if you don't have the details to be filled before clicking the next button.
</div>
</div>

<div class="mt-4 flex justify-between">
<button type="button" class="js-prev bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
{{-- <button type="button"  class="js-next bg-ageno-2 text-white px-4 py-2 rounded">Next</button> --}}
<button id="second_next_btn" type="button" class="js-next bg-rose-500/50 text-white px-4 py-2 rounded cursor-not-allowed" disabled>Next</button>

</div>
</div>


<div class="js-form-step hidden" data-step="3">
<div class="flex flex-col gap-y-2">
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
    <input  x-model="quantity" id="land_size" name="land_size" value="{{old('land_size')}}" type="number" min="1"  class='appearance-none bg-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 shadow-sm text-gray-700 text-center border border-gray-300 rounded w-[100px] py-2 px-4'>
    <div @click="quantity = quantity + 1" class="cursor-pointer bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
    +
    </div>
    </div>
    <select
    class="mt-1 block  border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"         
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
<div class="grid  w-full md:gap-x-3 lg:gap-x-5">
    <div class="mb-1 w-full relative">
    <x-input-label for="mineral_details" :value="__('Mineral Details')" />
    <textarea id="mineral_details" name="mineral_details" rows="10" class='mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'></textarea>
    <x-input-error class="mt-2" :messages="$errors->get('mineral_details')" />
    </div>



</div>

</div>


<div class="w-full items-center justify-center my-5 flex" id="form_section_three">
<div class="bg-rose-300/50 text-rose-500 rounded-lg py-3 px-2 text-sm">
    Fill all the inputs or type <b class="italic">NILL</b> if you don't have the details to be filled before clicking the next button.
</div>
</div>

<div class="mt-4 flex justify-between">
<button type="button" class="js-prev bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
<button id="third_next_btn" type="button" class="js-next bg-rose-500/50 text-white px-4 py-2 rounded cursor-not-allowed" disabled>Next</button>

</div>
</div>


<div class="js-form-step hidden" data-step="4">


<div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

{{-- DURATION HERE --}}
<div  class="mb-2 relative">
    <x-input-label for="technical_report" :value="__('Technical Report (URL)')" />
    <x-text-input id="technical_report" name="technical_report" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('technical_report')" autofocus />
    <x-input-error class="mt-2" :messages="$errors->get('technical_report')" />
    </div>
      
        
        <div class="mb-1 w-full relative">
        <x-input-label for="contact_information" :value="__('Contact Information')" />
        <x-text-input id="contact_information" name="contact_information" type="text"
        class="mt-1 block w-full dark:bg-gray-900" :value="old('contact_information')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('contact_information')" />
        </div>

</div>

<div class="mt-4 flex justify-between">
<button type="button" class="js-prev bg-gray-500 text-white px-4 py-2 rounded">Previous</button>
<button type="button" @click="acceptTerms = true" class="bg-green-500 text-white px-4 py-2 rounded">Submit</button>
</div>


</div>


<template x-if="true">
<div 
x-show="acceptTerms" x-transition:enter="transition ease-out duration-300" 
x-transition:enter-start="opacity-0 transform scale-95"     
x-transition:enter-end="opacity-100 transform scale-100" 
x-transition:leave="transition ease-in duration-300" 
x-transition:leave-start="opacity-100 transform scale-100" 
x-transition:leave-end="opacity-0 transform scale-95" class="fixed inset-0 flex items-center justify-center z-50">
<div class="relative flex justify-center items-center">
<div class="flex flex-col w-[80%] md:w-full mx-4 lg:max-w-lg lg:mx-10 bg-white border border-gray-300 text-center shadow-xl rounded-2xl p-4 md:p-8
dark:bg-slate-900 dark:border-blue-700">

<h2 class="text-xl md:text-2xl">Agenoresource Terms Of Service</h2>
<p class="my-5">
By using Agenoresource services, you agree to the Agenoresource  <a href="#" class="underline text-blue-600 italic">Terms of Service</a> and <a href="#" class="underline text-blue-600 italic">Terms and Conditions</a>. Note: The Agenoresource Privacy Policy describes how data is handled in this service.

</p>

<div class="flex justify-end items-center">
<button type="submit" class="outset-none bg-transparent rounded-full py-1.5 px-2 hover:bg-blue-100 text-blue-600 font-semibold">
    Agree
</button>

<button @click="acceptTerms = false" type="button" class="outset-none bg-transparent rounded-full py-1.5 px-2 hover:bg-blue-100 text-blue-600 font-semibold">
Cancel
</button>
</div>
</div>

</div>
</div>
</template>

</form>



</div>
</div>
@session('success')
<div class="w-full flex justify-center items-center">
<div class="max-w-[250px] z-[3000] whitespace-nowrap text-sm bg-teal-600 dark:bg-green-700 text-green-200 rounded-lg px-2 py-1 shadow-lg">
{{ session('success') }}
</div>
</div>
@endsession

</section>
</div>
</div>




<template x-if="true">
<div x-show="showPopup" x-transition:enter="transition ease-out duration-300" 
x-transition:enter-start="opacity-0 transform scale-95" 
x-transition:enter-end="opacity-100 transform scale-100" 
x-transition:leave="transition ease-in duration-300" 
x-transition:leave-start="opacity-100 transform scale-100" 
x-transition:leave-end="opacity-0 transform scale-95" class="fixed inset-0 flex items-center justify-center z-[3000]">
<div class="relative">
<button @click="showPopup = false" class=" absolute top-0 right-2 mt-2 size-10 rounded-full bg-blue-500 hover:bg-blue-700 
text-white font-bold">
&#x2715;
</button>

<div class="flex w-[260px] md:w-[300px] flex-col bg-white border-2 border-blue-900 text-center shadow-xl rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-blue-700">

<p class="mb-3">
    <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-blue-100 
    text-blue-800 dark:bg-blue-900 dark:text-white" x-text="planContent[7]"></span>

</p>
<h4 class="font-medium text-lg text-gray-800 dark:text-gray-200" x-text="planContent[0]"></h4>
<span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">
&#8358; <span x-text="planContent[1]"></span>
</span>
<span class="line-through text-xl text-gray-600">
    &#8358; <span x-text="planContent[8]"></span>
</span>
<div class="mt-2 font-semibold dark:text-gray-300" >

{{-- <span x-text="planContent[4]"></span> --}}
</div>
<ul class="mt-7 space-y-2.5 text-sm">
<li class="flex space-x-2">
<svg class="flex-shrink-0 mt-0.5 size-4 text-blue-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
<span class="text-gray-800 dark:text-gray-400" x-text="planContent[5]">

</span>
</li>

<li class="flex space-x-2">
<svg class="flex-shrink-0 mt-0.5 size-4 text-blue-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
<span class="text-gray-800 dark:text-gray-400" x-text="planContent[6]">
</span>
</li>
</ul>

<button @click="showMore = true; showPopup = false" class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
Read more
</button>
</div>

</div>

</div>




</template>


<template x-if="true">
<div x-show="showMore" x-transition:enter="transition ease-out duration-300" 
x-transition:enter-start="opacity-0 transform scale-95" 
x-transition:enter-end="opacity-100 transform scale-100" 
x-transition:leave="transition ease-in duration-300" 
x-transition:leave-start="opacity-100 transform scale-100" 
x-transition:leave-end="opacity-0 transform scale-95" class="fixed inset-0 flex h-screen items-center justify-center z-50">
<div class="w-full flex justify-center items-center">

<div class="flex w-full relative lg:max-w-lg mx-4 flex-col h-[65vh] bg-white diamond-pattern-2 border shadow-sm text-center rounded-2xl p-4 md:p-8 
dark:bg-slate-900 dark:border-blue-700">
<button @click="showMore = false;" class=" absolute top-0 right-2 mt-2 size-10 rounded-full bg-blue-500 hover:bg-blue-700 
text-white font-bold">
&#x2715;
</button>
<h4 class="font-medium text-lg text-gray-800 dark:text-gray-200" x-text="planContent[0]"></h4>
<h1 x-text="planContent[2]" class="font-bold text-2xl text-ageno"></h1>
<p  x-text="planContent[3]" class="my-10 text-slate-700 leading-7"></p>
</div>
</div>
</div>
</template>


</div>

<script src="{{ asset('js/post-asset.js') }}"></script> 
<script>
     function priceCalculator() {
      return {
        selectedPlan: null, // default to no plan selected
        selectedMonths: 1,  // default to 1 month
        planPrices: {
          bronze: 18000,
          silver: 21600,
          gold: 22400,
          diamond: 25600,
          platinum: 28800
        },
        get totalPrice() {
          if (!this.selectedPlan) return 0;
          return this.planPrices[this.selectedPlan] * this.selectedMonths;
        },
        get showPrice() {
          return this.selectedPlan !== null;
        }
      }
    }
</script>
