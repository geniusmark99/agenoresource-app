@extends('layouts.general')
@section('app-title','Home')
@section('app-content')
<!-- Hero -->
<div class="relative overflow-hidden">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
    <div class="text-center">
      <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 dark:text-gray-200">
        Ageno resources
      </h1>

      <p class="mt-3 text-gray-600 dark:text-gray-400">
        Post mining assets and get insights from industry experts.
      </p>

      <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
      

        <!-- SVG Element -->
        <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
          <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- End SVG Element -->

        <!-- SVG Element -->
        <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
          <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- End SVG Element -->
      </div>


      {{-- Section --}}


      <div class="relative py-16">
        <div class="container relative m-auto px-6 text-gray-500 md:px-12">
          <div class="grid gap-6 md:mx-auto md:w-8/12 lg:w-full lg:grid-cols-3">
            <div class="group space-y-6 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
          
              <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Mining asset seekers</h3>
              <p>
                Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
                tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
              </p>
              <a
                href="#"
                class="relative mx-auto flex h-10 w-10 items-center justify-center before:absolute before:inset-0 before:rounded-full before:border before:border-gray-100 dark:before:border-gray-600 before:transition before:duration-300 group-hover:before:scale-125"
              >
                <span class="text-primary">&rightarrow;</span>
              </a>
            </div>
            <div class="group space-y-6 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
         
              <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Mining Engineers</h3>
              <p>
                Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
                tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
              </p>
      
              <a
                href="#"
                class="relative mx-auto flex h-10 w-10 items-center justify-center before:absolute before:inset-0 before:rounded-full before:border before:border-gray-100 dark:before:border-gray-600 before:transition before:duration-300 group-hover:before:scale-125"
              >
                <span class="text-primary">&rightarrow;</span>
              </a>
            </div>
            <div class="group space-y-6 border border-gray-100 dark:border-gray-700 rounded-3xl bg-white dark:bg-gray-800 px-8 py-12 text-center shadow-2xl shadow-gray-600/10 dark:shadow-none">
             
              <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">Metallurgical Engineers</h3>
              <p>
                Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam
                tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.
              </p>
              <a
                href="#"
                class="relative mx-auto flex h-10 w-10 items-center justify-center before:absolute before:inset-0 before:rounded-full before:border before:border-gray-100 dark:before:border-gray-600 before:transition before:duration-300 group-hover:before:scale-125"
              >
                <span class="text-primary">&rightarrow;</span>
              </a>
            </div>
          </div>
        </div>
      </div>
                                          

      {{-- End of Section --}}

      
    </div>
  </div>
</div>

@endsection