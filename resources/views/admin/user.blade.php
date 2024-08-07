@extends('admin.layout')
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
  
<x-admin-user-avatar :fname="$user->firstname" :lname="$user->lastname" class="object-cover text-xl rounded-full 
  size-full max-w-full block "/>
    
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
    <div class="grid sm:grid-cols-12 gap-6">
      <div class="sm:self-end col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-5 lg:col-start-3">
        <!-- Card -->
        <div class="group relative block rounded-xl overflow-hidden shadow-md outset-none">
          <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl 
            w-full object-cover" src="{{Storage::url($user->govt_id)}}"
            alt="Image Description">
          </div>
          <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
            <div class="text-sm font-bold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                {{$user->firstname}} {{$user->lastname}} Govertment.
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
  
      <div class="sm:self-end col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3">
        <!-- Card -->
     @if ($user->govt_id)

        <div class="group relative block rounded-xl overflow-hidden">
          <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover" 
            src="{{Storage::url($user->govt_id)}}" alt="{{$user->firstlast}} {{$user->lastname}} Govt ID">
          </div>
       
        </div>
        @else

        @endif

        <!-- End Card -->
      </div>
      <!-- End Col -->
  
    
  

  
    
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Masonry Cards -->
    {{-- @if ($user->govt_id)
    USER DOCUMENT
    <img src="{{ Storage::url($user->govt_id) }}" alt="{{$user->firstlast}} {{$user->lastname}} Govt ID" 
    class="h-[200px] rounded-lg object-cover w-[200px] lg:w-full"/>
    @else      
    {{ $user->firstname }} {{ $user->lastname }} have not uploaded his/her Govt ID card.
    @endif

    @if ($user->cac_document)
    USER DOCUMENT
    <img src="{{ Storage::url($user->cac_document) }}" alt="{{$user->firstlast}} {{$user->lastname}} CAC Document" 
    class="h-[200px] rounded-lg object-cover w-[200px] lg:w-full"/>
    @else      
    {{ $user->firstname }} {{ $user->lastname }} have not uploaded his/her CAC Document card.
    @endif --}}
