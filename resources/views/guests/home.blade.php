@extends('layouts.general')
@section('app-title','Home')

@section('app-style')

<style>

.home-hero-section {
/* background: linear-gradient(rgb(59 130 246) 28.84%, rgb(255, 128, 128) 102.45%); */
padding-top: 20px;
padding-bottom: 20px;
}

.bg-image-hero{
background-image: url('./images/hero-one.jpg'), linear-gradient(to right, rgba(59, 130, 246,0.5), rgba(37, 99, 235,0.5));
}

.bg-image-hero-2{
background-image: url('./images/tongon-mine.jpg'), linear-gradient(to right, rgba(59, 130, 246,0.5), rgba(37, 99, 235,0.5));
}

.bg-image-hero-3{
background-image: url('./images/Big-Bear-project.webp'), linear-gradient(to right, rgba(59, 130, 246,0.5), rgba(37, 99, 235,0.5));
}

.bg-image-hero-4{
background-image: url('./images/ity-mine.jpg'), linear-gradient(to right, rgba(59, 130, 246,0.5), rgba(37, 99, 235,0.5));
}

.bg-image-hero-5{
background-image: url('./images/lithium-trayller.jpg'), linear-gradient(to right, rgba(59, 130, 246,0.5), rgba(37, 99, 235,0.5));
}

.bg-image-gradient {
background-blend-mode: hard-light;
background-image: url('./images/hero-one.jpg'), linear-gradient(to right, rgba(59, 130, 246,0.5), rgba(37, 99, 235,0.5));
width: 100%;
}

</style>

@endsection
@section('app-content')
<main  x-data="{ showLoginPopup: false, showAssetModal: false, assetModalContent: '', assetModalTitle: '',assetImageUrl:''}" 
@keydown.window.escape="showAssetModal = false; showLoginPopup = false"
>


{{-- Login popup --}}
<template x-if="true">
    <div x-show="showLoginPopup" class="fixed inset-0 flex items-center justify-center z-50" 
    x-transition:enter="transition ease-out duration-300" 
    x-transition:enter-start="opacity-0 scale-75" 
    x-transition:enter-end="opacity-100 scale-100" 
    x-transition:leave="transition ease-in duration-200" 
    x-transition:leave-start="opacity-100 scale-100" 
    x-transition:leave-end="opacity-0 scale-75">
        <div class="relative">
        <button @click="showLoginPopup = false" class="z-[3000] bg-red-500 size-10 rounded-full text-rose-200 absolute top-2 -right-8">&times;</button>
        <div class="sm:max-w-sm relative overflow-hidden mt-6 mb-5 px-6 py-4 bg-white border border-ageno/30 dark:bg-gray-800 shadow-sm overflow-y-auto rounded-lg">
            <!-- Session Status -->
            <div class="mb-10">
            <h1 class="text-center text-2xl lg:text-3l font-semibold text-slate-900 dark:text-neutral-300">Login</h1>
            <p class="font-semibold dark:text-neutral-200">
            <span class="animate-bounce">👋</span> Login to view asset details
            </p>
            </div>
        <form method="POST" action="{{ route('login') }}" >
                @csrf
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="dark:bg-gray-900 block mt-1 w-full placeholder:text-sm" type="email" name="email" placeholder="hello@ageno@gmail.com" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                        <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
        
                    <x-text-input id="password" class="dark:bg-gray-900 block mt-1 w-full placeholder:text-sm"
                                    type="password"
                                    name="password"
                                    placeholder="**********"
                                    required autocomplete="current-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-2">
                        <a class="underline text-sm text-ageno dark:text-gray-400 hover:text-ageno-2 dark:hover:text-gray-100 rounded-md focus:outline-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
        
                </div>
                <div class="mt-4 flex justify-between items-center">
                <button type='submit' class='w-full text-center shadow-md px-4 py-2 bg-ageno border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-100 tracking-widest hover:bg-ageno-2 dark:hover:bg-blue-600 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'>
                    {{ __('Login') }}
                </button>                
                </div>
            <div class="flex justify-between items-center">
            <div class="flex items-center justify-center mt-4 text-center  w-full">
            <div class="flex items-center text-sm gap-x-2 text-center dark:text-gray-100">
            Not registered yet?
            <a class="underline text-sm text-ageno dark:text-gray-400 hover:text-ageno-2 dark:hover:text-gray-100 rounded-md focus:outline-none" href="{{ route('register') }}">
            Create an Account
            </a>
            </div>
            </div>
            </div>
        </form>
        </div>
    </div>
  </div>
</template>
{{-- End of Login Popup --}}

