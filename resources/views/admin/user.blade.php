@extends('admin.app')
@section('admin-style')
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}"/>

<style>
  .swiper-pagination {
      display: flex;
      justify-content: center;
      bottom: 0;
      position: absolute;
  }

  .swiper-button-next, .swiper-button-prev {
      display: flex;
      opacity: 0;
      background-color: rgba(0, 0, 0, 0.5); 
      color: white; 
      border-radius: 50%; 
      width: 40px; 
      height: 40px;
      justify-content: center;
      align-items: center;
  }

  .swiper-button-next::after, .swiper-button-prev::after {
      font-size: 1.2rem; 
  }

  .swiper-button-next {
      right: 10px; 
  }

  .swiper-button-prev {
      left: 10px; 
  }

  .group:hover .swiper-button-next,
  .group:hover .swiper-button-prev {
      opacity: 1; /* Show on hover */
  }
</style>
@endsection
@section('admin-content')
<div class="dark:text-gray-300 flex justify-center flex-col items-center" 

x-data="{
    activeTab : 'tab1',
    isActive(tab){
        if(this.activeTab == tab){
            return true;
        }else{
            return false;
        }
    },
    showSnackbar: false, 
    snackbarMessage: '',
    deletemodalOpen:false,
    }"
>

@if (session('success'))
<div 
    x-data="{ show: true }" 
    x-init="setTimeout(() => { show = false }, 5000)" 
    x-show="show" 
    class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md"
>
    {{ session('success') }}
</div>
@endif


<div 
x-show="showSnackbar" 
x-transition:enter="transition ease-out duration-300" 
x-transition:enter-start="opacity-0 transform translate-y-4" 
x-transition:enter-end="opacity-100 transform translate-y-0" 
x-transition:leave="transition ease-in duration-300" 
x-transition:leave-start="opacity-100 transform translate-y-0" 
x-transition:leave-end="opacity-0 transform translate-y-4"
class="fixed bottom-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow-md"
x-init="setTimeout(() => { showSnackbar = false }, 5000)"
>
<p x-text="snackbarMessage"></p>
</div>

<div class="mt-5 bg-white px-4 dark:bg-neutral-800 w-full lg:max-w-[1100px] border dark:border-neutral-600 shadow-sm dark:shadow-md py-4 rounded-lg">
    <figure class="w-full">
        <svg class="w-full" preserveAspectRatio="none" width="1113" height="161" viewBox="0 0 1113 161" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_697_201879)">
            <rect x="1" width="1112" height="348" fill="#B2E7FE"></rect>
            <rect width="185.209" height="704.432" transform="matrix(0.50392 0.86375 -0.860909 0.508759 435.452 -177.87)" fill="#FF8F5D"></rect>
            <rect width="184.653" height="378.667" transform="matrix(0.849839 -0.527043 0.522157 0.852849 -10.4556 -16.4521)" fill="#3ECEED"></rect>
            <rect width="184.653" height="189.175" transform="matrix(0.849839 -0.527043 0.522157 0.852849 35.4456 58.5195)" fill="#4C48FF"></rect>
          </g>
          <defs>
            <clipPath id="clip0_697_201879">
              <rect x="0.5" width="1112" height="161" rx="12" fill="white"></rect>
            </clipPath>
          </defs>
        </svg>
      </figure>

