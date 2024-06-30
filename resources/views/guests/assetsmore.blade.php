@extends('layouts.general')
@section('app-title','Contact us')

@section('app-content')

@livewire('asset-filter')


<div class="px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto bg-white flex justify-center items-center">
  <div class="max-w-7xl grid grid-cols-1 gap-y-4 md:gap-x-4 md:grid-cols-12 w-full">
<div class="md:col-span-8 flex flex-col gap-y-10">

  <h1 class="font-bold text-indigo-950 md:text-2xl">
    {{ $asset->asset_name }}
  </h1>


  <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1670272498380-eb330b61f3cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Image Description">


  <div class="flex flex-col md:flex-row justify-between border-b border-gray-500/40 pb-6">
 <h2 class="text-2xl text-indigo-950 md:text-4xl font-semibold">
  &#8358; {{ $asset->price }}


 </h2>

 <div class="hidden md:block w-[1px] h-full bg-gray-500/40"></div>
 <div class="flex justify-between mt-2 md:mt-0 md:justify-around md:gap-x-10">
<div class="flex gap-x-2 items-center">
<div>one</div>
<div>two</div>
</div>

<div class="flex gap-x-2 items-center">
<div>one</div>
<div>two</div>
</div>

 </div>
  </div>

<div class="border-b border-gray-500/40 pb-10">
<h1 class="text-xl md:text-2xl font-bold text-indigo-950 mb-5">Asset Address</h1>
<p class="flex gap-x-3">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="size-6 fill-indigo-950">
<path d="M25 1C16.179688 1 9 8.179688 9 17C9 31.113281 23.628906 47.945313 24.25 48.65625C24.441406 48.875 24.710938 49 25 49C25.308594 48.980469 25.558594 48.875 25.75 48.65625C26.371094 47.933594 41 30.8125 41 17C41 8.179688 33.820313 1 25 1 Z M 25 12C28.3125 12 31 14.6875 31 18C31 21.3125 28.3125 24 25 24C21.6875 24 19 21.3125 19 18C19 14.6875 21.6875 12 25 12Z"/>
</svg>
<span class="font-semibold text-indigo-900">
{{ $asset->asset_location_details }}
</span>
</p>
</div>

  <div class="border-b border-gray-500/40 bg-blue-200/20 rounded-md shadow-sm p-3">
<h2 class="flex items-center gap-x-1 mb-5">
  <span class="text-2xl text-indigo-950 font-bold">
    Safety Tips  
  </span>
  <svg class="size-5 fill-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
    <path d="M7.5 1C3.917969 1 1 3.917969 1 7.5C1 11.082031 3.917969 14 7.5 14C11.082031 14 14 11.082031 14 7.5C14 3.917969 11.082031 1 7.5 1 Z M 7.5 2C10.542969 2 13 4.457031 13 7.5C13 10.542969 10.542969 13 7.5 13C4.457031 13 2 10.542969 2 7.5C2 4.457031 4.457031 2 7.5 2 Z M 7.558594 4C6.347656 4.070313 5.359375 5.085938 5.359375 6.320313L6.359375 6.320313C6.359375 5.507813 7.0625 4.871094 7.921875 5.019531C8.535156 5.125 9.019531 5.726563 9 6.359375C8.984375 6.914063 8.660156 7.265625 8.183594 7.476563C7.886719 7.609375 7.605469 7.734375 7.367188 7.984375C7.128906 8.234375 7 8.605469 7 9L8 9C8 8.773438 8.03125 8.738281 8.09375 8.671875C8.152344 8.609375 8.316406 8.511719 8.585938 8.390625C9.332031 8.066406 9.972656 7.351563 10 6.390625C10.035156 5.253906 9.21875 4.226563 8.089844 4.03125C7.910156 4.003906 7.730469 3.992188 7.558594 4 Z M 7 10L7 11L8 11L8 10Z"  />
  </svg>

</h2>