{{-- Assets Modal Popup --}}
<template x-if="true">
<div x-show="showAssetModal"   class="fixed inset-0 flex items-center justify-center z-50" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-75" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-75">
    <div class="bg-transparent rounded-lg mx-4 relative shadow-lg p-6 w-full sm:w-96 md:w-[400px] lg:w-[500px]">


        <div class="flex overflow-x-hidden overflow-y-auto bg-white rounded-lg shadow-xl dark:bg-gray-900">
            <div class="w-1/3 bg-cover" :style="{'background-image': 'url(' + assetImageUrl + ')'}"
            
            ></div>
            <div class="w-2/3 p-4 md:p-4">
                <h2 class="text-xl md:text-2xl font-bold mb-4 text-center" x-text="assetModalTitle"></h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-300" x-text="assetModalContent"></p>
                <div class="flex mt-2 item-center"><svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"></path></svg><svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                        viewBox="0 0 24 24"><path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"></path></svg><svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"></path></svg>
                    <svg
                        class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                        <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"></path>
                        </svg><svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"></path></svg></div>
                <div class="flex flex-col md:flex-row gap-y-2 justify-between mt-3 item-center">
                    {{-- <h1 class="text-xs justify-center  md:text-left items-center whitespace-nowrap font-semibold text-gray-700 dark:text-white flex gap-x-1">
                          Price range: <span> &#8358;220 - &#8358;100000</span>
                    </h1> --}}
                    <button class="px-4 py-2 text-xs font-medium text-white uppercase transition-colors duration-300 transform bg-ageno-2 rounded-lg hover:bg-ageno focus:outline-none focus:bg-ageno-2">Buy now</button></div>
            </div>
        </div>
      {{-- 
      <p class="mb-4" ></p> --}}
      <button @click="showAssetModal = false" class="bg-rose-500 text-rose-200 text-xl size-10 absolute top-0 right-0 rounded-full">
        &#x2715;
      </button>
    </div>
  </div>
</template>
{{-- End of Assets Modal Popup --}}




<!-- Hero -->

<div class="flex justify-center items-center home-hero-section">
    {{-- shadow-lg shadow-ageno/50 --}}
<div class="relative w-full  bg-image-gradient  lg:mx-20 lg:max-w-[1300px] lg:rounded-2xl lg:mt-10 bg-no-repeat  bg-cover bg-center h-[70vh] flex justify-center items-center" >

<div class="absolute rounded-lg bg-image-hero size-12 lg:size-28 left-2 top-4 bg-no-repeat bg-cover shadow-inner shadow-ageno/60">
</div>

<div class="absolute rounded-lg bg-image-hero-2 size-12 lg:size-28 right-2 top-20 bg-no-repeat bg-cover shadow-inner shadow-ageno/60">
</div>

<div class="absolute rounded-lg bg-image-hero-3 size-12 lg:size-28 right-10 bottom-10 bg-no-repeat bg-cover shadow-inner shadow-ageno/60">
</div>

<div class="absolute rounded-lg bg-image-hero-4 size-12 lg:size-28 left-10 bottom-2 bg-no-repeat bg-cover shadow-inner shadow-ageno/60">
</div>

<div class="absolute rounded-lg bg-image-hero-5 size-16 lg:size-32 top-4 bg-no-repeat bg-cover shadow-inner shadow-ageno/60">
</div>

  <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto  absolute top-2">
</div>
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24 ">
<div class="text-center">
    <div class="">

<h1 class="text-5xl sm:text-6xl text-white dark:text-gray-100 drop-shadow-2xl nanum-gothic-extrabold">
Ageno resources
</h1>

<p class="mt-3 lg:text-xl font-semibold text-white drop-shadow-lg dark:text-gray-100 nanum-gothic-regular">
Post mining assets and get insights from industry experts.
</p> 
</div>



  <div x-data="searchComponent()"  

