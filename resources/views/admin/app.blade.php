<!DOCTYPE html>
<html lang="en"
x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" :class="{ 'dark': darkMode }">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Agenoresource Admin</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
@yield('admin-style')
</head>
<body class="dark:bg-neutral-900" x-cloak
x-data="{ sidebarOpen: false , 
isActive(route){
return window.location.pathname === route;
}
}"
@click.outside="sidebarOpen = false">
<div class="flex flex-col">
{{-- HEADER --}}
<header class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full  
bg-white border-b text-sm py-2.5 sm:py-4 lg:ps-64 dark:bg-neutral-800 dark:border-neutral-700">
<nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6" aria-label="Global">
<div class="me-5 lg:me-0 lg:hidden">
<a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/admin/index.html" aria-label="Preline">
<x-application-logo class="size-14"/>
</a>
</div>

<div class="w-full flex items-center justify-end ms-auto sm:justify-between sm:gap-x-3 sm:order-3">
<div class="sm:hidden">
<button type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
</button>
</div>

<div class="hidden sm:block">
<div class="relative min-w-72 md:min-w-80" x-data="searchComponent()">
<div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-4">
<svg class="flex-shrink-0 size-4 text-gray-400 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
</div>

<input type="text" 
class="py-2 px-4 ps-11 block w-full 
border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 
disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 
dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="search either user uuid or email"

x-model="query" 
@input="filterUsers" @keydown.arrow-down="highlightNext"
@keydown.arrow-up="highlightPrev">
<div class="absolute bg-white dark:bg-neutral-800 dark:border-neutral-700
dark:text-white p-2 shadow-md w-full max-h-80 z-[2000] 
overflow-y-auto border-none outline-none rounded-md mt-1" 
x-show="filteredUsers.length > 0" x-cloak>
<ul role="listbox" aria-activedescendant="" class="py-4 space-y-2">
<template x-for="(user, index) in filteredUsers" :key="user.id">
<li :class="{'bg-ageno text-white': index === highlightedIndex}" 
role="option" tabindex="-1"
class="px-4 py-2 hover:bg-ageno hover:text-white rounded-md 
cursor-pointer text-left  border-b border-gray-200 dark:border-neutral-600 
last:border-b-0" 
@click="selectUser(user)" @mouseover="highlightIndex(index)">
<span x-text="user.email"></span>:  <span x-text="user.uuid"></span>
</li>
</template>
</ul>
</div>


</div>
</div>

<div class="flex flex-row items-center justify-end gap-2" x-data="notificationWidget()">
<button @click="isVisible = !isVisible"
type="button" class="relative w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
<span class="flex absolute top-2 z-[10] -mt-1.5 -me-1.5">
    @if (Auth::guard('admin')->user()->unreadNotifications->count() > 1)
    <span class="relative size-[14px] px-1 inline-flex items-center text-[10px] rounded-full bg-red-500 text-white">
        {{Auth::guard('admin')->user()->unreadNotifications->count()}}
    </span>     
    @endif
{{-- <span class="relative size-[14px] px-1 inline-flex items-center text-[10px] rounded-full bg-red-500 text-white">
    {{Auth::guard('admin')->user()->unreadNotifications->count()}}
</span> --}}
</span>
</button>


{{-- Notification Widget 
sm:max-w-md 
--}}
<div  @click.outside="isVisible = false" x-show="isVisible" @keydown.window.escape="close()" 
    class="absolute w-[300px] lg:max-w-md z-[1000] mx-0 top-16 lg:top-16 bg-white dark:bg-neutral-800 border 
    dark:border-neutral-600/50
     text-gray-500 dark:text-neutral-500 dark:bg-akauntme-dark rounded-lg right-[4rem] lg:right-[4.2rem] shadow-sm"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-x-10"
    x-transition:enter-end="opacity-100 translate-x-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-x-0"
    x-transition:leave-end="opacity-0 translate-x-10"
>

