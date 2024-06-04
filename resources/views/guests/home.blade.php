@extends('layouts.general')
@section('app-title','Home')
@section('app-content')
<!-- Hero -->
<div class="relative bg-no-repeat bg-cover bg-center hero-bg h-[70vh] flex justify-center items-center" 
style="background-image: url('./images/hero-one.jpg');" 


>
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
<div class="text-center">
<h1 class="text-5xl sm:text-6xl font-bold text-gray-200 dark:text-gray-100">
Ageno resources
</h1>

<p class="mt-3 lg:text-xl font-semibold text-gray-200 dark:text-gray-100">
Post mining assets and get insights from industry experts.
</p> 


  <div x-data="searchComponent()"  

class="flex justify-center items-center "
>
<form :action="formAction" @submit.prevent="handleSubmit" class="flex flex-col w-full lg:w-[650px]">

  <div class="flex mt-6 w-full justify-between gap-x-1 mb-2">
  <button @click="handleClick('buy-search', 'buy')" :class="{ 'active': activeElement === 'buy-search' }" class="ageno-btn"><a>Buy</a></button>
  <button @click="handleClick('sale-search', 'sell')" :class="{ 'active': activeElement === 'sale-search' }"  class="ageno-btn"><a>Sale</a></button>
  <button @click="handleClick('lease-search', 'lease')" :class="{ 'active': activeElement === 'lease-search' }" class="ageno-btn"><a>Lease</a></button>
  </div>

  <div class="w-full flex">

  <div class="relative w-full">
    <input type="text" 
  class="border-none outline-none w-full dark:bg-slate-900 focus:outline-none appearance-none focus:border-none ring-0 focus:ring-0  text-gray-700 py-4 rounded-tl-md rounded-bl-md dark:text-white dark:placeholder:text-gray-300"
  :placeholder="'Enter to search for assets to ' + placeholder"
    x-model="query" 
    @input="filterAssets" @keydown.arrow-down="highlightNext"
     @keydown.arrow-up="highlightPrev">
    <div class="absolute bg-white dark:bg-slate-900 dark:text-white p-2 shadow-md w-full
      max-h-80 overflow-y-auto
     border-none outline-none 
    rounded-md mt-1" 
    x-show="filteredAssets.length > 0" x-cloak>
        <ul class="" >
            <template x-for="(asset, index) in filteredAssets" :key="asset.id">
                <li :class="{'bg-ageno text-white': index === highlightedIndex}" 
                class="px-4 py-2 hover:bg-ageno hover:text-white rounded-md cursor-pointer text-left" @click="selectAsset(asset)" @mouseover="highlightIndex(index)">
                    <span x-text="asset.asset_name"></span> - <span x-text="asset.asset_type"></span>
                </li>
            </template>
        </ul>
    </div>
</div>

  <button @click="handleSubmit"  class="w-[15%] lg:w-1/12 bg-ageno dark:bg-ageno rounded-tr-md rounded-br-md flex justify-center items-center cursor-pointer">
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

{{--  --}}


<!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
<!-- Title -->
<div class="w-full sm:w-1/2 lg:w-full mx-auto text-center mb-6">
<h2 class="text-black dark:text-gray-400 font-semibold text-xl lg:text-2xl">Trusted by top Mining Brand and enterprise</h2>

<div class="grid grid-cols-1 mt-10 gap-4 lg:flex justify-center lg:justify-between">
<div class="w-full h-20 flex justify-center items-center">
  <img src="{{ asset('./images/nigeria-geology-logo.jpeg') }}" alt="" class="h-24">
</div>
<div class="w-full h-20 flex justify-center items-center">
  <img src="{{ asset('./images/nigeria-mining-logo.jpeg') }}" alt="" class="h-24">
</div>
<div class="w-full h-20 flex justify-center items-center">
  <img src="{{ asset('./images/mine-steel-logo.jpeg') }}" alt="" class="h-24">
</div>

</div>
</div>
<!-- End Title -->

<div class="flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
{{-- <img src="{{ asset('') }}" alt=""> --}}
</div>
</div>
<!-- End Clients -->

<!-- Card Blog -->
<div class="flex flex-col mt-4">
<h3 class=" px-4 sm:px-6 lg:px-28 text-left text-ageno lg:text-3xl font-bold dark:text-white">Featured Latest assets</h3>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
<!-- Grid -->
{{-- grid lg:grid-cols-2 gap-4 sm:gap-6 --}}
<div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8">

        <x-widgets.asset-widget :assets="$assets"/>

</div>
<!-- End Grid -->
</div>
<!-- End Card Blog -->

</div>

{{-- Testimonial Section --}}

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
        // Handle form submission if needed
        // alert('Form submitted with action:', this.formAction);
    },
          query: '',
          assets: @json($assets),
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
                  this.query = this.filteredAssets[this.highlightedIndex].asset_name;

              }
          },
          highlightPrev() {
              if (this.highlightedIndex > 0) {
                  this.highlightedIndex--;
                  this.query = this.filteredAssets[this.highlightedIndex].asset_name;

              }
          },
          highlightIndex(index) {
              this.highlightedIndex = index;
              this.query = this.filteredAssets[index].asset_name;

          },
          selectHighlighted() {
              if (this.highlightedIndex >= 0 && this.highlightedIndex < this.filteredAssets.length) {
                  this.selectAsset(this.filteredAssets[this.highlightedIndex]);
              }
          },
          selectAsset(asset) {
              this.query = asset.asset_name;
              this.filteredAssets = [];
              window.location.href = `/assets/${asset.slug}`;
          },
          search() {
              // Search functionality can be enhanced if needed
          }
      }
  }
</script>
@endsection