class="flex justify-center items-center Cabin-font-700 mb-32"
>
<form :action="formAction" @submit.prevent="handleSubmit" class="flex flex-col w-full lg:w-[650px]">

  <div class="flex mt-6 w-full justify-between gap-x-1 mb-2">
  <button @click="handleClick('buy-search', 'buy')" :class="{ 'active': activeElement === 'buy-search' }" class="ageno-btn"><a>Buy</a></button>
  <button @click="handleClick('sale-search', 'sell')" :class="{ 'active': activeElement === 'sale-search' }"  class="ageno-btn"><a>Sale</a></button>
  <button @click="handleClick('lease-search', 'lease')" :class="{ 'active': activeElement === 'lease-search' }" class="ageno-btn"><a>Lease</a></button>
  <a href="{{ route('partner') }}" class="btn bg-white text-ageno hover:text-white hover:bg-gradient-to-tr from-ageno-2 to-emerald-400 shadow-sm hover:shadow-md shadow-emerald-500/50 text-xs whitespace-nowrap flex font-semibold">Become a Partners</a>

  </div>

  <div class="w-full flex">

  <div class="relative w-full">
    <input type="text" 
  class="border-none outline-none w-full dark:bg-slate-900 focus:outline-none appearance-none focus:border-none ring-0 focus:ring-0  text-gray-700 py-4 rounded-tl-md rounded-bl-md dark:text-white dark:placeholder:text-gray-300"
  :placeholder="'Enter to search for assets to ' + placeholder"
    x-model="query" 
    @input="filterAssets" @keydown.arrow-down="highlightNext"
     @keydown.arrow-up="highlightPrev">
    <div class="absolute bg-white dark:bg-slate-900
     dark:text-white p-2 shadow-md w-full max-h-80 z-[2000] overflow-y-auto border-none outline-none rounded-md mt-1" 
    x-show="filteredAssets.length > 0" x-cloak>
        <ul role="listbox" aria-activedescendant="">
            <template x-for="(asset, index) in filteredAssets" :key="asset.id">
                <li :class="{'bg-ageno text-white': index === highlightedIndex}" 
                role="option" tabindex="-1"
                class="px-4 py-2 hover:bg-ageno hover:text-white rounded-md cursor-pointer text-left" @click="selectAsset(asset)" @mouseover="highlightIndex(index)">
                <span x-text="asset.asset_type"></span>:  <span x-text="asset.asset_name"></span>
                </li>
            </template>
        </ul>
    </div>
</div>

  <button @click="handleSubmit"  class="w-[15%] lg:w-1/12 
  bg-gradient-to-tr from-ageno-2 to-emerald-400 shadow-sm hover:shadow-md
  rounded-tr-md rounded-br-md flex justify-center items-center cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  class="w-6 h-6 lg:w-7 lg:h-7 fill-white">
        <path d="M9 2C5.1458514 2 2 5.1458514 2 9C2 12.854149 5.1458514 16 9 16C10.747998 16 12.345009 15.348024 13.574219 14.28125L14 14.707031L14 16L20 22L22 20L16 14L14.707031 14L14.28125 13.574219C15.348024 12.345009 16 10.747998 16 9C16 5.1458514 12.854149 2 9 2 z M 9 4C11.773268 4 14 6.2267316 14 9C14 11.773268 11.773268 14 9 14C6.2267316 14 4 11.773268 4 9C4 6.2267316 6.2267316 4 9 4 z"/>
      </svg>
  </button >
</div>

</form>

  </div>



</div>
</div>
</div>
</div>