<div class="w-full lg:min-w-[270px]">
    <!-- Tabs -->
    <div class="w-full">
        <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700/50 px-4 py-3">
            <div class="flex">
                <template x-for="(tab, index) in tabs" :key="index">
                    <button class="px-2 py-1 bg-gray-500 text-white dark:bg-neutral-700 flex justify-center relative -mb-px mx-1 text-sm font-normal rounded-lg">
                     All notification
                   </button>
                </template>
            </div>

            <button class="flex border-none ring-0 outline-none focus:outline-none hover:outline-none appearance-none justify-center items-center rounded-full size-9 shadow-sm text-neutral-500 dark:hover:text-gray-200 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-neutral-600">
                <svg class="size-4 stroke-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </button>
        </div>

        <!-- Tab Content -->
        <div class="overflow-y-auto h-[40vh] lg:h-[40vh] custom-scrollbar">

        <div class="flex flex-col gap-y-2 justify-between px-2 mt-5">
      
    @if ($notifications->isEmpty())
    <div class="flex justify-center items-center flex-col h-full p-6 text-center">
        <svg class="w-[12rem] mb-4 mx-auto block " width="178" height="90" viewBox="0 0 178 90" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="27" y="50.5" width="124" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
            <rect x="27" y="50.5" width="124" height="39" rx="7.5" stroke="currentColor" class="stroke-[#f9fafb] dark:stroke-neutral-700/10"></rect>
            <rect x="34.5" y="58" width="24" height="24" rx="4" fill="currentColor" class="fill-[#f9fafb] dark:fill-neutral-700/30"></rect>
            <rect x="66.5" y="61" width="60" height="6" rx="3" fill="currentColor" class="fill-[#f9fafb] dark:fill-neutral-700/30"></rect>
            <rect x="66.5" y="73" width="77" height="6" rx="3" fill="currentColor" class="fill-[#f9fafb] dark:fill-neutral-700/30"></rect>
            <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
            <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" stroke="currentColor" class="stroke-[#f3f4f6] dark:stroke-neutral-700/30"></rect>
            <rect x="27" y="36" width="24" height="24" rx="4" fill="currentColor" class="fill-[#f3f4f6] dark:fill-neutral-700/70"></rect>
            <rect x="59" y="39" width="60" height="6" rx="3" fill="currentColor" class="fill-[#f3f4f6] dark:fill-neutral-700/70"></rect>
            <rect x="59" y="51" width="92" height="6" rx="3" fill="currentColor" class="fill-[#f3f4f6] dark:fill-neutral-700/70"></rect>
            <g filter="url(#filter14)">
              <rect x="12" y="6" width="154" height="40" rx="8" fill="currentColor" class="fill-white dark:fill-neutral-800" shape-rendering="crispEdges"></rect>
              <rect x="12.5" y="6.5" width="153" height="39" rx="7.5" stroke="currentColor" class="stroke-[#f3f4f6] dark:stroke-neutral-700/60" shape-rendering="crispEdges"></rect>
              <rect x="20" y="14" width="24" height="24" rx="4" fill="currentColor" class="fill-[#e5e7eb] dark:fill-neutral-700 "></rect>
              <rect x="52" y="17" width="60" height="6" rx="3" fill="currentColor" class="fill-[#e5e7eb] dark:fill-neutral-700"></rect>
              <rect x="52" y="29" width="106" height="6" rx="3" fill="currentColor" class="fill-[#e5e7eb] dark:fill-neutral-700"></rect>
            </g>
            <defs>
              <filter id="filter14" x="0" y="0" width="178" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                <feOffset dy="6"></feOffset>
                <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                <feComposite in2="hardAlpha" operator="out"></feComposite>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0"></feColorMatrix>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1187_14810"></feBlend>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1187_14810" result="shape"></feBlend>
              </filter>
            </defs>
          </svg>

          <div class="max-w-[24rem] mx-auto">
            <p class="mt-2 font-[500] text-gray-500 dark:text-neutral-200">No Notification</p>
            <p class="mb-5 leading-5 text-[0.875rem] text-gray-500 dark:text-neutral-200">
                No Notification here yet. you will see notification when there's an update.
            </p>
          </div>
    </div>
    @else

    @foreach ($notifications as $notification)
    <div class="flex flex-col tems-start gap-x-5 rounded-md text-gray-500 dark:text-gray-100 dark:border-gray-700 shadow-sm px-2 py-4 hover:cursor-pointer 
    bg-white hover:bg-gray-100 dark:bg-neutral-600 dark:hover:bg-neutral-700 *:hover:text-gray-600  dark:*:hover:text-gray-200">
    <div class="inline-flex items-start gap-x-5">
    <a href="{{ route('admin.user',$notification->data['user_uuid']) }}"
    class="flex flex-col justify-between dark:text-gray-300 hover:text-ageno dark:hover:text-ageno">
        <h3 class="font-light text-sm">
            {{ $notification->created_at->diffForHumans() }}
        </h3>
        <h1 class="font-semibold text-base" >
            {{ $notification->data['user_firstname'] }}&nbsp;{{ $notification->data['user_lastname'] }}
        </h1>
        <p class="text-sm">
            {{ $notification->data['message'] }}
        </p>
    </a>

    
    <div class="flex items-center gap-x-2">
        <div class="relative group flex items-center">
        
            
                <span 
                class="absolute -left-[100px] ml-2 opacity-0 group-hover:opacity-100 bg-gray-700 dark:bg-neutral-800 text-white text-xs rounded py-1 px-2">
                    Mark as read    
                </span> 
            <form action="{{ route('admin.notifications.read', $notification->id) }}" method="POST">
                @csrf
            <button type="submit"  class="border-none outline-none focus:ring-0 focus:border-none focus:outline-none 
             hover:bg-gray-200/50 dark:hover:bg-neutral-800 rounded-full size-10 flex justify-center items-center">
                <svg class="size-4 dark:stroke-gray-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
            </button>
        </form>
    
        </div>

        {{-- <div class="relative group flex items-center">
        
            
            <span 
            class="absolute -left-[20px] -bottom-[26px] ml-2 opacity-0 group-hover:opacity-100 bg-gray-700 dark:bg-neutral-800 text-white text-xs rounded py-1 px-2">
                Delete    
            </span> 
        <form action="{{ route('admin.notifications.delete', $notification->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit"  class="border-none outline-none focus:ring-0 focus:border-none focus:outline-none 
         hover:bg-gray-200/50 dark:hover:bg-neutral-800 rounded-full size-10 flex justify-center items-center">
              <svg class="size-4 fill-rose-500 dark:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                <path d="M20.5 4 A 1.50015 1.50015 0 0 0 19.066406 6L14.640625 6C12.796625 6 11.086453 6.9162188 10.064453 8.4492188L7.6972656 12L7.5 12 A 1.50015 1.50015 0 1 0 7.5 15L40.5 15 A 1.50015 1.50015 0 1 0 40.5 12L40.302734 12L37.935547 8.4492188C36.913547 6.9162187 35.202375 6 33.359375 6L28.933594 6 A 1.50015 1.50015 0 0 0 27.5 4L20.5 4 z M 8.9726562 18L11.125 38.085938C11.425 40.887937 13.77575 43 16.59375 43L31.40625 43C34.22325 43 36.574 40.887938 36.875 38.085938L39.027344 18L8.9726562 18 z" />
              </svg>
        </button>
    </form>

    </div> --}}
    </div>

</div>
    </div>

    @endforeach

    @endif
                   
        </div>
        </div>
        <!-- Footer -->
        <footer class="border-t w-full rounded-b-lg hover:text-akauntme flex justify-center items-center shadow-sm border-gray-200 dark:border-gray-700 px-4 py-3">
            <button class="border-gray-200 px-4 py-1 hover:bg-white dark:hover:bg-akauntme-dark-2 dark:text-gray-500 rounded-full">
                Mark all as read
            </button>
        </footer>
    </div>
</div>
</div>

{{-- End of Notification Widget --}}




<div class="hs-dropdown [--placement:bottom-right] relative inline-flex" 
x-data="{ open: false }" @click.outside="open = false"
>
<button
@click="open = !open"
x-cloak
id="hs-dropdown-with-header" type="button" class="size-10 flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
<img class="size-10 object-fit rounded-full ring-2 ring-white dark:ring-neutral-800" 
src="{{ asset('images/user.jpg') }}"
/>
</button>

<div 
x-cloak
x-show="open" 
x-bind:class="open ? 'block opacity-100' : 'hidden opacity-0'" 
x-bind:style="open ? 'position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-23.2px, 64px, 0px);' : ''"

class="z-30 transition-[opacity,margin] duration min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-900 dark:border dark:border-neutral-700">
<div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-neutral-800">
<p class="text-sm text-gray-500 dark:text-neutral-400">Signed in as <b>Admin:</b></p>
<p class="text-sm font-medium text-gray-800 dark:text-neutral-300">
{{ 

Auth::guard('admin')->user()->email
}}
</p>
</div>
<div class="mt-2 py-2 first:pt-0 last:pb-0">
<a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300" href="{{ route('admin.profile')}}">
<svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="WAgXaM_UXsUB6GpGcg7bda" x1="15.002" x2="33.584" y1="6.494" y2="42.647" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#5961c3"/><stop offset="1" stop-color="#3a41ac"/></linearGradient><path fill="url(#WAgXaM_UXsUB6GpGcg7bda)" d="M44,24c0,11.045-8.955,20-20,20S4,35.045,4,24S12.955,4,24,4S44,12.955,44,24z"/><radialGradient id="WAgXaM_UXsUB6GpGcg7bdb" cx="24" cy="20" r="9.5" gradientUnits="userSpaceOnUse"><stop offset="0"/><stop offset="1" stop-opacity="0"/></radialGradient><circle cx="24" cy="20" r="9.5" fill="url(#WAgXaM_UXsUB6GpGcg7bdb)"/><radialGradient id="WAgXaM_UXsUB6GpGcg7bdc" cx="23.861" cy="43.918" r="14.991" gradientUnits="userSpaceOnUse"><stop offset=".177"/><stop offset="1" stop-opacity="0"/></radialGradient><path fill="url(#WAgXaM_UXsUB6GpGcg7bdc)" d="M24,44c5.396,0,10.284-2.148,13.882-5.622C35.601,32.755,30.078,29,24,29s-11.601,3.755-13.882,9.378C13.716,41.852,18.604,44,24,44z"/><linearGradient id="WAgXaM_UXsUB6GpGcg7bdd" x1="21.13" x2="26.832" y1="11.924" y2="25.98" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#a6acfc"/><stop offset=".287" stop-color="#a0a7fa"/><stop offset=".651" stop-color="#9198f4"/><stop offset="1" stop-color="#7b83eb"/></linearGradient><circle cx="24" cy="19" r="8" fill="url(#WAgXaM_UXsUB6GpGcg7bdd)"/><linearGradient id="WAgXaM_UXsUB6GpGcg7bde" x1="21.686" x2="25.267" y1="30.136" y2="43.993" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#a6acfc"/><stop offset=".287" stop-color="#a0a7fa"/><stop offset=".651" stop-color="#9198f4"/><stop offset="1" stop-color="#7b83eb"/></linearGradient><path fill="url(#WAgXaM_UXsUB6GpGcg7bde)" d="M24,44c5.015,0,9.587-1.859,13.098-4.909C35.107,33.784,30.002,30,24,30s-11.107,3.784-13.098,9.091C14.413,42.141,18.985,44,24,44z"/></svg>

Profile
</a>

<div class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300">
<button @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)" class="size-6 flex justify-center items-center rounded-full bg-slate-900 dark:bg-slate-300">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" x-show="!darkMode"  class="size-4 fill-white transition-transform transform" >
<path d="M35.476562 2.9785156 A 1.50015 1.50015 0 0 0 34 4.5L34 6L32.5 6 A 1.50015 1.50015 0 1 0 32.5 9L34 9L34 10.5 A 1.50015 1.50015 0 1 0 37 10.5L37 9L38.5 9 A 1.50015 1.50015 0 1 0 38.5 6L37 6L37 4.5 A 1.50015 1.50015 0 0 0 35.476562 2.9785156 z M 22.5 6C11.748317 6 3 14.748317 3 25.5C3 36.251683 11.748317 45 22.5 45C29.773052 45 36.113937 40.99287 39.458984 35.078125 A 1.50015 1.50015 0 0 0 38.335938 32.851562C29.691387 31.784698 23 24.447284 23 15.5C23 12.879203 23.591547 10.406884 24.626953 8.1679688 A 1.50015 1.50015 0 0 0 23.330078 6.0410156C23.142065 6.0329053 22.866527 6 22.5 6 z M 21.146484 9.1367188C20.47673 11.151905 20 13.256895 20 15.5C20 25.095117 26.648438 33.08569 35.570312 35.304688C32.566088 39.314628 27.905624 42 22.5 42C13.369683 42 6 34.630317 6 25.5C6 16.833595 12.663649 9.83383 21.146484 9.1367188 z M 40.476562 15.978516 A 1.50015 1.50015 0 0 0 39 17.5L39 19L37.5 19 A 1.50015 1.50015 0 1 0 37.5 22L39 22L39 23.5 A 1.50015 1.50015 0 1 0 42 23.5L42 22L43.5 22 A 1.50015 1.50015 0 1 0 43.5 19L42 19L42 17.5 A 1.50015 1.50015 0 0 0 40.476562 15.978516 z" />
</svg>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" x-show="darkMode"  class="size-4 fill-black transition-transform transform" >
<path d="M23.976562 3.9785156 A 1.50015 1.50015 0 0 0 22.5 5.5L22.5 8.5 A 1.50015 1.50015 0 1 0 25.5 8.5L25.5 5.5 A 1.50015 1.50015 0 0 0 23.976562 3.9785156 z M 10.902344 9.4042969 A 1.50015 1.50015 0 0 0 9.8574219 11.980469L11.978516 14.101562 A 1.5012202 1.5012202 0 0 0 14.101562 11.978516L11.980469 9.8574219 A 1.50015 1.50015 0 0 0 10.902344 9.4042969 z M 37.050781 9.4042969 A 1.50015 1.50015 0 0 0 36.019531 9.8574219L33.898438 11.978516 A 1.5012202 1.5012202 0 0 0 36.021484 14.101562L38.142578 11.980469 A 1.50015 1.50015 0 0 0 37.050781 9.4042969 z M 24 13C17.942632 13 13 17.942636 13 24C13 30.057364 17.942632 35 24 35C30.057368 35 35 30.057364 35 24C35 17.942636 30.057368 13 24 13 z M 24 16C28.436049 16 32 19.563954 32 24C32 28.436046 28.436049 32 24 32C19.563951 32 16 28.436046 16 24C16 19.563954 19.563951 16 24 16 z M 5.5 22.5 A 1.50015 1.50015 0 1 0 5.5 25.5L8.5 25.5 A 1.50015 1.50015 0 1 0 8.5 22.5L5.5 22.5 z M 39.5 22.5 A 1.50015 1.50015 0 1 0 39.5 25.5L42.5 25.5 A 1.50015 1.50015 0 1 0 42.5 22.5L39.5 22.5 z M 13.009766 33.445312 A 1.50015 1.50015 0 0 0 11.978516 33.898438L9.8574219 36.019531 A 1.501221 1.501221 0 1 0 11.980469 38.142578L14.101562 36.021484 A 1.50015 1.50015 0 0 0 13.009766 33.445312 z M 34.943359 33.445312 A 1.50015 1.50015 0 0 0 33.898438 36.021484L36.019531 38.142578 A 1.5012209 1.5012209 0 1 0 38.142578 36.019531L36.021484 33.898438 A 1.50015 1.50015 0 0 0 34.943359 33.445312 z M 23.976562 37.978516 A 1.50015 1.50015 0 0 0 22.5 39.5L22.5 42.5 A 1.50015 1.50015 0 1 0 25.5 42.5L25.5 39.5 A 1.50015 1.50015 0 0 0 23.976562 37.978516 z" />
</svg>

