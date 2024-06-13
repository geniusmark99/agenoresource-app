@extends('layouts.general')
@section('app-title','Contact us')

@section('app-content')

{{-- <div class="flex flex-col mt-4">
<h3 class=" px-4 sm:px-6 lg:px-28 text-left text-ageno lg:text-3xl font-bold dark:text-white">Top Latest assets</h3>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="container">
        <h1>{{ $asset->asset_name }}</h1>
        <p><strong>UID:</strong> {{ $asset->uid }}</p>
        <p><strong>Project ID:</strong> {{ $asset->project_id }}</p>
        <p><strong>Asset Type:</strong> {{ $asset->asset_type }}</p>
        <p><strong>Location:</strong> {{ $asset->asset_location_details }}</p>
        <p><strong>Information:</strong> {{ $asset->asset_information }}</p>
        @if($asset->pictures)
            <div>
                <strong>Pictures:</strong>
                <div>{!! $asset->pictures !!}</div>
            </div>
        @endif
        @if($asset->video)
            <div>
                <strong>Video:</strong>
                <div>{!! $asset->video !!}</div>
            </div>
        @endif
        @if($asset->technical_report)
            <div>
                <strong>Technical Report:</strong>
                <div>{!! $asset->technical_report !!}</div>
            </div>
        @endif
        <p><strong>Price:</strong> {{ $asset->price }}</p>
        @if($asset->coordinates)
            <p><strong>Coordinates:</strong> {{ $asset->coordinates }}</p>
        @endif
        @if($asset->land_size)
            <p><strong>Land Size:</strong> {{ $asset->land_size }}</p>
        @endif
        @if($asset->mineral_details)
            <p><strong>Mineral Details:</strong> {{ $asset->mineral_details }}</p>
        @endif
        @if($asset->reserve_deposit)
            <p><strong>Reserve Deposit:</strong> {{ $asset->reserve_deposit }}</p>
        @endif
        @if($asset->jorc_report)
            <p><strong>JORC Report:</strong> {{ $asset->jorc_report }}</p>
        @endif
        <p><strong>Opportunity Type:</strong> {{ $asset->opportunity_type }}</p>
        @if($asset->geological_location)
            <p><strong>Geological Location:</strong> {{ $asset->geological_location }}</p>
        @endif
        @if($asset->contact_information)
            <p><strong>Contact Information:</strong> {{ $asset->contact_information }}</p>
        @endif
        <p><strong>Date Added:</strong> {{ $asset->date_added }}</p>
        <p><strong>Times Viewed:</strong> {{ $asset->times_viewed }}</p>
        <p><strong>Paid:</strong> {{ $asset->paid ? 'Yes' : 'No' }}</p>
        <p><strong>Duration Date:</strong> {{ $asset->duration_date }}</p>
        <p><strong>Active:</strong> {{ $asset->active ? 'Active' : 'Inactive' }}</p>
        <p><strong>User Name:</strong> {{ $asset->user->name }}</p>
    </div>

</div>
</div> --}}


