<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
<!-- Primary Navigation Menu -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" >
<div class="flex justify-between h-16">
<div class="flex">
<!-- Logo -->
<div class="shrink-0 flex items-center">
<a href="{{ route('home') }}">
<img src="{{asset('images/Logo.png')}}" alt="Ageno resource Logo" class="size-14">

</a>
</div>

<!-- Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
{{ __('Dashboard') }}
</x-nav-link>

@if (Auth::user()->user_type == 'seller')
<x-nav-link :href="route('post.assets')" :active="request()->routeIs('post.assets')">
{{ __('Post Assets') }}
</x-nav-link>
@else
<x-nav-link :href="route('assets.bought')" :active="request()->routeIs('post.assets')">
    {{ __('Assets bought') }}
    </x-nav-link>
@endif


{{-- <x-nav-link :href="route('user.plan')" :active="request()->routeIs('user.plan')">
{{ __('Choose plan') }}
</x-nav-link> --}}

<x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
{{ __('Profile') }}
</x-nav-link>

<x-nav-link :href="route('user.notification')" :active="request()->routeIs('user.notification')">
{{ __('Notification') }}
</x-nav-link> 
</div>
</div>

<!-- Settings Dropdown -->
<div class="hidden sm:flex sm:items-center sm:ms-6">
<x-dropdown align="right" width="48">
<x-slot name="trigger">
<button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
<div class="flex flex-col gap-y-2 justify-start items-start">
<div class="flex items-center">
{{ Auth::user()->firstname }}
{{ Auth::user()->lastname }}
<div class="ms-1">
<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
</svg>
</div>
</div>

<div class="text-xs">
    @if (Auth::user()->user_type === "seller")
<div class="flex items-center gap-x-1">
    <svg  class="size-4 fill-ageno" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
        <path d="M33.5 4h-13C18.019 4 16 6.019 16 8.5v9c0 2.481 2.019 4.5 4.5 4.5h13c2.481 0 4.5-2.019 4.5-4.5v-9C38 6.019 35.981 4 33.5 4zM29.5 12h-5c-.828 0-1.5-.671-1.5-1.5S23.672 9 24.5 9h5c.828 0 1.5.671 1.5 1.5S30.328 12 29.5 12zM43.368 22c-1.026 0-2.153.675-4.546 1.917-1.984 1.03-3.818 2.009-4.983 2.723C33.941 27.078 34 27.532 34 28c0 3.309-2.691 6-6 6h-7.5c-.828 0-1.5-.671-1.5-1.5s.672-1.5 1.5-1.5H28c1.654 0 3-1.346 3-3 0-.897-.404-1.695-1.03-2.245C29.259 25.285 28.415 25 27.5 25h-4.393H22.5c-.029 0-.056-.007-.085-.009-2.636-.042-3.902-.314-5.015-.558C16.389 24.21 15.433 24 13.827 24 6.495 24 2.31 33.001 2.135 33.384c-.226.496-.165 1.074.158 1.512l7 9.494c.285.387.734.604 1.204.604.095 0 .189-.009.284-.027.566-.107 1.023-.536 1.171-1.093C12.031 43.58 12.795 41 15.5 41c1.952 0 3.972.252 5.924.495C23.413 41.744 25.471 42 27.5 42c2.764 0 4.752-2.119 10.5-8 7.301-7.471 8-8.124 8-9.606C46 23.113 44.875 22 43.368 22z"/>
      </svg>
      <div class="text-ageno">Seller</div>