</button>
<span x-show="!darkMode">Dark theme</span>
<span x-show="darkMode">Light theme</span>
</div>
<form method="POST" action="{{ route('admin.logout') }}">
@csrf
<a href="{{route('admin.logout')}}"
onclick="event.preventDefault();
this.closest('form').submit();" 

class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300" href="#">
<svg class="flex-shrink-0 size-4 fill-gray-800 dark:fill-neutral-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
<path d="M24 4C17.651052 4 11.984367 6.9768903 8.3242188 11.599609 A 1.50015 1.50015 0 1 0 10.675781 13.462891C13.791633 9.5276097 18.586948 7 24 7C33.406292 7 41 14.593708 41 24C41 33.406292 33.406292 41 24 41C18.586948 41 13.791633 38.47239 10.675781 34.537109 A 1.50015 1.50015 0 1 0 8.3242188 36.400391C11.984367 41.02311 17.651052 44 24 44C35.027708 44 44 35.027708 44 24C44 12.972292 35.027708 4 24 4 z M 11.470703 16.486328 A 1.50015 1.50015 0 0 0 10.439453 16.939453L4.4394531 22.939453 A 1.50015 1.50015 0 0 0 4.4394531 25.060547L10.439453 31.060547 A 1.50015 1.50015 0 1 0 12.560547 28.939453L9.1191406 25.498047L29.501953 25.480469 A 1.50015 1.50015 0 1 0 29.498047 22.480469L9.1230469 22.498047L12.560547 19.060547 A 1.50015 1.50015 0 0 0 11.470703 16.486328 z"/>
</svg>
Logout
</a>
</form>