<ul class="px-4 font-normal text-xl text-indigo-900 gap-y-2 flex flex-col">
  <li class="list-decimal">
    Do not make any inspection fee without seeing the agent and property.
  </li>

  <li class="list-decimal">
    Ensure you meet the Agent in an open location.
  </li>

  
  <li class="list-decimal">
  The Agent does not represent Agenoresources and Agenoresources are not liable for any monetary transaction between you and the Agent.

  </li>



</ul>
  </div>


  <div class="border-b border-gray-500/20 pb-10">
    <h1 class="text-xl md:text-2xl font-bold text-indigo-950 mb-5">Description</h1>
    <p class="flex gap-x-3 text-indigo-950 text-xl">
   {{ $asset->mineral_details }}
    </p>
    </div>

</div>


<div class="md:col-span-4 flex flex-col gap-y-8">



<div class="flex flex-col gap-x-4 px-3 md:mt-16 shadow-md  rounded-lg p-2">
  <div class="flex gap-x-4">
  <div class="flex flex-col  gap-y-2 justify-center items-center">
  <div class="size-14 bg-red-600"></div>
  <img src="{{ asset('images/agent-icon.svg') }}"  class="w-20" alt="">
  </div>
  <div class="flex flex-col">
  <h1 class="font-semibold text-slate-800">
  {{ $asset->user->firstname }} {{ $asset->user->lastname }}
  </h1>

  <p class="text-blue-500 font-semibold text-sm">View more assets from this <a href="#" class="underline">agent</a></p>
  </div>
  </div>
  <div class="flex md:flex-col gap-x-2 gap-y-2 mt-6 w-full">
  <a class="w-6/12 md:w-full text-xs sm:text-sm text-center block rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2.5 font-semibold" href="#">
  {{ $asset->user->phone_number }}
  </a>
  <a class="w-6/12 md:w-full text-xs sm:text-sm text-center inline-flex items-center justify-center gap-x-2 rounded-md bg-green-500 hover:bg-green-600 text-white py-2.5 font-semibold" href="#">

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="size-6 fill-white">
  <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z" />
  </svg>
  Whatsapp
  </a>
  </div>
</div>

<div class="flex flex-col gap-x-4 px-3 shadow-md  rounded-lg p-2 w-full">
  <form action="#" method="post" class="w-full px-2 flex flex-col gap-y-3.5">

<input type="text" name="name" class=" w-full flex py-3 rounded-md border shadow-sm border-gray-200 ring-0 focus:outline-none focus:ring-0 outline-none" placeholder="Name">

<input type="text" name="phone_number" class=" w-full flex py-3 rounded-md border shadow-sm border-gray-200 ring-0 focus:outline-none focus:ring-0 outline-none" placeholder="Phone number">

<input type="email" name="email" 
class="w-full flex py-3 rounded-md border shadow-sm border-gray-200 ring-0 focus:outline-none focus:ring-0 outline-none" placeholder="Email">

<textarea name="message" id="additional_message" cols="30" rows="5" 
class="w-full flex py-3 rounded-md border shadow-sm border-gray-200 ring-0 focus:outline-none focus:ring-0 outline-none" placeholder="Additional message">
Hello {{ $asset->user->firstname }} {{ $asset->user->lastname }}, I will like to check your assets, for your price &#8358;{{ $asset->price }}
</textarea>


<div class="flex gap-x-2 gap-y-2 mt-6 w-full">
  <a class="w-6/12 md:w-full text-xs sm:text-sm text-center block rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2.5 font-semibold" href="#">