<div class="-mt-24">
    <div class="relative flex size-[120px] border-4 rounded-full mx-auto dark:border-neutral-800">
    @if ($user->profile_pics)
    <img src="{{ $user->profile_pics }}" alt="{{ $user->firstname }} {{ $user->lastname }} Profile picture" class="object-cover text-xl rounded-full size-full max-w-full block"/>

    @else
    <x-admin-user-avatar :fname="$user->firstname" :lname="$user->lastname" class="object-cover text-xl rounded-full 
    size-full max-w-full block "/>
    @endif

    
    <div class="absolute bottom-0 -end-2">
    <button class="shadow-md font-base bg-rose-600 rounded-full p-2">
    <svg class="size-4 stroke-white dark:stroke-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="10"></circle>
    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
    <line x1="9" x2="9.01" y1="9" y2="9"></line>
    <line x1="15" x2="15.01" y1="9" y2="9"></line>
    </svg>
    </button>
    </div>
    </div>

    <div class="text-center">
    <h1 class="font-xl font-semibold dark:text-neutral-200">{{ $user->firstname }} {{ $user->lastname }}</h1>
    <p class="dark:text-neutral-500">{{ $user->account_type }}</p>
    </div>
</div>

<div class="py-1 flex overflow-y-hidden  overflow-x-auto gap-x-10 lg:gap-x-2 justify-between items-center flex-row mt-4 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
    <nav class="flex gap-x-2 items-center">
    <button   @click="activeTab = 'tab1'"
    :class="isActive('tab1') ? ' after:bg-neutral-600 after:w-full dark:bg-neutral-700' : 'after:bg-transparent' "
    class="relative flex after:content-['']  after:absolute after:h-0.5 after:-bottom-2 items-center justify-center rounded-lg gap-x-2 py-1 px-2  dark:hover:text-neutral-300 
    hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  dark:bg-neutral-800 dark:text-white 
    dark:after:bg-neutral-200 active whitespace-nowrap">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="18" cy="15" r="3"></circle>
        <circle cx="9" cy="7" r="4"></circle>
        <path d="M10 15H6a4 4 0 0 0-4 4v2"></path>
        <path d="m21.7 16.4-.9-.3"></path>
        <path d="m15.2 13.9-.9-.3"></path>
        <path d="m16.6 18.7.3-.9"></path>
        <path d="m19.1 12.2.3-.9"></path>
        <path d="m19.6 18.7-.4-1"></path>
        <path d="m16.8 12.3-.4-1"></path>
        <path d="m14.3 16.6 1-.4"></path>
        <path d="m20.7 13.8 1-.4"></path>
        </svg>
        {{ $user->firstname}}'s  Profile
    </button>

    <button   @click="activeTab = 'tab2'"
    :class="isActive('tab2') ? ' after:bg-neutral-600 after:w-full dark:bg-neutral-700' : 'after:bg-transparent' "
    class="relative flex after:content-['']  after:absolute after:h-0.5 after:-bottom-2 items-center justify-center rounded-lg gap-x-2 py-1 px-2  dark:hover:text-neutral-300 
    hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  dark:bg-neutral-800 dark:text-white 
    dark:after:bg-neutral-200 active whitespace-nowrap">
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="18" cy="15" r="3"></circle>
        <circle cx="9" cy="7" r="4"></circle>
        <path d="M10 15H6a4 4 0 0 0-4 4v2"></path>
        <path d="m21.7 16.4-.9-.3"></path>
        <path d="m15.2 13.9-.9-.3"></path>
        <path d="m16.6 18.7.3-.9"></path>
        <path d="m19.1 12.2.3-.9"></path>
        <path d="m19.6 18.7-.4-1"></path>
        <path d="m16.8 12.3-.4-1"></path>
        <path d="m14.3 16.6 1-.4"></path>
        <path d="m20.7 13.8 1-.4"></path>
        </svg>
        {{ $user->firstname}}'s  Documents
    </button>

    <button  @click="activeTab = 'tab3'" 
    :class="isActive('tab3') ?  'after:bg-neutral-600 after:w-full dark:bg-neutral-700' : 'after:bg-transparent' "
    
    class="relative flex after:content-['']  after:absolute after:h-0.5 after:-bottom-2 items-center justify-center rounded-lg gap-x-2 py-1 px-2  dark:hover:text-neutral-300 
    hover:bg-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700  dark:bg-neutral-800 dark:text-white 
    dark:after:bg-neutral-200 active" 
    >
        <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M15.5 2H8.6c-.4 0-.8.2-1.1.5-.3.3-.5.7-.5 1.1v12.8c0 .4.2.8.5 1.1.3.3.7.5 1.1.5h9.8c.4 0 .8-.2 1.1-.5.3-.3.5-.7.5-1.1V6.5L15.5 2z"></path>
        <path d="M3 7.6v12.8c0 .4.2.8.5 1.1.3.3.7.5 1.1.5h9.8"></path>
        <path d="M15 2v5h5"></path>
        </svg>
        Assets
    </button>


    </nav>

    <div class="">
      <button 
        @click="deletemodalOpen = true"
        class="outset-none whitespace-nowrap py-2 px-3 gap-x-1 transition-all hover:bg-rose-500 hover:text-rose-100 *:hover:fill-rose-100 flex items-center rounded-lg border shadow-sm dark:border-neutral-800 dark:bg-neutral-700 dark:hover:bg-rose-500 dark:hover:text-rose-100 dark:*:hover:fill-rose-100">
        <svg class="size-5 fill-neutral-600 dark:fill-neutral-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
        <path d="M24 4C20.704135 4 18 6.7041348 18 10L11.746094 10 A 1.50015 1.50015 0 0 0 11.476562 9.9785156 A 1.50015 1.50015 0 0 0 11.259766 10L7.5 10 A 1.50015 1.50015 0 1 0 7.5 13L10 13L10 38.5C10 41.519774 12.480226 44 15.5 44L32.5 44C35.519774 44 38 41.519774 38 38.5L38 13L40.5 13 A 1.50015 1.50015 0 1 0 40.5 10L36.746094 10 A 1.50015 1.50015 0 0 0 36.259766 10L30 10C30 6.7041348 27.295865 4 24 4 z M 24 7C25.674135 7 27 8.3258652 27 10L21 10C21 8.3258652 22.325865 7 24 7 z M 13 13L35 13L35 38.5C35 39.898226 33.898226 41 32.5 41L15.5 41C14.101774 41 13 39.898226 13 38.5L13 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5L19 34.5 A 1.50015 1.50015 0 1 0 22 34.5L22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5L26 34.5 A 1.50015 1.50015 0 1 0 29 34.5L29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z" />
        </svg>
        <span class="relative xym5l x4lvl r0qgj dark:text-white">
        Delete {{ $user->firstname }}
        </span>
      </button>

      </div>