</div>
</div>
</div>
</div>
</div>
</nav>
</header>
{{-- END OF HEADER --}}


{{--  Breadcrumb  --}}
<div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
<div class="flex justify-between items-center py-2">
<!-- Breadcrumb -->
<ol class="ms-3 flex items-center whitespace-nowrap">
<a href="{{ route('admin.dashboard') }}" class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
Admin
<svg class="flex-shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
</svg>
</a>
<a x-cloak x-bind:class="isActive('/admin/dashboard') ? 'block' : 'hidden' " class=" text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
Dashboard
</a>

<a x-cloak x-bind:class="isActive('/admin/user/all') ? 'block' : 'hidden' " class=" text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
All users
</a>


<a x-cloak x-bind:class="isActive('/admin/user/active') ? 'block' : 'hidden' " class=" text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
Active users
</a>


<a x-cloak x-bind:class="isActive('/admin/user/unactive') ? 'block' : 'hidden' " class=" text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
Unactive users
</a>

<a x-cloak x-bind:class="isActive('/admin/user/activated') ? 'block' : 'hidden' " class=" text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
Activated users
</a>

<a x-cloak x-bind:class="isActive('/admin/user/blocked') ? 'block' : 'hidden' " class=" text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
Blocked users
</a>


</ol>
<!-- End Breadcrumb -->

