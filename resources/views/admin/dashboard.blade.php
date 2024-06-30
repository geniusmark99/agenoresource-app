@extends('admin.app')

@section('admin-content')
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-12 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Total users
              </p>
              <div class="hs-tooltip">
                <div class="hs-tooltip-toggle">
                  <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                  <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    The number of daily users
                  </span>
                </div>
              </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $totalUsers }}
              </h3>
              <span class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                <span class="inline-block text-xs font-medium">
                  12.5%
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 22h14"/><path d="M5 2h14"/><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"/><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"/></svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Total Amount Paid
              </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
               &#8358; {{ $totalAmountPaid }}
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6"/><path d="m12 12 4 10 1.7-4.3L22 16Z"/></svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Avg. Click Rate
              </p>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                56.8%
              </h3>
              <span class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-red-100 text-red-900 dark:bg-red-800 dark:text-red-100">
                <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>
                <span class="inline-block text-xs font-medium">
                  1.7%
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
  
      <!-- Card -->
      <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
        <div class="p-4 md:p-5 flex gap-x-4">
          <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
            <svg class="flex-shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z"/><path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/><path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2"/><path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2"/></svg>
          </div>
  
          <div class="grow">
            <div class="flex items-center gap-x-2">
              <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                Pageviews
              </p>
              <div class="hs-tooltip">
                <div class="hs-tooltip-toggle">
                  <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                  <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    The average pageviews
                  </span>
                </div>
              </div>
            </div>
            <div class="mt-1 flex items-center gap-x-2">
              <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                92,913
              </h3>
            </div>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Card Section -->




  
  <div class="grid lg:grid-cols-2 gap-4 sm:gap-6">
    <!-- Card -->
    <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
      <!-- Header -->
      <div class="flex justify-between items-center">
        <div>
          <h2 class="text-sm text-gray-500 dark:text-neutral-500">
            Income
          </h2>
          <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            &#8358; {{ $totalAmountPaid }}
          </p>
        </div>

        <div>
          <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
            <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
            25%
          </span>
        </div>
      </div>
      <!-- End Header -->

      <div id="hs-multiple-bar-charts"></div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
      <!-- Header -->
      <div class="flex justify-between items-center">
        <div>
          <h2 class="text-sm text-gray-500 dark:text-neutral-500">
            Visitors
          </h2>
          <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
            80.3k
          </p>
        </div>

        <div>
          <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-500">
            <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"/><path d="m19 12-7 7-7-7"/></svg>
            2%
          </span>
        </div>
      </div>
      <!-- End Header -->

      <div id="hs-single-area-chart"></div>
    </div>
    <!-- End Card -->


  </div>




     <!-- Card -->
     <div class="flex flex-col" x-data="{modalOpen:false}">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
              <!-- Header -->
              <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                <div>
                  <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                    Users
                  </h2>
                  <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Add users, edit and more.
                  </p>
                </div>
  
                <div>
                  <div class="inline-flex gap-x-2">
                    <a href="{{ route('admin.all.users') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">                     
                      View all
                    </a>
  
                    <button @click="modalOpen = true" class="border-none outlin-none ring-0 appearance-none py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" >
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                      Add user
                    </button>
                  </div>
                </div>
              </div>
              <!-- End Header -->

              {{-- Modal Popup --}}

              <div  @keydown.escape="modalOpen = false" x-cloak x-show="modalOpen" 
              class="fixed inset-0 flex items-center justify-center z-[1000]">
             <div class="fixed inset-0 bg-black opacity-50" @click="modalpen = false"></div>
             <div x-show="modalOpen" 
                  x-transition:enter="transition ease-out duration-300 transform" 
                  x-transition:enter-start="scale-95 opacity-0" 
                  x-transition:enter-end="scale-100 opacity-100" 
                  x-transition:leave="transition ease-in duration-200 transform" 
                  x-transition:leave-start="scale-100 opacity-100" 
                  x-transition:leave-end="scale-95 opacity-0"
                  class="bg-white dark:bg-neutral-900 rounded-lg shadow-lg w-full max-w-[600px] lg:mx-auto mt-20 lg:mt-0 absolute border dark:border-neutral-700">
                  
                  <div class="flex justify-between border-b dark:border-neutral-700 shadow-sm p-2">
                    <h2 class="text-xl font-bold dark:text-neutral-300">Create new user</h2>