</div>
</div>


<div class="mt-5 bg-white px-4 dark:bg-neutral-800 w-full lg:max-w-[1100px] border dark:border-neutral-600 shadow-sm dark:shadow-md py-4 rounded-lg">
<div class="p-5">
    <div x-cloak="" x-show="isActive('tab1')">
        <div class="border dark:border-neutral-700 dark:bg-neutral-800 shadow-sm rounded-lg py-4 px-2 space-y-4">

        <div class="flex items-center gap-x-2">
        <div>ID:</div>
        <div>{{ $user->id }}</div>
        </div>

        <div class="flex items-center gap-x-2">
            <div>USER ID:</div>
            <div>{{ $user->uuid }}</div>
            </div>
    


        <div class="flex items-center gap-x-2">
        <div>Firstname:</div>
        <div>{{ $user->firstname }}</div>
        </div>

        <div class="flex items-center gap-x-2">
        <div>Lastname:</div>
        <div>{{ $user->lastname }}</div>
        </div>


        <div class="flex items-center gap-x-2">
          <div>Status:</div>
          <div>
            <div class="flex items-center gap-x-10">

            

          <div class="flex items-center">
      @if($user->status === "active")  
      <div>
      Active
      </div>

      @else
      <div>
      Unactive
      </div>
      @endif
          </div>


          @if($user->status === "active")  
          <form action="{{route('admin.deactivate',[$user->id])}}" method="POST">
            @csrf
            <button type="submit" class="outset-none py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              Deactive
              </button>
          </form>

          @else

          <form action="{{route('admin.activate',[$user->id])}}" method="POST">
            @csrf
            <button type="submit" class="outset-none py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
              Activate
              </button>
          </form>

          @endif
          {{-- <form action="{{route('admin.activate',[$user->id])}}" method="POST">
            @csrf

            @if($user->status === "active")  

            <button type="button" class="outset-none py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            Deactivate
            </button>
            @else
            <button type="submit" class="outset-none py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            Activate
            </button>
  
            @endif

          </form> --}}

            </div>

      
        </div>

          </div>



        <div class="flex items-center gap-x-2">
        <div>Account Type:</div>
        <div>{{ $user->account_user_type }}</div>
        </div>

        <div class="flex items-center gap-x-2">
        <div>Email:</div>
        <div>{{ $user->email }}</div>
        </div>

        <div class="flex items-center gap-x-2">
        <div>Phone number:</div>
        <div>{{ $user->phone_number }}</div>
        </div>

        <div class="flex items-center gap-x-2">
        <div>Date Created</div>
        <div>{{ $user->created_at }}</div>
        </div>


        </div>
    </div>