</div>

    <div x-cloak="" x-show="isActive('tab3')">
        <h1 class="text-center text-sm md:text-xl font-semibold dark:text-neutral-200">{{$user->firstname}}'s Assets</h1>
        @forelse ($user->assets as $asset)
        <div class="relative my-10">

        @if ($asset->active)


        <form action="{{ route('admin.unactivate-asset', $asset->id) }}" method="POST" style="display: inline;">
        @csrf
        <button  type="submit" class="absolute top-2 right-5 text-green-100 bg-green-500 py-1 px-3 rounded-md">
        deactivate
        </button>

        </form>
        @else

        <form action="{{ route('admin.activate-asset', $asset->id) }}" method="POST" style="display: inline;">
        @csrf
        <button  type="submit" class="absolute top-2 right-5 text-rose-100 bg-rose-500 py-1 px-3 rounded-md">
        Activate
        </button>

        </form>
        @endif

        {{-- <div class="border dark:border-neutral-700 my-5 overflow-x-hidden dark:bg-neutral-800 shadow-sm rounded-lg py-4 px-2 space-y-4">

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">ID:</div>
            <div>{{ $asset->user_id }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Project ID:</div>
            <div>{{ $asset->project_id }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Asset Status:</div>
            <div>{{ $asset->active }}  
            {{  $asset->active ? 'Activated' : 'Not Activated' }}

            </div>
            </div>

            <div class="flex items-center gap-x-2">
              <div class="font-semibold text-base">Date Added:</div>
              <div>{{ $asset->date_added }}</div>
              </div>   

            <div class="flex items-center gap-x-2">
              <div class="font-semibold text-base">Date Activated:</div>
              <div>{{ $asset->date_activated }}</div>
              </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Asset name:</div>
            <div>{{ $asset->asset_name }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Asset Type:</div>
            <div>{{ $asset->asset_type }}</div>
            </div>


            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Asset Location Address:</div>
            <div>{{ $asset->asset_location_details }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Technical  Report:</div>
            <div>{{ $asset->technical_report }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Price:</div>
            <div> &#8358;&nbsp;{{ $asset->price }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Coordinates:</div>
            <div>{{ $asset->coordinates }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Land Size:</div>
            <div>{{ $asset->land_size }}</div>
            </div>


            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Mineral Details:</div>
            <div>{{ $asset->mineral_details }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Reserve Deposit:</div>
            <div>{{ $asset->reserve_deposit }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Plan:</div>
            <div>{{ $asset->plan }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Duration:</div>
            <div>{{ $asset->duration }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Contact Information:</div>
            <div>{{ $asset->contact_information }}</div>
            </div>


            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">JORC Report:</div>
            <div>{{ $asset->jorc_report }}</div>
            </div>

            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Opportunity Type:</div>
            <div>{{ $asset->opportunity_type }}</div>
            </div>


            <div class="flex items-center gap-x-2">
            <div class="font-semibold text-base">Geological Location:</div>
            <div>{{ $asset->geological_location }}</div>
            </div>

         
        </div> --}}


        <!-- List -->
<div class="border dark:border-neutral-700  overflow-x-hidden dark:bg-neutral-800 
shadow-sm rounded-lg py-4 px-2 space-y-4">
  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">ID:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          <div>{{ $asset->user_id }}</div>
        </li>
   
      </ul>
    </dd>
  </dl>

  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Asset Status:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-['']  font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{  $asset->active ? 'Activated' : 'Not Activated' }}
        </li>
      
      </ul>
    </dd>
  </dl>

  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Asset name:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[','] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          <svg class="shrink-0 size-4 me-1" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7438 0.940745C6.84695 1.30308 2.6841 1.63631 2.48837 1.67533C1.9396 1.77319 1.44038 2.14544 1.20563 2.63537L1 3.06646L1.01982 13.3407L1.04893 23.615L1.36234 24.2517C1.53886 24.6042 2.73365 26.2499 4.0362 27.9439C6.61221 31.2836 6.79802 31.47 7.77726 31.5679C8.06156 31.597 10.1966 31.4991 12.5081 31.3622C14.8295 31.2154 18.5508 30.99 20.7842 30.863C30.3233 30.2839 29.8334 30.3328 30.3815 29.8627C31.0672 29.2947 31.0183 30.2251 31.0474 17.7377C31.0672 7.15003 31.0573 6.45509 30.9006 6.13177C30.7148 5.76943 30.3815 5.51487 26.0329 2.45885C23.1243 0.421704 22.9186 0.313932 21.6155 0.294111C21.0772 0.274911 16.6307 0.568497 11.7438 0.940745ZM22.752 2.28232C23.1633 2.46814 26.1704 4.56412 26.6108 4.9661C26.7284 5.08378 26.7675 5.18164 26.7086 5.24048C26.5717 5.35817 7.96245 6.465 7.42421 6.38634C7.17956 6.34732 6.81722 6.20052 6.61159 6.06302C5.75932 5.48514 3.64413 3.75149 3.64413 3.62452C3.64413 3.29129 3.57538 3.29129 11.8714 2.69421C13.4582 2.58644 16.0633 2.39071 17.6502 2.26312C21.0871 1.98874 22.1159 1.99865 22.752 2.28232ZM28.6677 7.63996C28.8046 7.77685 28.9223 8.04132 28.9613 8.29589C28.9904 8.53125 29.0102 12.9189 28.9904 18.0313C28.9613 26.8067 28.9514 27.3555 28.7848 27.61C28.6869 27.7667 28.4912 27.9333 28.3438 27.9823C27.9331 28.1489 8.43318 29.2557 8.03183 29.138C7.84601 29.0891 7.59083 28.9324 7.45394 28.7955L7.21858 28.541L7.18947 19.0799C7.16965 12.4395 7.18947 9.5012 7.26813 9.23672C7.32697 9.041 7.47376 8.80564 7.60136 8.72759C7.77788 8.60991 8.93364 8.51205 12.9101 8.2773C15.7016 8.1206 20.0206 7.85613 22.4987 7.70933C28.3933 7.34638 28.3741 7.34638 28.6677 7.63996Z" class="fill-black dark:fill-neutral-200" fill="currentColor"></path><path d="M23.4277 10.8818C22.3698 10.9506 21.4296 11.0484 21.3218 11.1073C20.9985 11.2739 20.8028 11.5483 20.7638 11.8617C20.7347 12.185 20.8325 12.224 21.8898 12.3516L22.35 12.4104V16.5925C22.35 19.0799 22.311 20.7256 22.2621 20.6767C22.2131 20.6178 20.8226 18.5027 19.167 15.9756C17.512 13.4392 16.1407 11.3525 16.1209 11.3333C16.1011 11.3135 15.024 11.3724 13.7313 11.4609C12.1445 11.5687 11.273 11.6666 11.0965 11.7644C10.8122 11.9112 10.4988 12.4303 10.4988 12.7734C10.4988 12.979 10.871 13.0868 11.6545 13.0868H12.0658V25.1139L11.4 25.3196C10.8809 25.4763 10.7044 25.5741 10.6165 25.7698C10.4598 26.1031 10.4697 26.4066 10.6264 26.4066C10.6852 26.4066 11.792 26.3378 13.0649 26.2598C15.582 26.113 15.8657 26.0442 16.1302 25.5252C16.2088 25.3685 16.277 25.2019 16.277 25.1529C16.277 25.1139 15.9345 24.9962 15.5226 24.8984C15.1014 24.8005 14.6802 24.7027 14.5923 24.6828C14.4257 24.6339 14.4157 24.3304 14.4157 20.1186V15.6033L17.3931 20.2753C20.5173 25.1721 20.9093 25.7308 21.3893 25.9755C21.987 26.2889 23.5051 26.0733 24.2688 25.5741L24.5042 25.4273L24.524 18.7479L24.5531 12.0586L25.0722 11.9608C25.6891 11.8431 25.9734 11.5594 25.9734 11.0695C25.9734 10.7561 25.9536 10.7362 25.66 10.7462C25.4847 10.7542 24.4757 10.813 23.4277 10.8818Z" class="fill-black dark:fill-neutral-200" fill="currentColor"></path></svg>
          {{ $asset->asset_name }}
        </li>
      
      </ul>
    </dd>
  </dl>

  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Asset Type:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->asset_type }}
        </li>
    
      </ul>
    </dd>
  </dl>

  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Date added:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->date_added }}
        </li>
       
      </ul>
    </dd>
  </dl>



  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Date activated:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->date_activated }}
        </li>
       
      </ul>
    </dd>
  </dl>

  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Price:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->price }}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Cordinate:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->coordinates }}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Mineral Details:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->mineral_details}}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Plan:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->plan}}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Duration:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->duration}}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Contact info:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->contact_information}}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">JORC Report:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->jorc_report}}
        </li>
       
      </ul>
    </dd>
  </dl>


  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Opportunity Type:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->opportunity_type}}
        </li>
       
      </ul>
    </dd>
  </dl>


  
  <dl class="flex flex-col sm:flex-row gap-1">
    <dt class="min-w-40">
      <span class="block text-sm text-gray-500 dark:text-neutral-500">Geological Location:</span>
    </dt>
    <dd>
      <ul>
        <li class="me-1 after:content-[''] font-semibold inline-flex items-center text-sm text-gray-800 dark:text-neutral-200">
          {{ $asset->geological_location}}
        </li>
       
      </ul>
    </dd>
  </dl>




</div>
<!-- End List -->

        </div>

        @empty
        <div class="flex justify-center items-center border shadow-sm mt-5 dark:border-neutral-700 py-4 rounded-lg dark:bg-neutral-800 min-h-[200px]">
        <h1 class="text-base whitespace-nowrap  md:text-xl text-center">
        {{ $user->firstname }} have not uploaded any asset(s) yet
        </h1>
       </div>
       @endforelse
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