<div class="flex flex-col gap-y-2 mt-10">
<h1 class="text-center text-xl md:text-2xl text-ageno-2 lg:text-left drop-shadow-2xl nanum-gothic-extrabold px-4 sm:px-6 lg:px-28">Featured Assets</h1>
<div class="grid grid-cols-3 lg:grid-cols-9 mt-10 mx-4 lg:mx-28 gap-4" x-data="activeClassHandler()">

    <div  @click="assetModalContent = 'Gold is a highly sought-after precious metal prized for its rarity, beauty, and malleability. It is used in jewelry, currency, and various technological applications due to its excellent conductivity and resistance to tarnish';assetImageUrl = '/images/gold-image.jpg'; showAssetModal = true; assetModalTitle = 'Gold'"   x-ref="asset1" class="asset-1 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-amber-300 shadow-ageno/20 hover:shadow-lg hover:shadow-amber-500/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-amber-500/30 before:to-yellow-400/10">
    <div>
        <svg  class="size-10 group-hover:fill-amber-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
            <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
    </div>
        <h1 class="font-semibold group-hover:text-amber-500">Gold</h1>
    </div>

    <div  @click="assetModalContent = 'Silver is a versatile precious metal with a long history of use in coinage, jewelry, and industrial applications. It has excellent electrical and thermal conductivity, making it valuable in electronics and solar panels.';assetImageUrl = '/images/silver-image.jpg'; showAssetModal = true; assetModalTitle = 'Silver'"  x-ref="asset2" class="asset-2 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-ageno-2  shadow-ageno/20 hover:shadow-lg hover:shadow-ageno/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-ageno/20 before:to-ageno-2/20">
    <div>
        <svg class="size-10  stroke-black group-hover:fill-ageno-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <path d="M39.855469 23 A 1.0001 1.0001 0 0 0 38.884766 23.755859L34.894531 39.667969L25.523438 39.667969 A 1.0001 1.0001 0 0 0 24.552734 40.423828L20.5625 56.332031L11.191406 56.332031 A 1.0001 1.0001 0 0 0 10.222656 57.089844L6.0429688 73.755859 A 1.0001 1.0001 0 0 0 7.0117188 75L93 75 A 1.0001 1.0001 0 0 0 93.970703 73.755859L89.789062 57.089844 A 1.0001 1.0001 0 0 0 88.820312 56.332031L79.449219 56.332031L75.458984 40.423828 A 1.0001 1.0001 0 0 0 74.488281 39.667969L65.117188 39.667969L61.126953 23.755859 A 1.0001 1.0001 0 0 0 60.15625 23L39.855469 23 z M 40.634766 25L58.464844 25L57.253906 25.824219 A 0.50029176 0.50029176 0 1 0 57.818359 26.650391L59.501953 25.501953L63.054688 39.667969L38.695312 39.667969L50.287109 31.775391 A 0.50005 0.50005 0 0 0 49.990234 30.859375 A 0.50005 0.50005 0 0 0 49.724609 30.949219L36.964844 39.636719L40.634766 25 z M 54.169922 28.013672 A 0.50005 0.50005 0 0 0 53.904297 28.105469L52.373047 29.148438 A 0.50005 0.50005 0 1 0 52.935547 29.974609L54.466797 28.931641 A 0.50005 0.50005 0 0 0 54.169922 28.013672 z M 26.302734 41.667969L35.675781 41.667969L44.132812 41.667969L22.632812 56.302734L26.302734 41.667969 z M 46.591797 41.667969L53.419922 41.667969L50.005859 55.279297L46.591797 41.667969 z M 54.451172 41.667969L64.337891 41.667969L72.136719 41.667969L63.160156 47.796875 A 0.50029176 0.50029176 0 1 0 63.724609 48.623047L73.738281 41.785156L77.386719 56.332031L52.373047 56.332031L59.53125 51.476562 A 0.50005 0.50005 0 0 0 59.236328 50.558594 A 0.50005 0.50005 0 0 0 58.96875 50.648438L50.808594 56.185547L54.451172 41.667969 z M 45.613281 41.869141L49.240234 56.332031L24.367188 56.332031L45.613281 41.869141 z M 11.972656 58.332031L21.34375 58.332031L31.230469 58.332031L34.908203 73L9.7773438 73L24.712891 62.832031 A 0.50005 0.50005 0 0 0 24.416016 61.916016 A 0.50005 0.50005 0 0 0 24.150391 62.005859L8.3554688 72.757812L11.972656 58.332031 z M 32.261719 58.332031L39.087891 58.332031L35.675781 71.943359L32.261719 58.332031 z M 40.119141 58.332031L57.955078 58.332031L50.148438 63.646484 A 0.50005 0.50005 0 1 0 50.710938 64.472656L59.732422 58.332031L59.892578 58.332031L63.570312 73L38.113281 73L39.972656 71.783203 A 0.50005 0.50005 0 0 0 39.691406 70.861328 A 0.50005 0.50005 0 0 0 39.423828 70.947266L36.470703 72.880859L40.119141 58.332031 z M 60.923828 58.332031L67.75 58.332031L64.335938 71.943359L60.923828 58.332031 z M 68.78125 58.332031L78.669922 58.332031L86.449219 58.332031L71.951172 68.142578 A 0.50005 0.50005 0 1 0 72.511719 68.970703L88.068359 58.445312L91.716797 73L65.103516 73L68.78125 58.332031 z M 47.115234 65.800781 A 0.50005 0.50005 0 0 0 46.847656 65.892578L41.927734 69.242188 A 0.50029162 0.50029162 0 1 0 42.492188 70.068359L47.412109 66.71875 A 0.50005 0.50005 0 0 0 47.115234 65.800781 z" />
        </svg>
    </div>
        <h1 class="font-semibold group-hover:text-ageno-2">Silver</h1>
    </div>


    <div @click="assetModalContent = 'Diamonds are precious gemstones known for their extraordinary hardness and brilliance. They are formed under high-pressure, high-temperature conditions deep within the Earth and are used in jewelry and industrial applications.';assetImageUrl = '/images/diamond-image.jpg'; showAssetModal = true; assetModalTitle = 'Diamond'" x-ref="asset3" class="asset-3 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-ageno-2 shadow-ageno/20 hover:shadow-lg hover:shadow-ageno/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-ageno/20 before:to-ageno-2/20">
        <div>
        <svg  class="size-10 group-hover:fill-ageno-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
        <path d="M24.984375 2.9863281 A 1.0001 1.0001 0 0 0 24 4L24 10 A 1.0001 1.0001 0 1 0 26 10L26 4 A 1.0001 1.0001 0 0 0 24.984375 2.9863281 z M 3.9785156 7.9902344 A 1.0001 1.0001 0 0 0 3.375 9.78125L8.375 13.78125 A 1.0004882 1.0004882 0 1 0 9.625 12.21875L4.625 8.21875 A 1.0001 1.0001 0 0 0 3.9785156 7.9902344 z M 45.992188 7.9921875 A 1.0001 1.0001 0 0 0 45.375 8.21875L40.375 12.21875 A 1.0004882 1.0004882 0 1 0 41.625 13.78125L46.625 9.78125 A 1.0001 1.0001 0 0 0 45.992188 7.9921875 z M 12.970703 15.988281 A 1.0001 1.0001 0 0 0 12.115234 16.509766L5.3457031 25.289062 A 1.0001 1.0001 0 0 0 5.3398438 25.292969 A 1.0001 1.0001 0 0 0 5.4199219 26.777344L24.113281 46.519531 A 1.0001 1.0001 0 0 0 25.041016 47.033203 A 1.0001 1.0001 0 0 0 25.044922 47.033203 A 1.0001 1.0001 0 0 0 25.052734 47.033203 A 1.0001 1.0001 0 0 0 25.882812 46.525391L44.636719 26.783203 A 1.0001 1.0001 0 0 0 44.701172 25.273438 A 1.0001 1.0001 0 0 0 44.699219 25.271484L37.884766 16.507812 A 1.0001 1.0001 0 0 0 36.998047 15.988281 A 1.0001 1.0001 0 0 0 36.861328 16L25.144531 16 A 1.0001 1.0001 0 0 0 25.115234 15.996094 A 1.0001 1.0001 0 0 0 25.015625 15.988281 A 1.0001 1.0001 0 0 0 24.845703 16L13.140625 16 A 1.0001 1.0001 0 0 0 12.970703 15.988281 z M 14.701172 18L22.955078 18L18.140625 24.191406L14.701172 18 z M 27.042969 18L35.298828 18L31.859375 24.191406L27.042969 18 z M 25 18.626953L29.957031 25L20.042969 25L25 18.626953 z M 37.140625 18.808594L41.955078 25L33.701172 25L37.140625 18.808594 z M 12.863281 18.816406L16.298828 25L8.0957031 25L12.863281 18.816406 z M 8.3847656 27L17.291016 27L22.511719 41.916016L8.3847656 27 z M 19.408203 27L30.591797 27L25 42.976562L19.408203 27 z M 32.708984 27L41.669922 27L27.480469 41.9375L32.708984 27 z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-ageno-2">Diamond</h1>
    </div>

    <div @click="assetModalContent = 'Copper Content';assetImageUrl = '/images/copper-image.webp'; showAssetModal = true; assetModalTitle = 'Copper'" x-ref="asset4" class="asset-4 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-amber-900 shadow-ageno/20 hover:shadow-lg hover:shadow-amber-900/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-amber-800/20 before:to-amber-900/20">
        <div>
        <svg  class="size-10 fill-gray-900 group-hover:fill-amber-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-amber-900">Copper</h1>
    </div>

    <div @click="assetModalContent = 'Cobalt Content';assetImageUrl = '/images/cobalt-image.webp'; showAssetModal = true; assetModalTitle = 'Cobalt'" x-ref="asset5" class="asset-5 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-slate-400 shadow-ageno/20 hover:shadow-lg hover:shadow-slate-500/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-slate-500/20 before:to-slate-600/20">
        <div>
        <svg  class="size-10  group-hover:fill-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-slate-500">Cobalt</h1>
    </div>

    <div @click="assetModalContent = 'Zinc Content';assetImageUrl = '/images/zinc-image.jpg'; showAssetModal = true; assetModalTitle = 'Zinc'" x-ref="asset6" class="asset-6 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-zinc-500 shadow-zinc-600/20 hover:shadow-lg hover:shadow-zinc-600/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-zinc-500/20 before:to-zinc-600/20">
        <div>
        <svg  class="size-10 group-hover:fill-zinc-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-zinc-500">Zinc</h1>
    </div>

    <div @click="assetModalContent = 'Iron Content';assetImageUrl = '/images/iron-image.jpg'; showAssetModal = true; assetModalTitle = 'Iron'" x-ref="asset7" class="asset-7 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-gray-100 shadow-ageno/20 hover:shadow-lg hover:shadow-ageno/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-ageno/20 before:to-ageno-2/20">
        <div>
        <svg  class="size-10 fill-gray-900 group-hover:fill-ageno-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-ageno-2">Iron</h1>
    </div>

    <div @click="assetModalContent = 'Bronze Content';assetImageUrl = '/images/bronze-image.jpg'; showAssetModal = true; assetModalTitle = 'Bronze'" x-ref="asset8" class="asset-8 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-gray-100 shadow-ageno/20 hover:shadow-lg hover:shadow-ageno/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-ageno/20 before:to-ageno-2/20">
        <div>
        <svg  class="size-10 fill-gray-900 group-hover:fill-ageno-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-ageno-2">Bronze</h1>
    </div>

    <div @click="assetModalContent = 'Tungsten Content';assetImageUrl = '/images/tungsten-image.jpg'; showAssetModal = true; assetModalTitle = 'Tungsten'" x-ref="asset9" class="asset-9 cursor-pointer transform scale-90 hover:scale-100 shadow-md group flex flex-col justify-center items-center gap-y-4 border-2 border-transparent hover:border-gray-100 shadow-ageno/20 hover:shadow-lg hover:shadow-ageno/30  transition-all h-28 w-full md:size-28 lg:size-32 rounded-2xl p-4 relative overflow-hidden before:absolute before:content-[''] before:hidden hover:before:block before:bg-gradient-to-tr before:size-24 before:rounded-full  before:from-ageno/20 before:to-ageno-2/20">
        <div>
        <svg  class="size-10 fill-gray-900 group-hover:fill-ageno-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
        <path d="M57.74 115.56l-5.62-20C51.03 91.7 47.47 89 43.45 89H16.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C57.97 121.17 58.51 118.3 57.74 115.56zM51.47 119.81c-.57.76-1.44 1.19-2.39 1.19H10.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C14.02 95.9 15.21 95 16.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C52.22 118.1 52.04 119.06 51.47 119.81zM125.74 115.56l-5.62-20c-1.09-3.86-4.65-6.56-8.66-6.56H84.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87 1.72 2.27 4.33 3.57 7.17 3.57h38.16c2.84 0 5.46-1.3 7.17-3.57C125.97 121.17 126.51 118.3 125.74 115.56zM119.47 119.81c-.57.76-1.44 1.19-2.39 1.19H78.92c-.95 0-1.82-.43-2.39-1.19-.57-.76-.75-1.71-.5-2.62l5.62-20C82.02 95.9 83.21 95 84.55 95h26.91c1.34 0 2.53.9 2.89 2.19l5.63 20C120.22 118.1 120.04 119.06 119.47 119.81zM89.25 75.43c1.72-2.27 2.26-5.13 1.49-7.87l-5.62-20C84.03 43.7 80.47 41 76.45 41H51.55c-4.01 0-7.58 2.7-8.66 6.56l-5.62 20c-.77 2.74-.23 5.61 1.49 7.87C40.46 77.7 43.08 79 45.92 79h36.16C84.92 79 87.54 77.7 89.25 75.43zM43.53 71.81c-.57-.76-.75-1.71-.5-2.62l5.62-20C49.02 47.9 50.21 47 51.55 47h24.91c1.34 0 2.53.9 2.89 2.19l5.63 20c.26.91.08 1.87-.5 2.62C83.9 72.57 83.03 73 82.08 73H45.92C44.97 73 44.1 72.57 43.53 71.81zM9.22 26.89l12 7.21c1.42.85 3.26.39 4.12-1.03.85-1.42.39-3.26-1.03-4.12l-12-7.21c-1.42-.85-3.26-.39-4.12 1.03S7.8 26.03 9.22 26.89zM4 56l12 0c1.09 0 2.05-.58 2.57-1.46C18.84 54.09 19 53.56 19 53c0-1.66-1.34-3-3-3L4 50c-1.66 0-3 1.34-3 3C1 54.66 2.34 56 4 56zM39.96 18.12c.5-.26.89-.65 1.16-1.1.52-.87.59-1.99.08-2.96l-5.63-10.6c-.78-1.46-2.59-2.02-4.06-1.24-1.46.78-2.02 2.59-1.24 4.06l5.63 10.6C36.68 18.34 38.49 18.9 39.96 18.12zM115.6 21.9l-11.91 7.15c-1.68 1.01-2.02 3.41-.41 4.85.98.88 2.47.91 3.6.23l11.91-7.15c1.68-1.01 2.02-3.41.41-4.85C118.22 21.25 116.73 21.22 115.6 21.9zM109.01 52.78c-.05.65.11 1.25.42 1.76.52.87 1.48 1.46 2.57 1.46l11.89 0c1.32 0 2.58-.79 2.96-2.05.63-2.06-.89-3.95-2.85-3.95l-11.81 0C110.58 50 109.12 51.18 109.01 52.78zM88.24 18.32c1.47.65 3.19-.08 3.95-1.5l5.55-10.43c.8-1.5.19-3.38-1.36-4.12-1.48-.71-3.26.03-4.03 1.47L86.8 14.17c-.51.96-.45 2.08.08 2.96C87.19 17.63 87.65 18.06 88.24 18.32z" />
        </svg>
        </div>
        <h1 class="font-semibold group-hover:text-ageno-2">Tungsten</h1>
    </div> 

