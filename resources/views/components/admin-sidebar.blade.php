  <!-- Sidebar -->
  <div 
  x-bind:class=" sidebarOpen ? 'block translate-x-0' : 'hidden lg:block'" 
  
  class="
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-neutral-900 dark:border-neutral-700
   ">
    <div class="px-8 pt-4">
      <!-- Logo -->
      <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" 
      href="{{ route('admin.dashboard') }}" aria-label="Agenoresource">
        <x-application-logo  class="size-14"/>
      </a>
      <!-- End Logo -->
    </div>

    <nav class="p-6 w-full flex flex-col flex-wrap">
      <ul class="space-y-1.5" x-data="{
        isActive(route){
        return window.location.pathname === route;
    }}
    ">
        <li>
          <a class="flex items-center gap-x-3 py-3 px-2.5  text-sm rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-800 dark:text-white" href="{{ route('admin.dashboard') }}"
  x-bind:class="isActive('/admin/dashboard') ? 'text-blue-600 bg-gray-100 dark:bg-neutral-800' : 'text-neutral-700'"

            
            >
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>
                Dashboard

            </span>
          </a>
        </li>
  
<li x-data="{userDropdown: false}">
<button type="button" x-on:click="userDropdown = !userDropdown" 
x-bind:class="isActive('/admin/user/active') ? 'bg-gray-100 dark:bg-neutral-800 text-blue-600' : ''"

class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 dark:text-white text-sm text-neutral-700 rounded-lg dark:hover:bg-neutral-800 dark:hover:text-neutral-300">
<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
Users

<svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>

<svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
</button>

<div class="w-full overflow-hidden transition-[height] duration-300" 
x-cloak
x-bind:class="userDropdown ? 'block' : 'hidden'" 
>
<ul class="ps-3 pt-2 space-y-1">
<li class="hs-accordion">

  <a x-bind:class="isActive('/admin/user/all') ? 'text-blue-600 bg-gray-100 dark:bg-neutral-800 dark:text-white' : 'text-neutral-700'" href="{{ route('admin.all.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm  rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-800 dark:text-gray-200">
    All users
    <a>
    </li>

<a x-bind:class="isActive('/admin/user/active') ? 'text-blue-600 bg-gray-100 dark:bg-neutral-800 dark:text-white' : 'text-neutral-700'" href="{{ route('admin.active.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm  rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-800 dark:text-gray-200">
Active users
<a>
</li>
<li class="hs-accordion" id="users-accordion-sub-2">
<a x-bind:class="isActive('/admin/user/unactive') ? 'text-blue-600 bg-gray-100 dark:bg-neutral-800 dark:text-white' : 'text-neutral-700'" href="{{ route('admin.unactive.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-800 dark:text-gray-200">
Unactive users
</a>
</li>
</ul>
</div>
</li>