<button @click="modalOpen = false" class="text-xl hover:bg-gray-300 dark:hover:bg-neutral-800 dark:text-neutral-500 rounded-full size-10 flex justify-center items-center">&times;</button>
                  </div>
                 <div class="mb-4 p-2">

                  <div class="mt-6 mx-2 mb-20 px-6 py-4 bg-white border border-ageno/30 dark:border-transparent dark:bg-neutral-800 shadow-sm overflow-y-auto rounded-lg">


                    <div class="mb-10">
                        <h1 class="text-center text-2xl lg:text-3l font-semibold text-slate-900 dark:text-neutral-300">Register</h1>
                        <p class="text-xs md:text-sm lg:text-base font-semibold dark:text-neutral-200 text-center">
                        Register a new user
                        </p>
                        </div>
                    
                <div class="lg:mx-0">
                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:gap-x-4 lg:my-4">
                        <!-- Firstame -->
                        <div class="relative">
                            <x-input-label for="firstname" :value="__('Firstname')" />
                            <x-text-input id="firstname" class="block mt-1 w-full dark:bg-neutral-900" type="text" name="firstname" :value="old('firstname')" autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>
                
                        <!-- Lastname -->
                        <div class="mt-4 lg:mt-0 relative">
                            <x-input-label for="lastname" :value="__('Lastname')" />
                            <x-text-input id="lastname" class="block mt-1 w-full dark:bg-neutral-900" type="text" name="lastname" :value="old('lastname')" autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>
                
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:gap-x-4 lg:my-4">
                
                        <!-- Account Type -->
                        <div class="mt-4 lg:mt-2 relative">
                            <label for="account_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Account Type</label>
                            <select id="account_type" name="account_type" class="mt-1 block w-full py-3 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-neutral-900 dark:text-gray-300 rounded-md shadow-sm dark:focus:border-indigo-600  dark:focus:ring-ageno focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="seller">Seller</option>
                                <option value="leaser">Leaser</option>
                                <option value="partner">Partner</option>
                            </select>
                            <x-input-error :messages="$errors->get('account_type')" class="mt-2" />
                
                        </div>
                
                            <!-- Email Address -->
                            <div class="mt-4 lg:mt-2 relative">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full dark:bg-neutral-900" type="email" name="email" :value="old('email')" autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                    
                </div>
                
                        <!-- Phone number-->
                        <div x-data="phoneInput()" class="flex flex-col mt-4 gap-y-2">
                            <label for="account_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone number</label>
                <div class="flex items-center space-x-2">
                            <div class="relative w-3/12">
                                <select x-model="selectedCountry" @change="updatePhoneCode" class="dark:border-gray-700 dark:bg-neutral-900 dark:text-gray-300 block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <template x-for="country in countries" :key="country.code">
                                      <option :value="country.code" x-text="`${country.name} (${country.dialCode})`"></option>
                                    </template>
                                  </select>
                            
                            </div>
                            <div class="flex flex-col gap-y-2 relative w-9/12">
                                <input x-model="phoneNumber" pattern="[0-9]*" name="phone_number" @input="filterNonNumeric" value="{{ old('phone_number')}}" type="tel" 
                                class="w-full border-gray-300 dark:border-gray-700 dark:bg-neutral-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm" placeholder="Phone number">
                                <span x-show="showError" class="text-red-500 absolute -bottom-[22px] text-sm right-0">*Please enter numbers only.</span>
                                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                           
                            </div>
                       
                        </div>
                        </div>
                
                
                    
                <div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:gap-x-4 lg:my-4">
                
                        <!-- Password -->
                                <div class="mt-4 relative">
                                    <x-input-label for="password" :value="__('Password')" />
                
                            <x-text-input id="password" class="block mt-1 w-full dark:bg-neutral-900"
                                            type="password"
                                            name="password"
                                            autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                
                        <!-- Confirm Password -->
                        <div class="mt-4 relative">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                
                            <x-text-input id="password_confirmation" class="block mt-1 w-full dark:bg-neutral-900"
                                            type="password"
                                            name="password_confirmation" autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 right-0" />
                        </div>
                </div>
                
                        <div class="flex items-center justify-end mt-4">
                          
                
                            <x-primary-button class="ms-4">
                                {{ __('Add') }}
                            </x-primary-button>
                        </div>
                    </form>
                
                </div>
                
                
                    </div>
                 
                 </div>
               
             </div>
         </div>
  
              <!-- Table -->
              <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                <thead class="bg-gray-50 dark:bg-neutral-800">
                  <tr>
                    <th scope="col" class="ps-6 py-3 text-start">
                      <label for="hs-at-with-checkboxes-main" class="flex">
                        <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
                        <span class="sr-only">Checkbox</span>
                      </label>
                    </th>
  
                    <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Names
                        </span>
                      </div>
                    </th>
  
                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Account Type
                        </span>
                      </div>
                    </th>
  
                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Status
                        </span>
                      </div>
                    </th>
  
                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          ID
                        </span>
                      </div>
                    </th>
  
                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                          Created
                        </span>
                      </div>
                    </th>
  
                    <th scope="col" class="px-6 py-3 text-end"></th>
                  </tr>
                </thead>
  
                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                  @foreach ($users as $user)
                  <tr>
                    <td class="size-px whitespace-nowrap">
                      <div class="ps-6 py-3">
                        <label for="hs-at-with-checkboxes-1" class="flex">
                          <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1">
                          <span class="sr-only">Checkbox</span>
                        </label>
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                        <div class="flex items-center gap-x-3">
                          <img class="inline-block size-[38px] rounded-full" 
                          src="{{ $user->profile_pics }}" alt="Image Description">
                          <div class="grow">
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $user->firstname }} {{ $user->lastname }}</span>
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">{{ $user->email }}</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="h-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $user->account_type }}</span>
                        <span class="block text-sm text-gray-500 dark:text-neutral-500"></span>
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        @if($user->active)  
                        
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                          </svg>
                          Active
                        </span>
                        @else
                        <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                          </svg>
                          Unactive
                        </span>
                        @endif
                        
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <div class="flex items-center gap-x-3 dark:text-neutral-500">
                          {{ $user->uuid }}
                          {{-- <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                          <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                            <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div> --}}
                        </div>
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="text-sm text-gray-500 dark:text-neutral-500">
                          {{ $user->created_at }}
                        </span>
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <a href="{{ route('admin.user',[$user->uuid]) }}" class="flex items-center gap-x-2 text-sm
                           text-blue-600 dark:text-white font-medium  bg-gray-100 dark:bg-ageno rounded-xl p-1.5 hover:shadow-md shadow-blue-500/50 justify-center hover:bg-blue-600 dark:hover:bg-neutral-900 hover:text-white dark:hover:text-blue-600">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-3 fill-current">
                            <path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
                            View
                        </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              
  
                
  
  
  
  
  
                  
  
                  
  
                </tbody>
              </table>
              <!-- End Table -->
  
              <!-- Footer -->
              <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                <div>
                  <p class="text-sm text-gray-600 dark:text-neutral-400">
                    <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                  </p>
                </div>
  
                <div>
                  {{ $users->links() }}
                  {{-- <div class="inline-flex gap-x-2">
                    <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                      Prev
                    </button>
  
                    <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                      Next
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </button>
                  </div> --}}
                </div>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
      </div>