<!-- Blog Article -->
<div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">
      <!-- Avatar Media -->
      <div class="flex justify-between items-center mb-6">
        <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
          <div class="flex-shrink-0">
            <img class="size-12 rounded-full" 
            src="{{ $asset->user->profile_pics }}"            
            alt="Image Description">
       
        </div>
  
          <div class="grow">
            <div class="flex justify-between items-center gap-x-2">
              <div>
                <!-- Tooltip -->
                <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                  <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                    <span class="font-semibold text-gray-800 dark:text-neutral-200">
                      {{ $asset->user->firstname }}
                      {{ $asset->user->lastname }}
                    </span>
  
                    <!-- Dropdown Card -->
                    <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                      <!-- Body -->
                      <div class="p-4 sm:p-5">
                        <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                          <div class="flex-shrink-0">
                            <img class="size-8 rounded-full" 
                            src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                            alt="Image Description">
                          </div>
  
                          <div class="grow">
                            <p class="text-lg font-semibold text-gray-200 dark:text-neutral-200">
                              Leyla Ludic
                            </p>
                          </div>
                        </div>
                        <p class="text-sm text-gray-400 dark:text-neutral-400">
                          Leyla is a Customer Success Specialist at Preline and spends her time speaking to in-house recruiters all over the world.
                        </p>
                      </div>
                      <!-- End Body -->
  
                      <!-- Footer -->
                      <div class="flex justify-between items-center px-4 py-3 sm:px-5">
                        <ul class="text-xs space-x-3">
                          <li class="inline-block">
                            <span class="font-semibold text-gray-200 dark:text-neutral-200">56</span>
                            <span class="text-gray-400 dark:text-neutral-400">articles</span>
                          </li>
                          <li class="inline-block">
                            <span class="font-semibold text-gray-200 dark:text-neutral-200">1k+</span>
                            <span class="text-gray-400 dark:text-neutral-400">followers</span>
                          </li>
                        </ul>
  
                        <div>
                          <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Follow
                          </button>
                        </div>
                      </div>
                      <!-- End Footer -->
                    </div>
                    <!-- End Dropdown Card -->
                  </div>
                </div>
                <!-- End Tooltip -->
  
                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                  <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                    Date posted:
                  </li>
                  <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                    {{ $asset->date_added }}
                    
                  </li>
                </ul>
              </div>
  
              <!-- Button Group -->
              <div>
                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-ageno dark:border-neutral-700 dark:text-white dark:hover:bg-ageno-2">
                    <svg class="size-4 fill-black dark:fill-neutral-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path d="M24 4C18.494917 4 14 8.494921 14 14C14 19.505079 18.494917 24 24 24C29.505083 24 34 19.505079 34 14C34 8.494921 29.505083 4 24 4 z M 24 7C27.883764 7 31 10.116238 31 14C31 17.883762 27.883764 21 24 21C20.116236 21 17 17.883762 17 14C17 10.116238 20.116236 7 24 7 z M 11.978516 28C9.7987044 28 8 29.798705 8 31.978516L8 33.5C8 37.104167 10.27927 39.892227 13.306641 41.5625C16.334011 43.232773 20.168103 44 24 44C27.831897 44 31.665989 43.232773 34.693359 41.5625C37.274641 40.138345 39.217335 37.862616 39.761719 35L40.001953 35L40.001953 31.978516C40.001953 29.798705 38.201295 28 36.021484 28L11.978516 28 z M 11.978516 31L36.021484 31C36.579674 31 37.001953 31.420326 37.001953 31.978516L37.001953 32L37 32L37 33.5C37 35.895833 35.65427 37.607773 33.244141 38.9375C30.834011 40.267227 27.418103 41 24 41C20.581897 41 17.165989 40.267227 14.755859 38.9375C12.34573 37.607773 11 35.895833 11 33.5L11 31.978516C11 31.420326 11.420326 31 11.978516 31 z"/>
                      </svg>
                  {{ $asset->user->account_type }}
                </button>
              </div>
              <!-- End Button Group -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Avatar Media -->
  
      <!-- Content -->
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl dark:text-white">
            {{ $asset->asset_information }}
          </h2>
  
          <p class="text-lg text-gray-800 dark:text-neutral-200">At preline, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also helps them grow.</p>
        </div>
  
        <p class="text-lg text-gray-800 dark:text-neutral-200">We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.</p>
  
        <figure>
        

          @forelse ($asset->pictures as $picture)
          <img class="w-full object-cover rounded-xl"  src="{{ $picture }}" alt="{{ $asset->slug }}" draggable="false">
     @empty
     @guest
     <p  class="w-full block object-cover rounded-xl text-gray-600/90 bg-gray-100 dark:bg-gray-700 dark:text-gray-200 shadow-md px-3 text-center py-4">Agent didn't Upload Image</a>
       
     @endguest
     @auth
     <a href="{{ route('user.asset') }}" class="w-full block object-cover rounded-xl text-gray-600/90 bg-gray-100 dark:bg-gray-700 dark:text-gray-200 shadow-md px-3 text-center py-4">Please Kindly upload your asset image(s)</a>
       
     @endauth
          @endforelse
          
          <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
            {{-- A woman sitting at a table. --}}
          </figcaption>
        </figure>
  
        <p class="text-lg text-gray-800 dark:text-neutral-200">As we've grown, we've seen how Preline has helped companies such as Spotify, Microsoft, Airbnb, Facebook, and Intercom bring their designers closer together to create amazing things. We've also learned that when the culture of sharing is brought in earlier, the better teams adapt and communicate with one another.</p>
  
        <p class="text-lg text-gray-800 dark:text-neutral-200">That's why we are excited to share that we now have a <a class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="#">free version of Preline</a>, which will allow individual designers, startups and other small teams a chance to create a culture of openness early on.</p>
  
        <blockquote class="text-center p-4 sm:px-7">
          <p class="text-xl font-medium text-gray-800 md:text-2xl md:leading-normal xl:text-2xl xl:leading-normal dark:text-neutral-200">
            To say that switching to Preline has been life-changing is an understatement. My business has tripled and I got my life back.
          </p>
          <p class="mt-5 text-gray-800 dark:text-neutral-200">
            Nicole Grazioso
          </p>
        </blockquote>
  
        <figure>
          <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1670272498380-eb330b61f3cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Image Description">
          <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
            A man and a woman looking at a cell phone.
          </figcaption>
        </figure>
  
        <div class="space-y-3">
          <h3 class="text-2xl font-semibold dark:text-white">Bringing the culture of sharing to everyone</h3>
  
          <p class="text-lg text-gray-800 dark:text-neutral-200">We know the power of sharing is real, and we want to create an opportunity for everyone to try Preline and explore how transformative open communication can be. Now you can have a team of one or two designers and unlimited spectators (think PMs, management, marketing, etc.) share work and explore the design process earlier.</p>
        </div>
  
        <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800 dark:text-neutral-200">
          <li class="ps-2">Preline allows us to collaborate in real time and is a really great way for leadership on the team to stay up-to-date with what everybody is working on," <a class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="#">said</a> Stewart Scott-Curran, Intercom's Director of Brand Design.</li>
          <li class="ps-2">Preline opened a new way of sharing. It's a persistent way for everyone to see and absorb each other's work," said David Scott, Creative Director at <a class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="#">Eventbrite</a>.</li>
        </ul>
  
        <p class="text-lg text-gray-800 dark:text-neutral-200">Small teams and individual designers need a space where they can watch the design process unfold, both for themselves and for the people they work with – no matter if it's a fellow designer, product manager, developer or client. Preline allows you to invite more people into the process, creating a central place for conversation around design. As those teams grow, transparency and collaboration becomes integrated in how they communicate and work together.</p>
  
        <div>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" href="#">
            Plan
          </a>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" href="#">
            Web development
          </a>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" href="#">
            Free
          </a>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-200" href="#">
            Team
          </a>
        </div>
      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Blog Article -->
  
  <!-- Sticky Share Group -->
  <div class="sticky bottom-6 inset-x-0 text-center">
    <div class="inline-block bg-white shadow-md rounded-full py-3 px-4 dark:bg-neutral-800">
      <div class="flex items-center gap-x-1.5">
        <!-- Button -->
        <div class="hs-tooltip inline-block">
          <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
            875
            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black" role="tooltip">
              Like
            </span>
          </button>
        </div>
        <!-- Button -->
  
        <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>
  
        <!-- Button -->
        <div class="hs-tooltip inline-block">
          <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>
            16
            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black" role="tooltip">
              Comment
            </span>
          </button>
        </div>
        <!-- Button -->
  
        <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>
  
        <!-- Button -->
        <div class="hs-dropdown relative inline-flex">
          <button type="button" id="blog-article-share-dropdown" class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" x2="12" y1="2" y2="15"/></svg>
            Share
          </button>
          <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-gray-900 shadow-md rounded-xl p-2 dark:bg-neutral-950" aria-labelledby="blog-article-share-dropdown">
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
              Copy link
            </a>
            <div class="border-t border-gray-600 my-2 dark:border-neutral-800"></div>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
              Share on Twitter
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
              Share on Facebook
            </a>
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:ring-neutral-400" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
              </svg>
              Share on LinkedIn
            </a>
          </div>
        </div>
        <!-- Button -->
      </div>
    </div>
  </div>
  <!-- End Sticky Share Group -->

@endsection