</div>
</div>



<!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
<!-- Title -->
<div class="w-full sm:w-1/2 lg:w-full mx-auto text-center mb-6">
<h2 class="text-ageno-2 dark:text-gray-400 text-xl lg:text-2xl lg:text-left nanum-gothic-extrabold">Trusted by top Mining Brand and enterprise</h2>

<div class="grid grid-cols-1 mt-10 gap-4 lg:flex justify-center lg:justify-between">
<div class="w-full h-28 flex justify-center items-center border dark:border-gray-700 shadow-md shadow-green-600/20 dark:shadow-ageno/10 rounded-md py-4">
  <img src="{{ asset('./images/nigeria-geology-logo.jpeg') }}" alt="" class="h-24" draggable="false">
</div>
<div class="w-full h-28 flex justify-center items-center border dark:border-gray-700 shadow-md shadow-green-600/20 dark:shadow-ageno/10 rounded-md py-4">
  <img src="{{ asset('./images/nigeria-mining-logo.jpeg') }}" alt="" class="h-24" draggable="false">
</div>
<div class="w-full h-28 flex justify-center items-center border dark:border-gray-700 shadow-md shadow-green-600/20 dark:shadow-ageno/10 rounded-md py-4">
  <img src="{{ asset('./images/mine-steel-logo.jpeg') }}" alt="" class="h-24" draggable="false">
