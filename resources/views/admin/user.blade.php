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
    <img src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80" alt="User Profile" class="object-cover rounded-full size-full max-w-full block ">
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
        class="whitespace-nowrap py-2 px-3 gap-x-1 transition-all hover:bg-rose-500 hover:text-rose-100 *:hover:fill-rose-100 flex items-center rounded-lg border shadow-sm dark:border-neutral-800 dark:bg-neutral-700 dark:hover:bg-rose-500 dark:hover:text-rose-100 dark:*:hover:fill-rose-100">
        <svg class="size-5 fill-neutral-600 dark:fill-neutral-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
        <path d="M24 4C20.704135 4 18 6.7041348 18 10L11.746094 10 A 1.50015 1.50015 0 0 0 11.476562 9.9785156 A 1.50015 1.50015 0 0 0 11.259766 10L7.5 10 A 1.50015 1.50015 0 1 0 7.5 13L10 13L10 38.5C10 41.519774 12.480226 44 15.5 44L32.5 44C35.519774 44 38 41.519774 38 38.5L38 13L40.5 13 A 1.50015 1.50015 0 1 0 40.5 10L36.746094 10 A 1.50015 1.50015 0 0 0 36.259766 10L30 10C30 6.7041348 27.295865 4 24 4 z M 24 7C25.674135 7 27 8.3258652 27 10L21 10C21 8.3258652 22.325865 7 24 7 z M 13 13L35 13L35 38.5C35 39.898226 33.898226 41 32.5 41L15.5 41C14.101774 41 13 39.898226 13 38.5L13 13 z M 20.476562 17.978516 A 1.50015 1.50015 0 0 0 19 19.5L19 34.5 A 1.50015 1.50015 0 1 0 22 34.5L22 19.5 A 1.50015 1.50015 0 0 0 20.476562 17.978516 z M 27.476562 17.978516 A 1.50015 1.50015 0 0 0 26 19.5L26 34.5 A 1.50015 1.50015 0 1 0 29 34.5L29 19.5 A 1.50015 1.50015 0 0 0 27.476562 17.978516 z" />
        </svg>
        <span class="relative xym5l x4lvl r0qgj dark:text-white">
        Delete user
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
        <div>Account Type:</div>
        <div>{{ $user->account_type }}</div>
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
        <div class="relative">

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

        <div class="border dark:border-neutral-700 my-5 overflow-x-hidden dark:bg-neutral-800 shadow-sm rounded-lg py-4 px-2 space-y-4">

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

        <div class="flex items-center gap-x-2">
        <div class="font-semibold text-base">Date Added:</div>
        <div>{{ $asset->date_added }}</div>
        </div>    
        </div>

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
<button @click="deletemodalOpen = false" class="flex justify-center items-center rounded-full size-7 p-1.5 bg-gray-200 dark:bg-neutral-700 hover:bg-rose-500 *:fill-gray-300 *:dark:fill-rose-200 *:hover:fill-rose-300 dark:hover:bg-rose-500 *:dark:hover:fill-rose-300">
<svg class="size-5 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
</button>
    </div>
<p class="dark:text-neutral-300">Are you sure want to delete this user? </p>
<div class="mt-2">
   <span class="font-bold">Note:</span>  
   <span class="italic text-sm">
    User and all it assets will be removed from the database

   </span>
</div>

<div class="mt-5 flex justify-end items-center gap-x-2">
<button @click="deletemodalOpen = false" class="py-1 md:py-1.5 px-2 text-xs md:text-sm rounded-lg border shadow-sm dark:border-neutral-700">Cancel</button>
<button class="py-1 md:py-1.5 px-2 text-xs md:text-sm rounded-lg bg-rose-500 text-rose-200">Yes, I'm sure</button>
</div>
</div>
</div>
</div>
</div>


    



@endsection

