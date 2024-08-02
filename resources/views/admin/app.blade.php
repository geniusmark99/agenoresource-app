<!DOCTYPE html>
<html lang="en"
x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" :class="{ 'dark': darkMode }">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Agenoresource Admin: @yield('admin-title')</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
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
        {{-- <label for="icon" class="sr-only">Search</label> --}}
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

        <div class="flex flex-row items-center justify-end gap-2">
        <button type="button" class="w-[2.375rem] h-[2.375rem] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
        </button>


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




        {{-- <x-dark-mode-toggle-widget/> --}}

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
</script>
@yield('admin-script')
</body>
</html>