@endsection

@section('admin-script')
<script src="{{ asset('js/libphonenumber-min.js') }}"></script>
<script>
function phoneInput() {
    return {
      countries: [
      //   { name: 'Nigeria', code: 'NG', dialCode: '+234' },
        { name: 'Afghanistan', code: 'AF', dialCode: '+93' },
        { name: 'Albania', code: 'AL', dialCode: '+355' },
        { name: 'Algeria', code: 'DZ', dialCode: '+213' },
        { name: 'Andorra', code: 'AD', dialCode: '+376' },
        { name: 'Angola', code: 'AO', dialCode: '+244' },
        { name: 'Argentina', code: 'AR', dialCode: '+54' },
        { name: 'Armenia', code: 'AM', dialCode: '+374' },
        { name: 'Australia', code: 'AU', dialCode: '+61' },
        { name: 'Austria', code: 'AT', dialCode: '+43' },
        { name: 'Azerbaijan', code: 'AZ', dialCode: '+994' },
        { name: 'Bahamas', code: 'BS', dialCode: '+1-242' },
        { name: 'Bahrain', code: 'BH', dialCode: '+973' },
        { name: 'Bangladesh', code: 'BD', dialCode: '+880' },
        { name: 'Barbados', code: 'BB', dialCode: '+1-246' },
        { name: 'Belarus', code: 'BY', dialCode: '+375' },
        { name: 'Belgium', code: 'BE', dialCode: '+32' },
        { name: 'Belize', code: 'BZ', dialCode: '+501' },
        { name: 'Benin', code: 'BJ', dialCode: '+229' },
        { name: 'Bhutan', code: 'BT', dialCode: '+975' },
        { name: 'Bolivia', code: 'BO', dialCode: '+591' },
        { name: 'Bosnia and Herzegovina', code: 'BA', dialCode: '+387' },
        { name: 'Botswana', code: 'BW', dialCode: '+267' },
        { name: 'Brazil', code: 'BR', dialCode: '+55' },
        { name: 'Brunei Darussalam', code: 'BN', dialCode: '+673' },
        { name: 'Bulgaria', code: 'BG', dialCode: '+359' },
        { name: 'Burkina Faso', code: 'BF', dialCode: '+226' },
        { name: 'Burundi', code: 'BI', dialCode: '+257' },
        { name: 'Cambodia', code: 'KH', dialCode: '+855' },
        { name: 'Cameroon', code: 'CM', dialCode: '+237' },
        { name: 'Canada', code: 'CA', dialCode: '+1' },
        { name: 'Cape Verde', code: 'CV', dialCode: '+238' },
        { name: 'Central African Republic', code: 'CF', dialCode: '+236' },
        { name: 'Chad', code: 'TD', dialCode: '+235' },
        { name: 'Chile', code: 'CL', dialCode: '+56' },
        { name: 'China', code: 'CN', dialCode: '+86' },
        { name: 'Colombia', code: 'CO', dialCode: '+57' },
        { name: 'Comoros', code: 'KM', dialCode: '+269' },
        { name: 'Congo', code: 'CG', dialCode: '+242' },
        { name: 'Congo, Democratic Republic of the Congo', code: 'CD', dialCode: '+243' },
        { name: 'Costa Rica', code: 'CR', dialCode: '+506' },
        { name: "Cote d'Ivoire", code: 'CI', dialCode: '+225' },
        { name: 'Croatia', code: 'HR', dialCode: '+385' },
        { name: 'Cuba', code: 'CU', dialCode: '+53' },
        { name: 'Cyprus', code: 'CY', dialCode: '+357' },
        { name: 'Czech Republic', code: 'CZ', dialCode: '+420' },
        { name: 'Denmark', code: 'DK', dialCode: '+45' },
        { name: 'Djibouti', code: 'DJ', dialCode: '+253' },
        { name: 'Dominica', code: 'DM', dialCode: '+1-767' },
        { name: 'Dominican Republic', code: 'DO', dialCode: '+1-809' },
        { name: 'Ecuador', code: 'EC', dialCode: '+593' },
        { name: 'Egypt', code: 'EG', dialCode: '+20' },
        { name: 'El Salvador', code: 'SV', dialCode: '+503' },
        { name: 'Equatorial Guinea', code: 'GQ', dialCode: '+240' },
        { name: 'Eritrea', code: 'ER', dialCode: '+291' },
        { name: 'Estonia', code: 'EE', dialCode: '+372' },
        { name: 'Eswatini', code: 'SZ', dialCode: '+268' },
        { name: 'Ethiopia', code: 'ET', dialCode: '+251' },
        { name: 'Fiji', code: 'FJ', dialCode: '+679' },
        { name: 'Finland', code: 'FI', dialCode: '+358' },
        { name: 'France', code: 'FR', dialCode: '+33' },
        { name: 'Gabon', code: 'GA', dialCode: '+241' },
        { name: 'Gambia', code: 'GM', dialCode: '+220' },
        { name: 'Georgia', code: 'GE', dialCode: '+995' },
        { name: 'Germany', code: 'DE', dialCode: '+49' },
        { name: 'Ghana', code: 'GH', dialCode: '+233' },
        { name: 'Greece', code: 'GR', dialCode: '+30' },
        { name: 'Grenada', code: 'GD', dialCode: '+1-473' },
        { name: 'Guatemala', code: 'GT', dialCode: '+502' },
        { name: 'Guinea', code: 'GN', dialCode: '+224' },
        { name: 'Guinea-Bissau', code: 'GW', dialCode: '+245' },
        { name: 'Guyana', code: 'GY', dialCode: '+592' },
        { name: 'Haiti', code: 'HT', dialCode: '+509' },
        { name: 'Honduras', code: 'HN', dialCode: '+504' },
        { name: 'Hungary', code: 'HU', dialCode: '+36' },
        { name: 'Iceland', code: 'IS', dialCode: '+354' },
        { name: 'India', code: 'IN', dialCode: '+91' },
        { name: 'Indonesia', code: 'ID', dialCode: '+62' },
        { name: 'Iran', code: 'IR', dialCode: '+98' },
        { name: 'Iraq', code: 'IQ', dialCode: '+964' },
        { name: 'Ireland', code: 'IE', dialCode: '+353' },
        { name: 'Israel', code: 'IL', dialCode: '+972' },
        { name: 'Italy', code: 'IT', dialCode: '+39' },
        { name: 'Jamaica', code: 'JM', dialCode: '+1-876' },
        { name: 'Japan', code: 'JP', dialCode: '+81' },
        { name: 'Jordan', code: 'JO', dialCode: '+962' },
        { name: 'Kazakhstan', code: 'KZ', dialCode: '+7' },
        { name: 'Kenya', code: 'KE', dialCode: '+254' },
        { name: 'Kiribati', code: 'KI', dialCode: '+686' },
        { name: 'Kuwait', code: 'KW', dialCode: '+965' },
        { name: 'Kyrgyzstan', code: 'KG', dialCode: '+996' },
        { name: 'Laos', code: 'LA', dialCode: '+856' },
        { name: 'Latvia', code: 'LV', dialCode: '+371' },
        { name: 'Lebanon', code: 'LB', dialCode: '+961' },
        { name: 'Lesotho', code: 'LS', dialCode: '+266' },
        { name: 'Liberia', code: 'LR', dialCode: '+231' },
        { name: 'Libya', code: 'LY', dialCode: '+218' },
        { name: 'Liechtenstein', code: 'LI', dialCode: '+423' },
        { name: 'Lithuania', code: 'LT', dialCode: '+370' },
        { name: 'Luxembourg', code: 'LU', dialCode: '+352' },
        { name: 'Madagascar', code: 'MG', dialCode: '+261' },
        { name: 'Malawi', code: 'MW', dialCode: '+265' },
        { name: 'Malaysia', code: 'MY', dialCode: '+60' },
        { name: 'Maldives', code: 'MV', dialCode: '+960' },
        { name: 'Mali', code: 'ML', dialCode: '+223' },
        { name: 'Malta', code: 'MT', dialCode: '+356' },
        { name: 'Marshall Islands', code: 'MH', dialCode: '+692' },
        { name: 'Mauritania', code: 'MR', dialCode: '+222' },
        { name: 'Mauritius', code: 'MU', dialCode: '+230' },
        { name: 'Mexico', code: 'MX', dialCode: '+52' },
        { name: 'Micronesia', code: 'FM', dialCode: '+691' },
        { name: 'Moldova', code: 'MD', dialCode: '+373' },
        { name: 'Monaco', code: 'MC', dialCode: '+377' },
        { name: 'Mongolia', code: 'MN', dialCode: '+976' },
        { name: 'Montenegro', code: 'ME', dialCode: '+382' },
        { name: 'Morocco', code: 'MA', dialCode: '+212' },
        { name: 'Mozambique', code: 'MZ', dialCode: '+258' },
        { name: 'Myanmar', code: 'MM', dialCode: '+95' },
        { name: 'Namibia', code: 'NA', dialCode: '+264' },
        { name: 'Nauru', code: 'NR', dialCode: '+674' },
        { name: 'Nepal', code: 'NP', dialCode: '+977' },
        { name: 'Netherlands', code: 'NL', dialCode: '+31' },
        { name: 'New Zealand', code: 'NZ', dialCode: '+64' },
        { name: 'Nicaragua', code: 'NI', dialCode: '+505' },
        { name: 'Niger', code: 'NE', dialCode: '+227' },
        { name: 'Nigeria', code: 'NG', dialCode: '+234' },
        { name: 'North Korea', code: 'KP', dialCode: '+850' },
        { name: 'North Macedonia', code: 'MK', dialCode: '+389' },
        { name: 'Norway', code: 'NO', dialCode: '+47' },
        { name: 'Oman', code: 'OM', dialCode: '+968' },
        { name: 'Pakistan', code: 'PK', dialCode: '+92' },
        { name: 'Palau', code: 'PW', dialCode: '+680' },
        { name: 'Palestine', code: 'PS', dialCode: '+970' },
        { name: 'Panama', code: 'PA', dialCode: '+507' },
        { name: 'Papua New Guinea', code: 'PG', dialCode: '+675' },
        { name: 'Paraguay', code: 'PY', dialCode: '+595' },
        { name: 'Peru', code: 'PE', dialCode: '+51' },
        { name: 'Philippines', code: 'PH', dialCode: '+63' },
        { name: 'Poland', code: 'PL', dialCode: '+48' },
        { name: 'Portugal', code: 'PT', dialCode: '+351' },
        { name: 'Qatar', code: 'QA', dialCode: '+974' },
        { name: 'Romania', code: 'RO', dialCode: '+40' },
        { name: 'Russia', code: 'RU', dialCode: '+7' },
        { name: 'Rwanda', code: 'RW', dialCode: '+250' },
        { name: 'Saint Kitts and Nevis', code: 'KN', dialCode: '+1-869' },
        { name: 'Saint Lucia', code: 'LC', dialCode: '+1-758' },
        { name: 'Saint Vincent and the Grenadines', code: 'VC', dialCode: '+1-784' },
        { name: 'Samoa', code: 'WS', dialCode: '+685' },
        { name: 'San Marino', code: 'SM', dialCode: '+378' },
        { name: 'Sao Tome and Principe', code: 'ST', dialCode: '+239' },
        { name: 'Saudi Arabia', code: 'SA', dialCode: '+966' },
        { name: 'Senegal', code: 'SN', dialCode: '+221' },
        { name: 'Serbia', code: 'RS', dialCode: '+381' },
        { name: 'Seychelles', code: 'SC', dialCode: '+248' },
        { name: 'Sierra Leone', code: 'SL', dialCode: '+232' },
        { name: 'Singapore', code: 'SG', dialCode: '+65' },
        { name: 'Slovakia', code: 'SK', dialCode: '+421' },
        { name: 'Slovenia', code: 'SI', dialCode: '+386' },
        { name: 'Solomon Islands', code: 'SB', dialCode: '+677' },
        { name: 'Somalia', code: 'SO', dialCode: '+252' },
        { name: 'South Africa', code: 'ZA', dialCode: '+27' },
        { name: 'South Korea', code: 'KR', dialCode: '+82' },
        { name: 'South Sudan', code: 'SS', dialCode: '+211' },
        { name: 'Spain', code: 'ES', dialCode: '+34' },
        { name: 'Sri Lanka', code: 'LK', dialCode: '+94' },
        { name: 'Sudan', code: 'SD', dialCode: '+249' },
        { name: 'Suriname', code: 'SR', dialCode: '+597' },
        { name: 'Sweden', code: 'SE', dialCode: '+46' },
        { name: 'Switzerland', code: 'CH', dialCode: '+41' },
        { name: 'Syria', code: 'SY', dialCode: '+963' },
        { name: 'Taiwan', code: 'TW', dialCode: '+886' },
        { name: 'Tajikistan', code: 'TJ', dialCode: '+992' },
        { name: 'Tanzania', code: 'TZ', dialCode: '+255' },
        { name: 'Thailand', code: 'TH', dialCode: '+66' },
        { name: 'Timor-Leste', code: 'TL', dialCode: '+670' },
        { name: 'Togo', code: 'TG', dialCode: '+228' },
        { name: 'Tonga', code: 'TO', dialCode: '+676' },
        { name: 'Trinidad and Tobago', code: 'TT', dialCode: '+1-868' },
        { name: 'Tunisia', code: 'TN', dialCode: '+216' },
        { name: 'Turkey', code: 'TR', dialCode: '+90' },
        { name: 'Turkmenistan', code: 'TM', dialCode: '+993' },
        { name: 'Tuvalu', code: 'TV', dialCode: '+688' },
        { name: 'Uganda', code: 'UG', dialCode: '+256' },
        { name: 'Ukraine', code: 'UA', dialCode: '+380' },
        { name: 'United Arab Emirates', code: 'AE', dialCode: '+971' },
        { name: 'United Kingdom', code: 'GB', dialCode: '+44' },
        { name: 'United States', code: 'US', dialCode: '+1' },
        { name: 'Uruguay', code: 'UY', dialCode: '+598' },
        { name: 'Uzbekistan', code: 'UZ', dialCode: '+998' },
        { name: 'Vanuatu', code: 'VU', dialCode: '+678' },
        { name: 'Vatican City', code: 'VA', dialCode: '+379' },
        { name: 'Venezuela', code: 'VE', dialCode: '+58' },
        { name: 'Vietnam', code: 'VN', dialCode: '+84' },
        { name: 'Yemen', code: 'YE', dialCode: '+967' },
        { name: 'Zambia', code: 'ZM', dialCode: '+260' },
        { name: 'Zimbabwe', code: 'ZW', dialCode: '+263' },
      ],
      selectedCountry: 'NG',
      phoneNumber: '',
      showError: false,
      updatePhoneCode() {
        const selectedCountryObj = this.countries.find(country => country.code === this.selectedCountry);
        this.phoneNumber = selectedCountryObj.dialCode + ' ';
      },
      formatPhoneNumber() {
        try {
          const phoneNumber = libphonenumber.parsePhoneNumber(this.phoneNumber, this.selectedCountry);
          if (phoneNumber.isValid()) {
            this.phoneNumber = phoneNumber.formatInternational();
          }
        } catch (e) {
          // Handle errors like invalid phone number format
        }
      },

      filterNonNumeric() {
      if (!/^\d+$/.test(this.phoneNumber)) {
        this.showError = true;
      } else {
        this.showError = false;
      }
      this.phoneNumber = this.phoneNumber.replace(/\D/g, '');
    },


    }
  }
</script>

@endsection
