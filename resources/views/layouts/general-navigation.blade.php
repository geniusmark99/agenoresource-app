<!-- ========== HEADER ========== -->
{{-- diamond-pattern 
bg-gradient-to-tr from-ageno-2 to-emerald-400 
--}}
<header class="z-[1001] flex font-semibold fixed bg-gradient-to-tr diamond-pattern bg-ageno flex-wrap 
sm:justify-start border-b
 border-gray-200/50 sm:flex-nowrap w-full shadow-sm hover:shadow-md shadow-emerald-500/50
text-sm sm:py-4 lg:py-0">
    
  <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">
            <x-application-logo class="size-16"/>
        </a>
        <div class="sm:hidden">
          <button  @click="sidebarOpen = !sidebarOpen"  type="button" class="size-9 rounded-full flex justify-center items-center text-sm font-semibol border border-gray-200 text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-white  dark:focus:outline-none dark:focus:ring-0" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">

            <svg x-cloak x-show="sidebarOpen" class="flex-shrink-0 size-4 fill-white" viewBox="0 0 50 50" class="fill-white">
              <path d="M7.71875 6.28125L6.28125 7.71875L23.5625 25L6.28125 42.28125L7.71875 43.71875L25 26.4375L42.28125 43.71875L43.71875 42.28125L26.4375 25L43.71875 7.71875L42.28125 6.28125L25 23.5625Z" />
            </svg>

            <svg  x-show="!sidebarOpen" class="flex-shrink-0 size-4 fill-white" viewBox="0 0 50 50" class="fill-white">
              <path d="M3 9 A 1.0001 1.0001 0 1 0 3 11L47 11 A 1.0001 1.0001 0 1 0 47 9L3 9 z M 3 24 A 1.0001 1.0001 0 1 0 3 26L47 26 A 1.0001 1.0001 0 1 0 47 24L3 24 z M 3 39 A 1.0001 1.0001 0 1 0 3 41L47 41 A 1.0001 1.0001 0 1 0 47 39L3 39 z" />
            </svg>

            


          </button>
        </div>
      </div>
      <div  :class="sidebarOpen ? 'block' : 'hidden' " class="overflow-hidden transition-all duration-300 basis-full grow sm:block">
        <template x-if="true">

        <div  class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7">

          @auth
          <x-general-nav-link :href="route('dashboard')">
            {{ __('Dashboard') }}
        </x-general-nav-link>
          @endauth
         
          @guest
          <x-general-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-general-nav-link>
          @endguest
          

            <x-general-nav-link :href="route('services')" :active="request()->routeIs('services')">
                {{ __('Service') }}
            </x-general-nav-link>

            <x-general-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-general-nav-link>

            <x-general-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
                {{ __('Blog') }}
            </x-general-nav-link>

            <x-general-nav-link :href="route('assets')" 
            :active="request()->routeIs('assets') || request()->routeIs('assets.*')"   >
                {{ __('Assets') }}
            </x-general-nav-link>

            <x-general-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('Contact') }}
            </x-general-nav-link>

            {{-- <x-general-nav-link :href="route('pricing')" :active="request()->routeIs('pricing')">
              {{ __('Pricing') }}
          </x-general-nav-link> --}} 

            <a href="{{ route('post.assets') }}" class="flex bg-amber-500 text-white justify-between rounded-sm gap-x-4 py-1 px-2 items-center">
              Post an asset
              <span class="bg-white text-ageno px-2 py-1 rounded-sm">Free</span>
            </a>

        
  
          <div class="flex items-center gap-x-10 sm:ms-auto justify-between mb-4 lg:mb-0">
            <div class="flex gap-x-2 ">
            @auth(  )
<form method="POST" action="{{ route('logout') }}">
  @csrf
  <a class='block w-full px-4 py-2 text-start text-sm leading-5 text-ageno font-semibold dark:text-ageno
  bg-white rounded-md cursor-pointer shadow-sm scale-95 hover:scale-100 transition-transform focus:outline-none focus:bg-gray-100  duration-150 ease-in-out'
    href="{{route('logout')}}"
  onclick="event.preventDefault();
              this.closest('form').submit();">

{{ __('Log out') }}
  </a>
</form>
          @endauth

          @guest()
              
            <a class="bg-ageno-2 hover:bg-white  rounded-md py-1 px-2 flex items-center gap-x-2 font-medium lg:text-base text-white hover:text-blue-600 dark:text-white dark:hover:text-blue-500" href="{{route('login')}}">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              Log in
            </a>

            <a class="bg-ageno-2 hover:bg-white  rounded-md py-1 px-2 flex items-center gap-x-2 font-medium lg:text-base text-white hover:text-blue-600 dark:text-white dark:hover:text-blue-500" href="{{route('register')}}">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              Register
          </a>
          @endguest


        </div>

{{-- <x-dark-mode-toggle-widget/> --}}

          </div>


        </div>

      </template>

      </div>
    </nav>
  </header>

  <!-- ========== END HEADER ========== -->