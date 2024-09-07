
@extends('layouts.app')

      @section('app-header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight md:ml-16 lg:ml-24">
    {{ __('Choose a plan') }}
    </h2>
    <x-menu-desc-widget>
    Choose a plan, that suites you
    </x-menu-desc-widget>
    @endsection


    @section('app-content')
    
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
    <div class="flex flex-col justify-center items-center">
    
        <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" x-data="pricingList()">
        <div class="overflow-hidden">
    
      
          <!-- Hero -->
          <div class="relative">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute -top-48 start-0 -z-[1]">
              <div class="bg-purple-200 opacity-30 blur-3xl w-[1036px] h-[600px] dark:bg-purple-900 dark:opacity-20"></div>
              <div class="bg-slate-200 opacity-90 blur-3xl w-[577px] h-[300px] transform translate-y-32 dark:bg-slate-800/60"></div>
            </div>
            <!-- End Gradients -->
      
            <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 lg:pt-14 mx-auto">
              <!-- Title -->
              <div class="max-w-2xl mx-auto text-center mb-10">
                <h2 class="text-3xl leading-tight font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight bg-clip-text bg-gradient-to-r from-blue-600 to-violet-700 text-transparent">Agenoresource pricing plan</h2>
                <p class="mt-2 lg:text-lg text-gray-800 dark:text-gray-200 font-semibold">Whatever your status, our offers evolve according to your needs.</p>
              </div>
              <!-- End Title -->
      
              <!-- Switch -->
              {{-- <div class="flex justify-center items-center">
                <label for="pricing-switch" class="min-w-14 text-sm text-gray-600 me-3 dark:text-gray-400">
                  Monthly
                </label>
      
                <input type="checkbox" id="pricing-switch" class="relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-purple-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-purple-600 checked:border-purple-600 focus:checked:border-purple-600 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-purple-500 dark:checked:border-purple-500 dark:focus:ring-offset-gray-600
      
                before:inline-block before:size-6 before:bg-white checked:before:bg-white before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-white" checked>
      
                <label for="pricing-switch" class="min-w-14 text-sm text-gray-600 ms-3 dark:text-gray-400">
                  Weekly
                </label>
              </div> --}}
                 {{-- <div class="flex justify-center mb-6 items-center">
            <label class="mr-4 text-lg font-bold dark:text-gray-200">Number of weeks:</label>
            <button @click="decreaseWeeks" class="bg-gradient-to-r from-blue-600 to-ageno text-white py-2 px-4 rounded-l text-xl ">-</button>
            <input type="number" x-model.number="weeks" readonly class="text-xl font-semibold  border-t border-b border-ageno w-20 text-center">
            <button @click="increaseWeeks" class="bg-gradient-to-r from-blue-600 to-ageno text-white py-2 px-4 rounded-r text-xl">+</button>
        </div> --}}
              <!-- End Switch -->
      
              <!-- Grid -->
              <div class="mt-6 md:mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 lg:gap-3 xl:gap-6 lg:items-center">
                <!-- Card -->
                <div class="flex flex-col bg-white border-2 border-gray-200 hover:border-violet-900 hover:cursor-pointer text-center rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-gray-700 dark:hover:border-violet-900">
                  <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Free</h4>
                  <span class="mt-7 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">Free</span>
                  <p class="mt-2 text-sm text-gray-500">Get started with basic features</p>
      
                  <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Post 1 asset
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        24 hours
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Product support
                      </span>
                    </li>
                  </ul>
     
    
                  <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-violet-600 hover:bg-violet-600 text-violet-600 hover:text-white hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 disabled:pointer-events-none dark:border-violet-500 dark:text-violet-500 dark:hover:text-white dark:hover:border-violet-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Card -->
      
                <!-- Card -->
                <div class="flex flex-col bg-white border-2 border-violet-900 text-center shadow-xl rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-violet-700">
                  <p class="mb-3"><span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-violet-100 text-violet-800 dark:bg-violet-900 dark:text-white">Most popular</span></p>
                  <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Bronze</h4>
                  <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">
                    &#8358; <span x-text="totalBronze"></span>
                  </span>
                  <div class="mt-2 font-semibold dark:text-gray-300" >
                    &#8358;<span x-text="bronzeCostPerWeek"></span> per week
                  </div>
                  <p class="mt-2 text-sm text-gray-500">All the basics for posting all your assets</p>
      
                  <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        2 users
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Plan features
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Product support
                      </span>
                    </li>
                  </ul>
      
                  <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://github.com/htmlstreamofficial/preline/tree/main/examples/html">
                    Get started
                  </a>
                </div>
                <!-- End Card -->
      
    
                <!-- Card -->
                <div class="flex flex-col bg-white border-2 border-gray-200 hover:border-violet-900 text-center rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-gray-700">
                  <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Silver</h4>
                  <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">
                     &#8358; <span x-text="totalSilver"></span>
                  </span>
                  <div class="mt-2 font-semibold dark:text-gray-300">
                    &#8358;<span x-text="silverCostPerWeek"></span> per week
                  </div>
                  <p class="mt-2 text-sm text-gray-500">Everything you need for a growing business</p>
      
                  <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        5 users
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Plan features
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Product support
                      </span>
                    </li>
                  </ul>
    
      
                  <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-violet-600 text-violet-600 hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 hover:bg-violet-600 hover:text-white disabled:pointer-events-none dark:border-violet-500 dark:text-violet-500 dark:hover:text-white dark:hover:border-violet-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Card -->
      
                
                <!-- Card -->
                <div class="flex flex-col bg-white border-2  hover:border-violet-900 border-gray-200 text-center rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-gray-700">
                  <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Gold</h4>
                  <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">
                     &#8358; <span x-text="totalGold"></span>
    
                  </span>
                  <div class="mt-2 font-semibold dark:text-gray-300">
                    &#8358;<span x-text="goldCostPerWeek"></span> per week
                  </div>
                  <p class="mt-2 text-sm text-gray-500">Advanced features for scaling your business</p>
      
                  <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        10 users
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Plan features
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Product support
                      </span>
                    </li>
                  </ul>
    
              
      
                  <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold  hover:bg-violet-600 hover:text-white rounded-lg border border-violet-600 text-violet-600 hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 disabled:pointer-events-none dark:border-violet-500 dark:text-violet-500 dark:hover:text-white dark:hover:border-violet-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Grid -->
    
    
                  <!-- Grid -->
              <div class="mt-6 md:mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 lg:gap-3 xl:gap-6 lg:items-center">
                
      
                <!-- Card -->
                <div class="flex flex-col bg-white border-2 border-violet-900 text-center shadow-xl rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-violet-700">
                  <p class="mb-3"><span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-violet-100 text-violet-800 dark:bg-violet-900 dark:text-white">Most popular</span></p>
                  <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Diamond</h4>
                  <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">
                    &#8358; <span x-text="totalDiamond"></span>
                  </span>
                  <div class="mt-2 font-semibold dark:text-gray-300">
                    &#8358;<span x-text="diamondCostPerWeek"></span> per week
                  </div>
                  <p class="mt-2 text-sm text-gray-500">All the basics for posting all your assets</p>
      
                  <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        2 users
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Plan features
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Product support
                      </span>
                    </li>
                  </ul>
      
                  <a class="mt-5 py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="https://github.com/htmlstreamofficial/preline/tree/main/examples/html">
                    Get started
                  </a>
                </div>
                <!-- End Card -->
    
    
      
                <!-- Card -->
                <div class="flex flex-col bg-white border-2  hover:border-violet-900 border-gray-200 text-center rounded-2xl p-4 md:p-8 dark:bg-slate-900 dark:border-gray-700">
                  <h4 class="font-medium text-lg text-gray-800 dark:text-gray-200">Platinum</h4>
                  <span class="mt-5 font-bold text-3xl md:text-4xl xl:text-5xl text-gray-800 dark:text-gray-200">
                     &#8358; <span x-text="totalPlatinum"></span>
    
                  </span>
                  <div class="mt-2 font-semibold dark:text-gray-300">
                    &#8358;<span x-text="platinumCostPerWeek"></span> per week
                  </div>
                  <p class="mt-2 text-sm text-gray-500">Advanced features for scaling your business</p>
      
                  <ul class="mt-7 space-y-2.5 text-sm">
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        10 users
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Plan features
                      </span>
                    </li>
      
                    <li class="flex space-x-2">
                      <svg class="flex-shrink-0 mt-0.5 size-4 text-violet-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                      <span class="text-gray-800 dark:text-gray-400">
                        Product support
                      </span>
                    </li>
                  </ul>
    
                               {{-- 
      border-2  hover:border-violet-900
      
      hover:bg-violet-600 hover:text-white --}}
      
                  <a class="mt-5 py-3 px-4 hover:bg-violet-600 hover:text-white  w-full inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-violet-600 text-violet-600 hover:border-violet-500 hover:text-violet-500 disabled:opacity-50 disabled:pointer-events-none dark:border-violet-500 dark:text-violet-500 dark:hover:text-white dark:hover:border-violet-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Grid -->
      
            </div>
      
            <div class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[340px] h-[340px] border border-dashed border-violet-200 rounded-full dark:border-violet-900/60"></div>
            <div class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[575px] h-[575px] border border-dashed border-violet-200 rounded-full opacity-80 dark:border-violet-900/60"></div>
            <div class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[840px] h-[840px] border border-dashed border-violet-200 rounded-full opacity-60 dark:border-violet-900/60"></div>
            <div class="absolute top-1/2 start-1/2 -z-[1] transform -translate-y-1/2 -translate-x-1/2 w-[1080px] h-[1080px] border border-dashed border-violet-200 rounded-full opacity-40 dark:border-violet-900/60"></div>
          </div>
          <!-- End Hero -->
        </div>
      
        <!-- Comparison Table -->
        <div class="relative">
          <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 md:py-14 lg:py-20 mx-auto">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
              <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Compare plans</h2>
            </div>
      
            <!-- Header -->
            <div class="hidden lg:block sticky top-0 start-0 py-2 bg-white/60 backdrop-blur-md dark:bg-slate-900/60">
              <!-- Grid -->
              <div class="grid grid-cols-8 gap-6">
                <div class="col-span-2">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Features
                  </span>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Free
                  </span>
                  <p class="mt-2 text-sm text-gray-500">
                  </p>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Bronze
                  </span>
                  <p class="mt-2 text-sm text-gray-500">
                  </p>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Silver
                  </span>
                  <p class="mt-2 text-sm text-gray-500">
                  </p>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Gold
                  </span>
                  <p class="mt-2 text-sm text-gray-500">
                  </p>
                </div>
    
                  <div class="col-span-1">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Diamond
                  </span>
                  <p class="mt-2 text-sm text-gray-500">
                  </p>
                </div>
    
    
    
                  <div class="col-span-1">
                  <span class="font-semibold text-lg text-gray-800 dark:text-gray-200">
                    Platinum
                  </span>
                  <p class="mt-2 text-sm text-gray-500">
                  </p>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Grid -->
            </div>
            <!-- End Header -->
      
            <!-- Section -->
            <div class="space-y-4 lg:space-y-0">
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 lg:py-3">
                  <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    General
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-8 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Price:
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                    Free forever
                      
                    </span>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Bronze
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      
                      &#8358;<span x-text="bronzeCostPerWeek"></span> per week
                    </span>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Silver
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      &#8358;<span x-text="silverCostPerWeek"></span> per week
                    </span>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Gold
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      &#8358;<span x-text="goldCostPerWeek"></span> per week
                    </span>
                  </div>
                </li>
    
                 <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Diamond
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      &#8358;<span x-text="diamondCostPerWeek"></span> per week
                    </span>
                  </div>
                </li>
    
                 <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                   Platinum
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      &#8358;<span x-text="platinumCostPerWeek"></span> per week
                    </span>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-8 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Storage
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      15 GB
                    </span>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Bronze
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      1 TB
                    </span>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Silver
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      15 TB
                    </span>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Gold
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      Unlimited
                    </span>
                  </div>
                </li>
                <!-- End Item -->
    
                  <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Diamond
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      Unlimited
                    </span>
                  </div>
                </li>
                <!-- End Item -->
    
                  <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Platinum
                    </span>
                    <span class="text-sm text-gray-800 dark:text-gray-200">
                      Unlimited
                    </span>
                  </div>
                </li>
                <!-- End Item <--></-->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-8 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Email sharing
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Bronze
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Silver
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Gold
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
    
    
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Diamond
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
    
    
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Platinum
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-8 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Any time, anywhere access
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Bronze
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Silver
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Gold
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
    
                  <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Diamond
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
    
    
                  <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Platinum
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
            </div>
            <!-- End Section -->
      
            <!-- Section -->
            <div class="mt-6 space-y-4 lg:space-y-0">
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 lg:py-3">
                  <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Financial data
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Open/High/Low/Close
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Bronze
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Silver
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Gold
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Price-volume difference indicator
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
            </div>
            <!-- End Section -->
      
            <!-- Section -->
            <div class="mt-6 space-y-4 lg:space-y-0">
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 lg:py-3">
                  <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    On-chain data
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Network growth
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Average token age consumed
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Exchange flow
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Total ERC20 exchange funds flow
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Transaction volume
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Total circulation (beta)
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Velocity of tokens (beta)
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    ETH gas used
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
            </div>
            <!-- End Section -->
      
            <!-- Section -->
            <div class="mt-6 space-y-4 lg:space-y-0">
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 lg:py-3">
                  <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    Social data
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="hidden lg:block lg:col-span-1 py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center">
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Dev activity
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Topic search
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
      
              <!-- List -->
              <ul class="grid lg:grid-cols-6 lg:gap-6">
                <!-- Item -->
                <li class="lg:col-span-2 pb-1.5 lg:py-3">
                  <span class="font-semibold lg:font-normal text-sm text-gray-800 dark:text-gray-200">
                    Relative social dominance
                  </span>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Free
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Startup
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Team
                    </span>
                    <svg class="flex-shrink-0 size-5 text-gray-400 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
                  </div>
                </li>
                <!-- End Item -->
      
                <!-- Item -->
                <li class="col-span-1 py-1.5 lg:py-3 border-b border-gray-200 dark:border-gray-700">
                  <div class="grid grid-cols-2 md:grid-cols-6 lg:block">
                    <span class="lg:hidden md:col-span-2 text-sm text-gray-800 dark:text-gray-200">
                      Enterprise
                    </span>
                    <svg class="flex-shrink-0 size-5 text-violet-600 dark:text-violet-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </div>
                </li>
                <!-- End Item -->
              </ul>
              <!-- End List -->
            </div>
            <!-- End Section -->
      
            <!-- Header -->
            <div class="hidden lg:block mt-6">
              <!-- Grid -->
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-2">
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-violet-600 text-white hover:bg-violet-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Col -->
      
                <div class="col-span-1">
                  <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                    Get started
                  </a>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Grid -->
            </div>
            <!-- End Header -->
      
            <!-- Button Group -->
            <div class="mt-8 md:mt-12 flex justify-center items-center gap-x-3">
              <p class="text-sm text-gray-500 dark:text-gray-400">
                Need a custom plan?
              </p>
      
              <a href="{{route('contact')}}"  class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Contact us
              </a>
            </div>
            <!-- End Button Group -->
          </div>
        </div>
        <!-- End Comparison Table -->
      
        <!-- Testimonials -->
        <div class="relative overflow-hidden">
          <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:pt-16 lg:pb-28 mx-auto">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute start-0 -z-[1]">
              <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
            </div>
            <!-- End Gradients -->
      
          
          </div>
        </div>
        <!-- End Testimonials -->
      
        <!-- FAQ -->
        {{-- <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
          <div class="grid md:grid-cols-6 gap-6">
            <div class="md:col-span-2">
              <div class="max-w-xs">
                <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Frequently<br>asked questions</h2>
                <p class="mt-1 hidden md:block text-gray-600 dark:text-gray-400">Answers to the most frequently asked questions.</p>
              </div>
            </div>
      
            <div class="md:col-span-4">
              <div class="hs-accordion-group divide-y divide-gray-200 dark:divide-gray-700">
                <div class="hs-accordion pb-3 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                  <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                    Can I cancel at anytime?
                    <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                    <p class="text-gray-600 dark:text-gray-400">
                      Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback.
                    </p>
                  </div>
                </div>
      
                <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                  <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                    My team has credits. How do we use them?
                    <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-two" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                    <p class="text-gray-600 dark:text-gray-400">
                      Once your team signs up for a subscription plan. This is where we sit down, grab a cup of coffee and dial in the details.
                    </p>
                  </div>
                </div>
      
                <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                  <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                    How does Preline's pricing work?
                    <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-three" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                    <p class="text-gray-600 dark:text-gray-400">
                      Our subscriptions are tiered. Understanding the task at hand and ironing out the wrinkles is key.
                    </p>
                  </div>
                </div>
      
                <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-four">
                  <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                    How secure is Preline?
                    <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-four" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                    <p class="text-gray-600 dark:text-gray-400">
                      Protecting the data you trust to Preline is our first priority. This part is really crucial in keeping the project in line to completion.
                    </p>
                  </div>
                </div>
      
                <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-five">
                  <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
                    How do I get access to a theme I purchased?
                    <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-five" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
                    <p class="text-gray-600 dark:text-gray-400">
                      If you lose the link for a theme you purchased, don't panic! We've got you covered. You can login to your account, tap your avatar in the upper right corner, and tap Purchases. If you didn't create a login or can't remember the information, you can use our handy Redownload page, just remember to use the same email you originally made your purchases with.
                    </p>
                  </div>
                </div>
      
                <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-six">
                  <button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
                    Upgrade License Type
                    <svg class="hs-accordion-active:hidden block flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    <svg class="hs-accordion-active:block hidden flex-shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>
                  <div id="hs-basic-with-title-and-arrow-stretched-collapse-six" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
                    <p class="text-gray-600 dark:text-gray-400">
                      There may be times when you need to upgrade your license from the original type you purchased and we have a solution that ensures you can apply your original purchase cost to the new license purchase.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Accordion -->
            </div>
          </div>
        </div> --}}
        <!-- End FAQ -->
      </main>
      
    
    
    <script>
    function pricingList() {
        return {
            weeks: 1,
            bronzeCostPerWeek: 5000,
            silverCostPerWeek: 6000,
            goldCostPerWeek: 7000,
            diamondCostPerWeek: 8000,
            platinumCostPerWeek: 9000,
            increaseWeeks() {
                this.weeks++;
            },
            decreaseWeeks() {
                if (this.weeks > 1) {
                    this.weeks--;
                }
            },
            get totalBronze() {
                return this.bronzeCostPerWeek * this.weeks;
            },
            get totalSilver() {
                return this.silverCostPerWeek * this.weeks;
            },
            get totalGold() {
                return this.goldCostPerWeek * this.weeks;
            },
            get totalDiamond() {
                return this.diamondCostPerWeek * this.weeks;
            },
            get totalPlatinum() {
                return this.platinumCostPerWeek * this.weeks;
            }
        }
    }
    </script>
    
    
    </div>
    </div>
    </div>
    </div>
    
    @endsection