<li x-data="{userDropdown: false}">
  <button type="button" x-on:click="userDropdown = !userDropdown"
  
  class=" w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-neutral-700 rounded-lg hover:bg-gray-100
    dark:hover:bg-neutral-700 dark:text-white dark:hover:text-neutral-300"
  x-bind:class="(isActive('/admin/user/activated') || isActive('/admin/user/blocked'))   ? 'bg-gray-100' : ''"
  
  >
  <svg class="flex-shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/><path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m21.7 16.4-.9-.3"/><path d="m15.2 13.9-.9-.3"/><path d="m16.6 18.7.3-.9"/><path d="m19.1 12.2.3-.9"/><path d="m19.6 18.7-.4-1"/><path d="m16.8 12.3-.4-1"/><path d="m14.3 16.6 1-.4"/><path d="m20.7 13.8 1-.4"/></svg>

  Accounts
  
  <svg class="hs-accordion-active:block ms-auto hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
  
  <svg class="hs-accordion-active:hidden ms-auto block size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
  </button>
  
  <div class="w-full overflow-hidden transition-[height] duration-300" 
  x-cloak
  x-bind:class="userDropdown ? 'block' : 'hidden'" 
  >
  <ul class="ps-3 pt-2 space-y-1">
  <li class="hs-accordion">
  <a 
  x-bind:class="isActive('/admin/user/activated') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700 dark:text-gray-200'"
  
  href="{{ route('admin.activated.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm  rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-800">
  Activated Account
  <a>
  
  </li>
  <li class="hs-accordion" id="users-accordion-sub-2">
  <a
  x-bind:class="isActive('/admin/user/blocked') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700 dark:text-gray-200'"
  
  href="{{ route('admin.blocked.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 hover:dark:bg-neutral-800">
 Blocked Account

  
  
  </a>
  
  </li>
  </ul>
  </div>
  </li>
 
  
        <li >
          <a href="{{ route('admin.profile') }}" 
  x-bind:class="isActive('/admin/profile') ? 'text-blue-600 bg-gray-100 dark:bg-neutral-800 dark:text-white' : 'text-neutral-700'"

          
          class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 dark:text-white hover:dark:bg-neutral-800">
            {{-- <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg> --}}
            <svg class="flex-shrink-0 size-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
              <path d="M24 4C18.494917 4 14 8.494921 14 14C14 19.505079 18.494917 24 24 24C29.505083 24 34 19.505079 34 14C34 8.494921 29.505083 4 24 4 z M 24 7C27.883764 7 31 10.116238 31 14C31 17.883762 27.883764 21 24 21C20.116236 21 17 17.883762 17 14C17 10.116238 20.116236 7 24 7 z M 11.978516 28C9.7987044 28 8 29.798705 8 31.978516L8 33.5C8 37.104167 10.27927 39.892227 13.306641 41.5625C16.334011 43.232773 20.168103 44 24 44C27.831897 44 31.665989 43.232773 34.693359 41.5625C37.274641 40.138345 39.217335 37.862616 39.761719 35L40.001953 35L40.001953 31.978516C40.001953 29.798705 38.201295 28 36.021484 28L11.978516 28 z M 11.978516 31L36.021484 31C36.579674 31 37.001953 31.420326 37.001953 31.978516L37.001953 32L37 32L37 33.5C37 35.895833 35.65427 37.607773 33.244141 38.9375C30.834011 40.267227 27.418103 41 24 41C20.581897 41 17.165989 40.267227 14.755859 38.9375C12.34573 37.607773 11 35.895833 11 33.5L11 31.978516C11 31.420326 11.420326 31 11.978516 31 z" />
            </svg>
            Profile
  
  
          </a>
  
        </li>
  
        <li><a 
  x-bind:class="isActive('/admin/notification') ? 'text-blue-600 bg-gray-100 dark:bg-neutral-800 dark:text-white' : 'text-neutral-700'"

          href="{{ route('admin.notification') }}"
          class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800 dark:text-white ">


          {{-- <svgxmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg> --}}
     
          <svg  class="flex-shrink-0 size-4"  xmlns="http://www.w3.org/2000/svg" fill="currentColor"  width="48" height="48" viewBox="0 0 48 48">
            <path d="M23.277344 4.0175781C15.193866 4.3983176 9 11.343391 9 19.380859L9 26.648438L6.3496094 31.980469 A 1.50015 1.50015 0 0 0 6.3359375 32.009766C5.2696804 34.277268 6.9957076 37 9.5019531 37L18 37C18 40.295865 20.704135 43 24 43C27.295865 43 30 40.295865 30 37L38.496094 37C41.002339 37 42.730582 34.277829 41.664062 32.009766 A 1.50015 1.50015 0 0 0 41.650391 31.980469L39 26.648438L39 19C39 10.493798 31.863289 3.6133643 23.277344 4.0175781 z M 23.417969 7.0136719C30.338024 6.6878857 36 12.162202 36 19L36 27 A 1.50015 1.50015 0 0 0 36.15625 27.667969L38.949219 33.289062C39.128826 33.674017 38.921017 34 38.496094 34L9.5019531 34C9.077027 34 8.8709034 33.674574 9.0507812 33.289062C9.0507812 33.289062 9.0507812 33.287109 9.0507812 33.287109L11.84375 27.667969 A 1.50015 1.50015 0 0 0 12 27L12 19.380859C12 12.880328 16.979446 7.3169324 23.417969 7.0136719 z M 21 37L27 37C27 38.674135 25.674135 40 24 40C22.325865 40 21 38.674135 21 37 z" />
          </svg>    
           Notifications
        </a></li>
      
      </ul>
    </nav>
  </div>
  <!-- End Sidebar -->