</div>
    @else

    <div class="flex items-center gap-x-1">
        <svg  class="size-4 fill-ageno" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
            <path d="M3.5 6 A 1.50015 1.50015 0 1 0 3.5 9L6.2558594 9C6.9837923 9 7.5905865 9.5029243 7.7285156 10.21875L8.0234375 11.765625C8.0242582 11.770197 8.0245268 11.774728 8.0253906 11.779297L11.251953 28.716797C11.834953 31.778797 14.521672 34 17.638672 34L36.363281 34C39.480281 34 42.164047 31.778797 42.748047 28.716797L45.974609 11.779297C46.056609 11.341297 45.94025 10.887969 45.65625 10.542969C45.37125 10.198969 44.947 10 44.5 10L29 10L29 21.878906L31.439453 19.439453C32.025453 18.853453 32.974547 18.853453 33.560547 19.439453C34.146547 20.024453 34.146547 20.975547 33.560547 21.560547L28.560547 26.560547C28.268547 26.853547 27.884 27 27.5 27C27.116 27 26.732453 26.853547 26.439453 26.560547L21.439453 21.560547C20.853453 20.975547 20.853453 20.024453 21.439453 19.439453C22.025453 18.853453 22.974547 18.853453 23.560547 19.439453L26 21.878906L26 10L10.740234 10L10.675781 9.6582031C10.272657 7.5455321 8.4069705 6 6.2558594 6L3.5 6 z M 26 10L29 10L29 8.5C29 7.671 28.328 7 27.5 7C26.672 7 26 7.671 26 8.5L26 10 z M 20 36 A 3 3 0 0 0 20 42 A 3 3 0 0 0 20 36 z M 34 36 A 3 3 0 0 0 34 42 A 3 3 0 0 0 34 36 z" />
          </svg>
          <div class="text-ageno">Buyer</div>
    </div>
@endif
</div>

</div>


</button>
</x-slot>

<x-slot name="content">

<div  class=" flex justify-between items-center px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800">
<p>
ID:&nbsp;<span x-text="textToCopy"></span>

</p>
<button class="hover:bg-gray-100 dark:hover:bg-gray-800 rounded-full size-7 flex justify-center items-center"
title="Copy your ID"
@click="navigator.clipboard.writeText(textToCopy).then(() => copied = true); 
setTimeout(() => copied = false, 2000)"
>
<svg class="size-5 fill-gray-500 dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
<path d="M24 4C12.972066 4 4 12.972074 4 24C4 35.027926 12.972066 44 24 44C35.027934 44 44 35.027926 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 24 13C20.704135 13 18 15.704135 18 19L18 19.5 A 1.50015 1.50015 0 1 0 21 19.5L21 19C21 17.325865 22.325865 16 24 16C25.674135 16 27 17.325865 27 19C27 21.340909 26.39136 21.634239 25.324219 22.472656C24.790648 22.891865 24.091764 23.375202 23.494141 24.189453C22.896517 25.003704 22.5 26.138742 22.5 27.5 A 1.50015 1.50015 0 1 0 25.5 27.5C25.5 26.646758 25.665983 26.300186 25.912109 25.964844C26.158236 25.629501 26.584352 25.296698 27.175781 24.832031C28.35864 23.902698 30 22.159091 30 19C30 15.704135 27.295865 13 24 13 z M 24 32 A 2 2 0 0 0 24 36 A 2 2 0 0 0 24 32 z" />
</svg>
</button>

</div>
<x-dropdown-link :href="route('profile.edit')">
{{ __('Profile') }}
</x-dropdown-link>




<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
@csrf

<x-dropdown-link :href="route('logout')"
onclick="event.preventDefault();
this.closest('form').submit();">
{{ __('Log Out') }}
</x-dropdown-link>
</form>
</x-slot>
</x-dropdown>

@if (auth()->user()->profile_pics)
<img src="{{ auth()->user()->profile_pics }}" alt="User Avatar" 
class="shadow-md border border-white relative group text-white size-[40px] 
flex justify-center items-center text-lg font-bold rounded-full object-cover">
@else
<x-user-avatar :fname="Auth::user()->firstname" :lname="Auth::user()->lastname"/>
@endif


</div>
<template x-if="true">
<div x-show="copied"  class="text-white rounded-md shadow-md bg-ageno-2 border-2 border-white px-1.5 py-1 ml-2 absolute right-5 top-10  lg:top-[20px] lg:right-[400px]">Copied!</div>
</template> 