<div x-cloak="" x-show="isActive('tab2')">

    <!-- Masonry Cards -->
<div class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="">

      <div class="flex flex-col w-full lg:flex-row gap-y-10 lg:gap-x-4">

        <div class="w-full rouned-md lg:w-6/12">
          <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl 
            w-full object-cover" src="{{($user->govt_id)}}"
            alt="Image Description">
          </div>
        </div>


        <div class="w-full rouned-md lg:w-6/12">
          <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl 
            w-full object-cover" src="{{($user->cac_document)}}"
            alt="Image Description">
          </div>
        </div>
      </div>
      <!-- End Col -->

    
    </div>
    <!-- End Grid -->
  </div>
</div>

    <div x-cloak="" x-show="isActive('tab3')">
        <h1 class="text-center text-sm md:text-xl font-semibold dark:text-neutral-200">{{$user->firstname}}'s Assets</h1>
        {{-- @forelse ($user->assets as $asset)

        @empty
        <div class="flex justify-center items-center border shadow-sm mt-5 dark:border-neutral-700 py-4 rounded-lg dark:bg-neutral-800 min-h-[200px]">
        <h1 class="text-base whitespace-nowrap  md:text-xl text-center">
        {{ $user->firstname }} have not uploaded any asset(s) yet
        </h1>
       </div>
       @endforelse --}}
  <div class="grid lg:grid-cols-2 gap-4 sm:gap-6 mt-10">
  @foreach($user->assets as $asset)
  <div class="group flex flex-col relative justify-between gap-y-1 overflow-hidden bg-white border-2 
  border-gray-300/50 hover:border-ageno-2 rounded-xl dark:border-neutral-600 dark:bg-neutral-800
  ">
 <div class="p-2 md:p-2.5 flex items-center border-b dark:border-neutral-600 font-semibold bg-ageno/5 dark:bg-neutral-900 text-ageno justify-between">
    <div> {{ $asset->asset_type_value }} asset</div>
    <div>
    @switch($asset->plan)
    @case('platinum')
    <div class="flex justify-between w-full gap-x-0.5 items-center">
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    </div>
    @break
    @case('diamond')
    <div class="flex justify-between w-full gap-x-0.5 items-center">
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="zI5~V7kqQWqczEwQDvqzya" x1="9.009" x2="38.092" y1="519.64" y2="480.734" gradientTransform="matrix(1 0 0 -1 0 526)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#zI5~V7kqQWqczEwQDvqzya)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/><radialGradient id="zI5~V7kqQWqczEwQDvqzyb" cx="20.375" cy="20.637" r="23.105" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fafafb"/><stop offset=".293" stop-color="#f6f7f8"/><stop offset=".566" stop-color="#ebecee"/><stop offset=".832" stop-color="#d8dcdf"/><stop offset="1" stop-color="#c8cdd1"/></radialGradient><path fill="url(#zI5~V7kqQWqczEwQDvqzyb)" d="M43.769,18.887l-13.378-1.413L24.913,5.186C24.737,4.79,24.368,4.593,24,4.593v32.548l11.653,6.723c0.75,0.432,1.658-0.227,1.478-1.074L34.34,29.629l9.993-9.005C44.976,20.045,44.63,18.978,43.769,18.887z"/></svg>
    </div>
    @break
    @case('gold')
    <div class="flex justify-between w-full gap-x-0.5 items-center">
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
    </div>
    @break
    @default
    @endswitch
    </div>
  </div>
  <div class="p-2 md:p-2.5 flex gap-x-3 flex-col lg:flex-row w-full">

  <div class="w-full lg:w-5/12 overflow-hidden rounded-md">
  @if ($asset->pictures)
  @if (count($asset->pictures) > 1)
  {{-- <x-swiper-gallery :pictures="$asset->pictures" /> --}}
    <div class="admin-swiper-container" class="group">
      @if(!empty($asset->pictures))
      <div class="swiper-wrapper">
          @foreach ($asset->pictures as $picture)
              <div class="swiper-slide">
                  <img src="{{ asset($picture['url']) }}" alt="Asset Image" 
                  class="w-full h-[230px] object-cover transition-all group-hover:scale-105 transform hover:filter rounded-md" draggable="false">
              </div>
          @endforeach
      </div>
      @else
      <p>No pictures available for this asset.</p>
  @endif
    
      <div class="swiper-pagination"></div>
      
      <div class="swiper-button-next group-hover:flex"></div>
      <div class="swiper-button-prev group-hover:flex"></div>
  </div>
  @else
  @foreach ($asset->pictures as $picture) 
  <img src="{{ asset($picture) }}" alt="" 
  class="w-full h-[230px] object-cover transition-all transform hover:filter rounded-md group-hover:scale-105" draggable="false">
  @endforeach 
  @endif

  @endif 
  </div>  

  <div class="w-full lg:w-7/12 flex flex-col gap-y-3 mt-10">
  <p style="display: -webkit-box; -webkit-box-orient: vertical;  -webkit-line-clamp: 3;"
  class="text-gray-500 w-full max-h-[4.5em]  overflow-hidden text-ellipsis dark:text-gray-200 relative min-h-[150px] before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 dark:before:bg-gray-600 before:-bottom-1">
  {{ $asset->mineral_details }}
  </p>
  <div class="flex gap-x-3 items-center">
  <h1 class="text-base lg:text-2xl font-bold"><span class="text-gray-600 dark:text-gray-300">Price:</span>
  <span class="text-blue-600">&#8358;{{ $asset->price }}</span>
  </h1>
  </div>
  </div>
  </div>

  <div class="flex border-t-[0.5px] p-2 bg-gray-300/20 rounded-br-xl rounded-bl-xl border-gray-300/50 dark:border-gray-500 justify-between dark:text-gray-300">
  <div class="flex gap-x-2 items-center">

    @if ($asset->active)
    <form action="{{ route('admin.unactivate-asset', $asset->id) }}" method="POST" style="display: inline;">
    @csrf
    <button  type="submit" class="text-green-100 bg-green-500 py-1 px-3 rounded-md">
    deactivate
    </button>

    </form>
    @else

    <form action="{{ route('admin.activate-asset', $asset->id) }}" method="POST" style="display: inline;">
    @csrf
    <button  type="submit" class="text-rose-100 bg-rose-500 py-1 px-3 rounded-md">
    Activate
    </button>

    </form>
    @endif
  {{-- <div class="text-xs md:text:sm text-gray-500 font-semibold dark:text-gray-100">
  Ratings:
  </div>
  <div class="flex items-center gap-x-2">
   <div class="flex items-center gap-x-2 text-xs">
  <button id="like-btn" class="flex bg-ageno-2 text-white rounded-md items-center gapx-x-2 outline-none border-none shadow-sm p-2">
  <div>
      <svg class="size-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
          <path d="M36.9,19.5c-0.9-1-2.1-1.5-3.4-1.5h-9.2c-0.2,0-0.3-0.1-0.4-0.2c-0.1-0.2-0.1-0.4,0-0.6c0.8-1.8,1.3-3.4,1.7-5.4C25.9,10.7,26,10,26,9.3c0-2.9-2.2-4-3.3-4.2c-0.2,0-0.4,0-0.5,0.2c-0.1,0.1-6.4,9.2-8.9,11.7c-2.1,2-3.3,4.5-3.3,7v6.6C10,36.3,14.7,41,20.5,41h9.3c3.3,0,6-2.4,6.5-5.7L38,23.1C38.2,21.8,37.8,20.5,36.9,19.5z" />
        </svg>
  </div>
  <div class="flex text-center">{{ $asset->likes }}</div>

  </button>
  </div> 

  </div> --}}
  </div>

  <a href="{{ route('assets.show',[$asset->slug]) }}" class="outset-none flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
  <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
  <div>View</div>
  </a>  


  </div>
  </div> 
  @endforeach
  </div>

    </div>