<!-- Sidebar -->
<button type="button" 
@click="sidebarOpen = !sidebarOpen"
class="py-2 px-3 flex justify-center items-center gap-x-1.5 text-xs rounded-lg border border-gray-200 text-gray-500 hover:text-gray-600 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-200" data-hs-overlay="#application-sidebar" aria-controls="application-sidebar" aria-label="Sidebar">
<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8L21 12L17 16M3 12H13M3 6H13M3 18H13"/></svg>
<span class="sr-only">Sidebar</span>
</button>
<!-- End Sidebar -->
</div>
</div>
{{--  End Breadcrumb  --}}

<x-admin-sidebar/>


<div class="w-full lg:ps-64">
<div class="p-4 sm:p-6 space-y-4 sm:space-y-6 dark:bg-neutral-900">
@yield('admin-content')
</div>
</div>
</div>
<script>
function darkMode() {
return {
dark: localStorage.getItem('dark') === 'true',
toggle() {
this.dark = !this.dark;
localStorage.setItem('dark', this.dark);
}
}
}
</script>


<script>
function searchComponent() {
return {
query: '',
users: @json($allUsers),
path: window.location.pathname.startsWith('/admin/user'),
filteredUsers: [],
highlightedIndex: -1,
filterUsers() {
if (this.query.length > 0) {
this.filteredUsers = this.users.filter(user => 
user.uuid.toLowerCase().includes(this.query.toLowerCase()) || 
user.email.toLowerCase().includes(this.query.toLowerCase())
);
} else {
this.filteredUsers = [];
}
this.highlightedIndex = -1;
},
highlightNext() {
if (this.highlightedIndex < this.filteredUsers.length - 1) {
this.highlightedIndex++;
this.query = this.filteredUsers[this.highlightedIndex].uuid;

}
},
highlightPrev() {
if (this.highlightedIndex > 0) {
this.highlightedIndex--;
this.query = this.filteredUsers[this.highlightedIndex].uuid;

}
},
highlightIndex(index) {
this.highlightedIndex = index;
this.query = this.filteredUsers[index].uuid;
this.query = this.filteredUsers[index].email;

},
selectHighlighted() {
if (this.highlightedIndex >= 0 && this.highlightedIndex < this.filteredUsers.length) {
this.selectUser(this.filteredUsers[this.highlightedIndex]);
}
},
selectUser(user) {
this.query = user.uuid;
this.filteredUsers = [];
if(this.path){
window.location.href = `${user.uuid}`;
}else{
window.location.href = `user/${user.uuid}`;
}
},
search() {
// Search functionality can be enhanced if needed
}
}
}

