  <!-- Sidebar -->
  <div 
  x-bind:class=" sidebarOpen ? 'block translate-x-0' : 'hidden lg:block'" 
  
  class="
    -translate-x-full transition-all duration-300 transform
    w-[260px]
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-neutral-800 dark:border-neutral-700
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
          <a class="flex items-center gap-x-3 py-3 px-2.5  text-sm rounded-lg hover:bg-gray-100 dark:text-white" href="{{ route('admin.dashboard') }}"

  x-bind:class="isActive('/admin/dashboard') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"

            
            >
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            <span>
                Dashboard

            </span>
          </a>
        </li>
  
<li x-data="{userDropdown: false}">
<button type="button" x-on:click="userDropdown = !userDropdown"

class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white"
x-bind:class="(isActive('/admin/user/active') || isActive('/admin/user/unactive'))   ? 'bg-gray-100' : ''"

>
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
<a 
x-bind:class="isActive('/admin/user/active') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"

href="{{ route('admin.active.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm  rounded-lg hover:bg-gray-100 ">
Active users
<a>

</li>
<li class="hs-accordion" id="users-accordion-sub-2">
<a
x-bind:class="isActive('/admin/user/unactive') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"

href="{{ route('admin.unactive.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 ">
Unactive users


</a>

</li>
</ul>
</div>
</li>


<li x-data="{userDropdown: false}">
  <button type="button" x-on:click="userDropdown = !userDropdown"
  
  class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent text-sm text-neutral-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300 dark:hs-accordion-active:text-white"
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
  x-bind:class="isActive('/admin/user/activated') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"
  
  href="{{ route('admin.activated.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm  rounded-lg hover:bg-gray-100 ">
  Activated Account
  <a>
  
  </li>
  <li class="hs-accordion" id="users-accordion-sub-2">
  <a
  x-bind:class="isActive('/admin/user/blocked') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"
  
  href="{{ route('admin.blocked.users') }}" class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 ">
 Blocked Account

  
  
  </a>
  
  </li>
  </ul>
  </div>
  </li>
 
  
        <li >
          <a href="{{ route('admin.projects') }}" 
  x-bind:class="isActive('/admin/projects') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"

          
          class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 ">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
            Projects
  
  
          </a>
  
        </li>
  
        <li><a 
  x-bind:class="isActive('/admin/message') ? 'text-blue-600 bg-gray-100' : 'text-neutral-700'"

          href="{{ route('admin.message') }}"
          class="w-full text-start flex items-center gap-x-3.5 py-2 px-2.5  text-sm rounded-lg hover:bg-gray-100 ">


          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
          Message
        </a></li>
      
      </ul>
    </nav>
  </div>
  <!-- End Sidebar -->