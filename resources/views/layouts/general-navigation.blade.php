<!-- ========== HEADER ========== -->
<header class="z-[1001] flex font-semibold fixed bg-gradient-to-tr diamond-pattern bg-white flex-wrap sm:justify-start border-bborder-gray-200/10 sm:flex-nowrap w-full shadow-sm text-sm sm:py-4 lg:py-0">
  <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none text-xl font-semibold dark:text-white" href="/" aria-label="Brand">
            <x-application-logo class="size-16"/>
        </a>
        <div class="sm:hidden">
          <button  @click="sidebarOpen = !sidebarOpen"  type="button" class="size-9 rounded-full flex justify-center 
          items-center text-sm font-semibol border border-gray-200 focus:border-ageno text-gray-800 disabled:opacity-50 disabled:pointer-events-none dark:text-white  dark:focus:outline-none dark:focus:ring-0" aria-label="Toggle navigation">
            <svg x-show="sidebarOpen" class="flex-shrink-0 size-4 fill-ageno" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
              <path d="M38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375L24 21.171875L10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062L21.171875 24L7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062L24 26.828125L37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938L26.828125 24L40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
            </svg>

            <svg  x-cloak x-show="!sidebarOpen" class="flex-shrink-0 size-4 fill-ageno" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
              <path d="M6 9 A 2.0002 2.0002 0 1 0 6 13L42 13 A 2.0002 2.0002 0 1 0 42 9L6 9 z M 6 22 A 2.0002 2.0002 0 1 0 6 26L42 26 A 2.0002 2.0002 0 1 0 42 22L6 22 z M 6 35 A 2.0002 2.0002 0 1 0 6 39L42 39 A 2.0002 2.0002 0 1 0 42 35L6 35 z" />
            </svg>

          </button>
        </div>
      </div>
      <div  :class="sidebarOpen ? 'block' : 'hidden' " class="overflow-hidden transition-all duration-300 basis-full grow sm:block">
        {{-- <template x-if="true"> </template>--}}

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

            {{-- <x-general-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
                {{ __('Blog') }}
            </x-general-nav-link> --}}

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
      <div class="flex gap-x-2" x-data="{ currentUrl: window.location.pathname }">
      @auth()
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
      <a  
      
      :class="currentUrl === '/login' ? 'text-blue-600 bg-ageno/10' : 'text-white'" 
      class="bg-ageno-2 shadow-sm hover:bg-ageno/10 rounded-md py-1 px-2 flex items-center gap-x-2 
      font-medium lg:text-base  hover:text-blue-600" 
      href="{{route('login')}}">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      Log in
      </a>

      <a 
      :class="currentUrl === '/register' ? 'text-blue-600 bg-ageno/10' : 'text-white'" 
      class="bg-ageno-2 hover:bg-white  shadow-sm hover:bg-ageno/10 rounded-md py-1 px-2 flex items-center gap-x-2
      font-medium lg:text-base hover:text-blue-600" href="{{route('register')}}">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      Register
      </a>
      @endguest
      </div>
      </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- ========== END HEADER ========== -->