// Notification function Widget
function notificationWidget() {
return {
isVisible: false,
activeTab: 0,
tabs: [
    { title: 'All', content: `

    <div x-data="{ notifications: [{ name: 'Mark Okechukwu', time: '2 hours ago', message: 
    'A new stock was added by your staff Mark Okechukwu' }] }" class="flex flex-col justify-between px-2 mt-5">
    <template x-for="notification in notifications" :key="notification.name">

        <div class="flex items-start gap-x-5 rounded-md dark:border-gray-700 shadow-sm px-2 py-4 hover:cursor-pointer 
        hover:bg-white dark:hover:bg-akauntme-dark-2 *:hover:text-akauntme">
        <!-- <div class="rounded-full size-10 bg-white dark:bg-akauntme-dark-2 border dark:border-gray-600 shadow-sm"></div> -->
           
            <div class="flex flex-col justify-between dark:text-gray-300">
                <h3 class="font-light text-sm" x-text="notification.time"></h3>
                <h1 class="font-semibold text-base" x-text="notification.name"></h1>
                <p class="text-sm" x-text="notification.message"></p>
            </div>

            <div class="flex items-center gap-x-2">
                <!-- Tooltip for Mark as Read -->
                <div class="relative group">
                    <button class="border-none outline-none focus:ring-0 focus:border-none focus:outline-none rounded-xl">
                        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                    </button>
                    <span class="absolute left-full ml-2 opacity-0 group-hover:opacity-100 bg-gray-700 text-white text-xs rounded py-1 px-2">
                        Mark as read
                    </span>
                </div>

              
            </div>
        </div>
    </template>
</div>

    `
    }
],
close() {
    this.isVisible = false;
}
};
}

</script>
@yield('admin-script')
</body>
</html>