<!-- Hamburger -->
<div class="-me-2 flex items-center gap-x-2 sm:hidden">
@if (auth()->user()->profile_pics)
<img src="{{ auth()->user()->profile_pics }}" alt="User Avatar" 
class="shadow-md border border-white relative group text-white size-[40px] 
flex justify-center items-center text-lg font-bold rounded-full">
@else
<x-user-avatar :fname="Auth::user()->firstname" :lname="Auth::user()->lastname"/>
@endif

<button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
<path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
<path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
</svg>
</button>
</div>


</div>
</div>

<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
<div class="pt-2 pb-3 space-y-1">
<x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
{{ __('Dashboard') }}
</x-responsive-nav-link>

@if (Auth::user()->user_type == 'seller')

<x-responsive-nav-link :href="route('post.assets')" :active="request()->routeIs('post.assets')">
{{ __('Post assets') }}
</x-responsive-nav-link>

@else
<x-responsive-nav-link :href="route('assets.bought')" :active="request()->routeIs('assets.bought')">
    {{ __('Assets bought') }}
    </x-responsive-nav-link>
@endif

{{-- <x-responsive-nav-link :href="route('user.plan')" :active="request()->routeIs('user.plan')">
{{ __('Choose plan') }}
</x-responsive-nav-link> --}}

<x-responsive-nav-link :href="route('user.notification')" :active="request()->routeIs('user.notification')">
{{ __('Notification') }}
</x-responsive-nav-link>
</div>

<!-- Responsive Settings Options -->
<div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
<div class="px-4">
<div class="font-medium text-base text-gray-800 dark:text-gray-200">
{{ Auth::user()->name }}
{{-- {{ Auth::user()->lastname }} --}}

</div>
<div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
</div>

<div class="mt-3 space-y-1">

<div class="flex justify-start items-center gap-x-10 px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800">
<span>
ID: {{ Auth::user()->uuid }}

</span>
<button class="flex items-center gap-x-1 hover:bg-gray-100 dark:hover:bg-gray-900 px-2 py-1 rounded-md" 
@click="navigator.clipboard.writeText(textToCopy).then(() => copied = true); 
setTimeout(() => copied = false, 2000)"
title="Copy your ID"
>
Copy

<div class=" rounded-full size-7 flex justify-center items-center">
<svg class="size-5 fill-gray-500 dark:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
<path d="M24 4C12.972066 4 4 12.972074 4 24C4 35.027926 12.972066 44 24 44C35.027934 44 44 35.027926 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 24 13C20.704135 13 18 15.704135 18 19L18 19.5 A 1.50015 1.50015 0 1 0 21 19.5L21 19C21 17.325865 22.325865 16 24 16C25.674135 16 27 17.325865 27 19C27 21.340909 26.39136 21.634239 25.324219 22.472656C24.790648 22.891865 24.091764 23.375202 23.494141 24.189453C22.896517 25.003704 22.5 26.138742 22.5 27.5 A 1.50015 1.50015 0 1 0 25.5 27.5C25.5 26.646758 25.665983 26.300186 25.912109 25.964844C26.158236 25.629501 26.584352 25.296698 27.175781 24.832031C28.35864 23.902698 30 22.159091 30 19C30 15.704135 27.295865 13 24 13 z M 24 32 A 2 2 0 0 0 24 36 A 2 2 0 0 0 24 32 z" />
</svg>
</div>
</button>


</div>

<x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
{{ __('Profile') }}
</x-responsive-nav-link>

<!-- Authentication -->
<form method="POST" action="{{ route('logout') }}">
@csrf

<x-responsive-nav-link :href="route('logout')"
onclick="event.preventDefault();
this.closest('form').submit();">
{{ __('Log Out') }}
</x-responsive-nav-link>
</form>
</div>
</div>
</div>
</nav>