</div>

</div>
</div>

<div class="flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
</div>
</div>


<div class="flex flex-col mt-4">
<div class="flex justify-between items-center px-4 sm:px-6 lg:px-28">
<h3 class="  text-left text-ageno lg:text-3xl dark:text-white nanum-gothic-extrabold">Featured Latest assets</h3>
    
<a href="{{ route('assets') }}" class="py-1 md:py-1.5 lg:py-2 px-3 rounded-md bg-ageno-2 hover:bg-ageno transition-all dark:text-neutral-200 text-white">See all</a>
</div>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

<div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8">
        <x-widgets.asset-widget :assets="$assets"/>
</div>
<div class="w-full flex justify-center items-center mt-10">
    <a href="{{ route('assets') }}" class="py-2 px-3 rounded-md bg-ageno-2 hover:bg-ageno transition-all dark:text-neutral-200 text-white">View more assets</a>
</div>
</div>
</div>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">
            What our <span class="text-blue-500">clients</span> are Saying About <span class="text-blue-500">Agenoresource</span>
        </h1>

        <p class="max-w-2xl mx-auto mt-6 text-center text-gray-500 dark:text-gray-300">
            Discover why mining professionals trust Agenoresource for all their asset needs. Read real testimonials from satisfied clients who have experienced unparalleled success in buying, selling, and leasing mining assets through our platform. Here's what they have to say:
        </p>

        <section class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 lg:grid-cols-2 xl:grid-cols-3">
            <div class="p-8 border rounded-lg dark:border-gray-700">
                <p class="leading-loose text-gray-500 dark:text-gray-400 font-semibold">
                    Agenoresource has revolutionized our approach to acquiring mining assets. Their platform is intuitive and offers a seamless experience for buying, selling, or leasing assets. We secured high-quality equipment at competitive prices, and the support team was exceptional throughout the process. Highly recommended for anyone in the mining industry!
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Robert</h1>
                        <span class="text-sm text-gray-500">CTO, Robert Consultency</span>
                    </div>
                </div>
            </div>

            <div class="p-8 border rounded-lg dark:border-gray-700">
                <p class="leading-loose text-gray-500 dark:text-gray-400 font-semibold">
                    "As a mining company, finding reliable and efficient resources is crucial for our operations. Agenoresource has been a game-changer for us. The ease of use, extensive listings, and transparency provided by their platform make it the best place to manage our asset transactions. Whether buying, selling, or leasing, Agenoresource delivers every time."
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Jeny Doe</h1>
                        <span class="text-sm text-gray-500">CEO, Jeny Consultency</span>
                    </div>
                </div>
            </div>

            <div class="p-8 border rounded-lg dark:border-gray-700">
                <p class="leading-loose text-gray-500 dark:text-gray-400 font-semibold">
                   "We've been using Agenoresource for all our mining asset needs, and it has never disappointed. The platform's user-friendly interface and comprehensive database make it incredibly easy to find exactly what we need. Their leasing options have allowed us to scale our operations efficiently, saving us time and money. Agenoresource is the ultimate resource for any mining professional."
                </p>

                <div class="flex items-center mt-8 -mx-2">
                    <img class="object-cover mx-2 rounded-full w-14 shrink-0 h-14 ring-4 ring-gray-300 dark:ring-gray-700" src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="mx-2">
                        <h1 class="font-semibold text-gray-800 dark:text-white">Ema Watson </h1>
                        <span class="text-sm text-gray-500">Marketing Manager at Stech</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