Enquiry
  </a>
  <a class="w-6/12 md:w-full text-xs sm:text-sm text-center inline-flex items-center justify-center gap-x-2 rounded-md bg-green-500 hover:bg-green-600 text-white py-2.5 font-semibold" href="#">

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="size-6 fill-white">
  <path d="M25,2C12.318,2,2,12.318,2,25c0,3.96,1.023,7.854,2.963,11.29L2.037,46.73c-0.096,0.343-0.003,0.711,0.245,0.966 C2.473,47.893,2.733,48,3,48c0.08,0,0.161-0.01,0.24-0.029l10.896-2.699C17.463,47.058,21.21,48,25,48c12.682,0,23-10.318,23-23 S37.682,2,25,2z M36.57,33.116c-0.492,1.362-2.852,2.605-3.986,2.772c-1.018,0.149-2.306,0.213-3.72-0.231 c-0.857-0.27-1.957-0.628-3.366-1.229c-5.923-2.526-9.791-8.415-10.087-8.804C15.116,25.235,13,22.463,13,19.594 s1.525-4.28,2.067-4.864c0.542-0.584,1.181-0.73,1.575-0.73s0.787,0.005,1.132,0.021c0.363,0.018,0.85-0.137,1.329,1.001 c0.492,1.168,1.673,4.037,1.819,4.33c0.148,0.292,0.246,0.633,0.05,1.022c-0.196,0.389-0.294,0.632-0.59,0.973 s-0.62,0.76-0.886,1.022c-0.296,0.291-0.603,0.606-0.259,1.19c0.344,0.584,1.529,2.493,3.285,4.039 c2.255,1.986,4.158,2.602,4.748,2.894c0.59,0.292,0.935,0.243,1.279-0.146c0.344-0.39,1.476-1.703,1.869-2.286 s0.787-0.487,1.329-0.292c0.542,0.194,3.445,1.604,4.035,1.896c0.59,0.292,0.984,0.438,1.132,0.681 C37.062,30.587,37.062,31.755,36.57,33.116z" />
  </svg>
  Whatsapp
  </a>
  </div>
</form>

</div>

<div>


</div>

</div>
 
</div>
      <!-- Avatar Media -->
    {{--     <div class="flex justify-between items-center mb-6">
        <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
          <div class="flex-shrink-0">
            <img class="size-12 rounded-full" 
            src="{{ $asset->user->profile_pics }}"            
            alt="Image Description">
       
        </div>
  
          <div class="grow">
            <div class="flex justify-between items-center gap-x-2">
              <div>
                <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                  <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                    <span class="font-semibold text-gray-800 dark:text-neutral-200">
                      {{ $asset->user->firstname }}
                      {{ $asset->user->lastname }}
                    </span>
  
                    <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
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
                    </div>
                  </div>
                </div>
  
                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                  <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                    Date posted:
                  </li>
                  <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                    {{ $asset->date_added }}
                    
                  </li>
                </ul>
              </div>
  
              <div>
                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-ageno dark:border-neutral-700 dark:text-white dark:hover:bg-ageno-2">
                    <svg class="size-4 fill-black dark:fill-neutral-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <path d="M24 4C18.494917 4 14 8.494921 14 14C14 19.505079 18.494917 24 24 24C29.505083 24 34 19.505079 34 14C34 8.494921 29.505083 4 24 4 z M 24 7C27.883764 7 31 10.116238 31 14C31 17.883762 27.883764 21 24 21C20.116236 21 17 17.883762 17 14C17 10.116238 20.116236 7 24 7 z M 11.978516 28C9.7987044 28 8 29.798705 8 31.978516L8 33.5C8 37.104167 10.27927 39.892227 13.306641 41.5625C16.334011 43.232773 20.168103 44 24 44C27.831897 44 31.665989 43.232773 34.693359 41.5625C37.274641 40.138345 39.217335 37.862616 39.761719 35L40.001953 35L40.001953 31.978516C40.001953 29.798705 38.201295 28 36.021484 28L11.978516 28 z M 11.978516 31L36.021484 31C36.579674 31 37.001953 31.420326 37.001953 31.978516L37.001953 32L37 32L37 33.5C37 35.895833 35.65427 37.607773 33.244141 38.9375C30.834011 40.267227 27.418103 41 24 41C20.581897 41 17.165989 40.267227 14.755859 38.9375C12.34573 37.607773 11 35.895833 11 33.5L11 31.978516C11 31.420326 11.420326 31 11.978516 31 z"/>
                      </svg>
                  {{ $asset->user->account_type }}
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
  
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
    </div>
     --}}
  </div>
  
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
  
        <div class="hs-dropdown relative inline-flex">
          <button type="button" id="blog-article-share-dropdown" class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" x2="12" y1="2" y2="15"/></svg>
            Buy
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

      </div>
    </div>
  </div>
  <!-- End Sticky Share Group -->




  @endsection