</div>
 
</div>
 

<div  @keydown.escape="deletemodalOpen = false" x-cloak x-show="deletemodalOpen" 
class="fixed inset-0 flex items-center justify-center z-[1000]">
<div class="fixed inset-0 bg-black opacity-50" @click="deletemodalpen = false"></div>
<div x-show="deletemodalOpen" 
x-transition:enter="transition ease-out duration-300 transform" 
x-transition:enter-start="scale-95 opacity-0" 
x-transition:enter-end="scale-100 opacity-100" 
x-transition:leave="transition ease-in duration-200 transform" 
x-transition:leave-start="scale-100 opacity-100" 
x-transition:leave-end="scale-95 opacity-0"
class="bg-white dark:bg-neutral-900 rounded-lg shadow-lg w-full max-w-[400px] lg:mx-auto mt-20 lg:mt-0 absolute border dark:border-neutral-700">
<div class="flex flex-col justify-between shadow-sm px-4 py-4 mx-4">
    <div class="flex justify-between items-center my-2">
<h1 class="text-xl font-semibold text-neutral-600 dark:text-neutral-200">Are you sure?</h1>
<button @click="deletemodalOpen = false" class="flex justify-center items-center rounded-full size-7 p-1.5 bg-gray-200 text-black hover:text-white dark:bg-neutral-700 hover:bg-rose-500 *:fill-gray-300 *:dark:fill-rose-200 *:hover:fill-rose-300 dark:hover:bg-rose-500 *:dark:hover:fill-rose-300">
<svg class="size-5 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
</button>
    </div>
<p class="dark:text-neutral-300">Are you sure want to delete <span class="italic font-semibold"> {{ $user->firstname }}</span> from the database? </p>
<div class="mt-2">
   <span class="font-bold">Note:</span>  
   <span class="italic text-sm">
    User and all it assets will be removed from the database

   </span>
</div>

<div class="mt-5 flex justify-end items-center gap-x-2">
<button @click="deletemodalOpen = false" class="py-1 md:py-1.5 px-2 text-xs md:text-sm rounded-lg border shadow-sm dark:border-neutral-700">Cancel</button>

<form action="{{ route('admin.deleteUser',[$user->id]) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="py-1 md:py-1.5 px-2 text-xs md:text-sm rounded-lg bg-rose-500 text-rose-200">Yes, I'm sure</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('admin-script')
<script src="{{asset('js/swiper.js')}}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.admin-swiper-container', {
    loop: true,
    autoplay: {
    delay: 3000, 
    disableOnInteraction: false,
    },
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    });
    });
  </script>

@endsection