{{-- End of Testimonial Section  --}}

{{-- Services Section --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
<div class="mb-10 md:mx-auto sm:text-center">
<h2 class="text-left font-sans text-3xl font-bold leading-none tracking-tight text-ageno dark:text-gray-300 sm:text-4xl">
Services
</h2>
</div>
<section class="bg-white dark:bg-gray-900">

<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
<div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
</svg>
</span>

<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
Mineral supply chain
</h1>

<p class="text-gray-500 dark:text-gray-300">
We create the link between the buyer and seller of mineral assets whether locally or globally. 
</p>

</div>

<div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
</svg>
</span>

<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Mining assets for sale</h1>

<p class="text-gray-500 dark:text-gray-300">
Here asset operators or owners can list their assets for outright purchase.
</p>


</div>

<div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
</svg>
</span>

<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Mining Assets for lease</h1>

<p class="text-gray-500 dark:text-gray-300">
Here asset operators or owners can list their assets for lease only.
</p>

</div>
</div>

<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
<div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
</svg>
</span>

<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Mining assets for Partnership</h1>

<p class="text-gray-500 dark:text-gray-300">
Here asset operators or owners can list their assets for partnership or joint venture.
</p>

</div>

<div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
</svg>
</span>

<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Manpower deployment/supply</h1>

<p class="text-gray-500 dark:text-gray-300">
We understand the importance of having qualified personnel as part one’s establishment.
</p>

</div>

<div class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl dark:bg-gray-800">
<span class="inline-block p-3 text-blue-500 bg-blue-100 rounded-full dark:text-white dark:bg-blue-500">
<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
</svg>
</span>

<h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Equipment lease and sale</h1>

<p class="text-gray-500 dark:text-gray-300">
With our broad network in the manufacturing industry, we connect the manufacturers or owners of heavy equipment used in the extractive industry to those who need them.
</p>

</div>
</div>
</section>
</div>
{{-- End of Services Section --}}



<template x-if="true">
<div x-show="showLoginPopup" class="fixed inset-0 bg-black opacity-50" @click="showLoginPopup = false"></div>
</template>

<template x-if="true">
<div x-show="showAssetModal" class="fixed inset-0 bg-ageno-2 opacity-40" @click="showAssetModal = false"></div>
</template>
</main>

@endsection
@section('app-script')
<script>
  function searchComponent() {
      return {
        activeElement: 'buy-search',
    formAction: '/buy-search',
    placeholder: 'buy',
    handleClick(element, placeholder) {
        this.activeElement = element;
        this.formAction = '/' + element;
        this.placeholder = placeholder;
    },
    handleSubmit() {
    },
          query: '',
          assets: @json($assetAll),
          filteredAssets: [],
          highlightedIndex: -1,
          filterAssets() {
              if (this.query.length > 0) {
                  this.filteredAssets = this.assets.filter(asset => 
                      asset.asset_name.toLowerCase().includes(this.query.toLowerCase()) || 
                      asset.asset_type.toLowerCase().includes(this.query.toLowerCase())
                  );
              } else {
                  this.filteredAssets = [];
              }
              this.highlightedIndex = -1;
          },
          highlightNext() {
              if (this.highlightedIndex < this.filteredAssets.length - 1) {
                  this.highlightedIndex++;
                  this.query = this.filteredAssets[this.highlightedIndex].asset_type;

              }
          },
          highlightPrev() {
              if (this.highlightedIndex > 0) {
                  this.highlightedIndex--;
                  this.query = this.filteredAssets[this.highlightedIndex].asset_type;

              }
          },
          highlightIndex(index) {
              this.highlightedIndex = index;
              this.query = this.filteredAssets[index].asset_type;

          },
          selectHighlighted() {
              if (this.highlightedIndex >= 0 && this.highlightedIndex < this.filteredAssets.length) {
                  this.selectAsset(this.filteredAssets[this.highlightedIndex]);
              }
          },
          selectAsset(asset) {
              this.query = asset.asset_type;
              this.filteredAssets = [];
              window.location.href = `/assets/${asset.slug}`;
          },
          search() {
              // Search functionality can be enhanced if needed
          }
      }
  }


  function activeClassHandler() {
            return {
                items: [],
                currentIndex: 0,
                intervalId: null,
                
                init() {
                    this.items = [this.$refs.asset1,this.$refs.asset2, this.$refs.asset3,this.$refs.asset4,this.$refs.asset5,this.$refs.asset6,
                    this.$refs.asset7, this.$refs.asset8, this.$refs.asset9
                    ];
                    this.startCycle();
                },

                startCycle() {
                    this.intervalId = setInterval(() => {
                        this.removeActiveClasses();
                        this.items[this.currentIndex].classList.add('active');
                        this.currentIndex = (this.currentIndex + 1) % this.items.length;
                    }, 3000);
                },

                removeActiveClasses() {
                    this.items.forEach(item => item.classList.remove('active'));
                }
            }
        }
</script>
@endsection