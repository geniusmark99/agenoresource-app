@extends('layouts.app')
@section('app-header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight md:ml-16 lg:ml-24">
{{ __('My Assets') }}
</h2>

<x-menu-desc-widget>
See all your asset(s)
</x-menu-desc-widget>
@endsection


@section('app-content')
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center items-center">
@if (count($user_assets) < 1)
<div class="flex flex-col justify-center items-center">
<img src="{{ asset('./images/no-notification.svg') }}" alt="" class="size-60">
<p class="dark:text-gray-400 text-gray-500 text-sm md:text-base">You don't have any assets posted yet</p>
<a href="{{ route('post.assets') }}" class="py-1 px-2 rounded-md bg-ageno text-white mt-2 hover:bg-ageno/80">Post an asset</a>

</div> 


@else
<div class="grid lg:grid-cols-2 gap-4 sm:gap-6">


@foreach($user_assets as $asset)
<div class="group flex flex-col relative justify-between gap-y-1 overflow-hidden bg-white border border-gray-300/50 rounded-xl dark:bg-gray-800 dark:border-gray-700">

<div class="flex justify-between items-center py-2 px-2  border-b shadow-sm" x-data="{ open: false, openActivated: false }">
<div>
    <span class="text-center text-sm md:text-base my-4 font-medium py-1">
    plan: {{ $asset->plan }}
    </span> 
    </div>
    <div>
  
        @if ($asset->active)
        <button 
        @click="openActivated = true"
        class="bg-green-500 text-white px-2 py-1 rounded-md">
        Activated
        </button>

        @else
        <button 
        @click="open = true"
        class="bg-rose-500 text-white px-2 py-1 rounded-md">
        Activate
        </button>
        @endif
  
    </div>


    <div  x-show="openActivated" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" x-cloak>
        <div 
        x-show="openActivated" 
        @click.outside="openActivated = false"
        x-transition:enter="ease-out duration-300" 
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="ease-in duration-200" 
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="bg-white rounded-lg shadow-lg max-w-lg w-full mx-4 p-6">
        <div class="flex item-center justify-between mx-4 border-b py-3 border-gray-200/50">
            <h2 class="text-xl font-semibold text-center">Asset Information</h2>
<button @click="openActivated = false" class="rounded-full size-7 bg-rose-500 text-white flex items-center justify-center p-2">
    &times;
</button>
        </div>
        <ul class="mt-4 text-gray-600">
            <li>
                Asset duration:  @if ( $asset->duration  > 1)
                {{$asset->duration}} months
                @else {{ $asset->duration }} month
                @endif
            </li>

            <li>
                Asset expires : {{ $asset->time_left}}
            </li>
          
            <li>
                Asset plan: {{ $asset->plan }}
            </li>
             
            <li>
                Subscription fee: &#8358;{{ $subscriptionFee }} 
                
                <span class="p-1 rounded-full bg-green-500 text-white text-xs">Paid</span>
            </li>
        </ul>
        </div>
    </div>

<div  x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" x-cloak>
        <div 
        x-show="open" 
        @click.outside="open = false"
        x-transition:enter="ease-out duration-300" 
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="ease-in duration-200" 
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="bg-white rounded-lg shadow-lg max-w-lg w-full mx-4 p-6">

        <!-- Modal Content -->
        <h2 class="text-xl font-semibold text-center">Asset Information</h2>
        <ul class="mt-4 text-gray-600">
            <li>
                Asset duration:  @if ( $asset->duration  > 1)
                {{$asset->duration}} months
                @else {{ $asset->duration }} month
                @endif
            </li>
          
            <li>
                Asset plan: {{ $asset->plan }}
            </li>
             
            <li>
                Subscription fee: &#8358;{{ $subscriptionFee }}
            

            </li>
        </ul>

    <div class="mt-6 text-right flex items-center justify-between">

        @php
    $whatsapp_duration_msg = ($asset->duration > 1) ? $asset->duration . ' months' :  $asset->duration . ' month';
@endphp

        <a target="_blank" 
        
        href="https://wa.me/+2348138107633?text={{ urlencode('Hi my name is ' .  $asset->user->firstname . ' ' .  $asset->user->lastname . ', I would like to make a payment for Asset ID: ' . $asset->user->uuid . ', of ' . $asset->plan . ' plan, for a duration of ' . $whatsapp_duration_msg . ', which amounts to ₦'  . $subscriptionFee) }}" 
        class="px-4 py-2 text-white bg-green-500 rounded hover:bg-green-700 block">
        Make payment
        </a>

        <button @click="open = false" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-700">
        Close
        </button>
    </div>

        </div>
</div>
</div>
   



<div class="p-2 md:p-2.5 flex gap-x-3 flex-col lg:flex-row w-full">

<div class="w-full lg:w-5/12 overflow-hidden rounded-md">
@if ($asset->pictures)
@if (count($asset->pictures) > 1)
<x-swiper-gallery :pictures="$asset->pictures" />
@else
@foreach ($asset->pictures as $picture) 
<img src="{{ asset($picture) }}" alt="" 
class="w-full h-[230px] object-cover transition-all transform hover:filter rounded-md group-hover:scale-105" draggable="false">
@endforeach 
@endif

@endif 


</div>  

<div class="w-full lg:w-7/12 flex flex-col gap-y-3">
<h2 class="text-base lg:text-2xl font-bold text-blue-600">{{ $asset->asset_information }}</h2>
<p 
style="display: -webkit-box; -webkit-box-orient: vertical;  -webkit-line-clamp: 3;"
class="text-gray-500 w-full max-h-[4.5em] overflow-hidden text-ellipsis dark:text-gray-200 relative min-h-[150px] before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 dark:before:bg-gray-600 before:-bottom-1">
{{ $asset->mineral_details }}
</p>
<p class="text-gray-500 dark:text-gray-200 relative before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 dark:before:bg-gray-600 before:-bottom-1">
</p>
<div class="flex gap-x-3 items-center">
<h1 class="text-base lg:text-2xl font-bold"><span class="text-gray-600 dark:text-gray-300">Price:</span>
<span class="text-blue-600">&#8358;{{ $asset->price }}</span>
</h1>
</div>
</div>
</div>

<div class="flex border-t-[0.5px] p-2 bg-gray-300/20 rounded-br-xl rounded-bl-xl border-gray-300/50 dark:border-gray-500 justify-between dark:text-gray-300">


@auth
@if(count($asset->pictures) > 0 )
<div x-data="{ showModal: false }">

    <button  @click="showModal = true" class="flex text-sm md:text-base gap-x-2 items-center text-white
    bg-rose-600 shadow-md shadow-rose-500/50 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
 
   <svg xmlns="http://www.w3.org/2000/svg"  class="size-4" viewBox="0 0 48 48">
       <path d="M20.5 4 A 1.50015 1.50015 0 0 0 19.066406 6L14.640625 6C12.803372 6 11.082924 6.9194511 10.064453 8.4492188L7.6972656 12L7.5 12 A 1.50015 1.50015 0 1 0 7.5 15L8.2636719 15 A 1.50015 1.50015 0 0 0 8.6523438 15.007812L11.125 38.085938C11.423352 40.868277 13.795836 43 16.59375 43L31.404297 43C34.202211 43 36.574695 40.868277 36.873047 38.085938L39.347656 15.007812 A 1.50015 1.50015 0 0 0 39.728516 15L40.5 15 A 1.50015 1.50015 0 1 0 40.5 12L40.302734 12L37.935547 8.4492188C36.916254 6.9202798 35.196001 6 33.359375 6L28.933594 6 A 1.50015 1.50015 0 0 0 27.5 4L20.5 4 z M 14.640625 9L33.359375 9C34.196749 9 34.974746 9.4162203 35.439453 10.113281L36.697266 12L11.302734 12L12.560547 10.113281 A 1.50015 1.50015 0 0 0 12.5625 10.111328C13.025982 9.4151428 13.801878 9 14.640625 9 z M 11.669922 15L36.330078 15L33.890625 37.765625C33.752977 39.049286 32.694383 40 31.404297 40L16.59375 40C15.303664 40 14.247023 39.049286 14.109375 37.765625L11.669922 15 z" fill="#ECE8E8" />
     </svg>
   
   <div>Delete asset</div>
   </button> 



<!-- Modal (Delete Confirmation Popup) -->
<div x-show="showModal" 
x-transition:enter="transition ease-out duration-300" 
x-transition:enter-start="opacity-0 scale-90" 
x-transition:enter-end="opacity-100 scale-100" 
x-transition:leave="transition ease-in duration-300" 
x-transition:leave-start="opacity-100 scale-100" 
x-transition:leave-end="opacity-0 scale-90"
class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75 z-50">

<!-- Popup Content -->
<div class="bg-white p-6 rounded-lg shadow-lg max-w-sm">
   <h2 class="text-lg font-bold mb-4">Confirm Deletion</h2>
   <p class="text-gray-700 mb-6">Are you sure you want to delete this asset?</p>

   <div class="flex justify-between">
       <!-- Cancel Button -->
       <button @click="showModal = false"
       class="flex text-sm md:text-base gap-x-2 items-center text-white
    bg-green-400 shadow-md shadow-green-500/50 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95"
            >
           Cancel
       </button>

       <form action="{{ route('assets.delete',[$asset->id]) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="flex text-sm md:text-base gap-x-2 items-center text-white
    bg-rose-600 shadow-md shadow-rose-500/50 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
 
   <svg xmlns="http://www.w3.org/2000/svg"  class="size-4" viewBox="0 0 48 48">
       <path d="M20.5 4 A 1.50015 1.50015 0 0 0 19.066406 6L14.640625 6C12.803372 6 11.082924 6.9194511 10.064453 8.4492188L7.6972656 12L7.5 12 A 1.50015 1.50015 0 1 0 7.5 15L8.2636719 15 A 1.50015 1.50015 0 0 0 8.6523438 15.007812L11.125 38.085938C11.423352 40.868277 13.795836 43 16.59375 43L31.404297 43C34.202211 43 36.574695 40.868277 36.873047 38.085938L39.347656 15.007812 A 1.50015 1.50015 0 0 0 39.728516 15L40.5 15 A 1.50015 1.50015 0 1 0 40.5 12L40.302734 12L37.935547 8.4492188C36.916254 6.9202798 35.196001 6 33.359375 6L28.933594 6 A 1.50015 1.50015 0 0 0 27.5 4L20.5 4 z M 14.640625 9L33.359375 9C34.196749 9 34.974746 9.4162203 35.439453 10.113281L36.697266 12L11.302734 12L12.560547 10.113281 A 1.50015 1.50015 0 0 0 12.5625 10.111328C13.025982 9.4151428 13.801878 9 14.640625 9 z M 11.669922 15L36.330078 15L33.890625 37.765625C33.752977 39.049286 32.694383 40 31.404297 40L16.59375 40C15.303664 40 14.247023 39.049286 14.109375 37.765625L11.669922 15 z" fill="#ECE8E8" />
     </svg>
    
   <div>Delete assets</div>
   </button> 
</form>
   
   </div>
</div>
</div>

</div>

 
@else
<a href="{{ route('upload.image',[$asset->id]) }}" class="flex text-sm md:text-base gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" width="48" height="48" viewBox="0 0 48 48">
    <path d="M36 5.0097656C34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812L8.9160156 29.183594C8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219L5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406L17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656C17.874212 39.808939 18.39521 39.50518 18.816406 39.083984L40.949219 16.949219C43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812C39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875C37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875C40.403 10.74675 40.403 13.25325 38.828125 14.828125L36.888672 16.767578L31.232422 11.111328L33.171875 9.171875C33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422L34.767578 18.888672L16.693359 36.962891C16.634729 37.021121 16.560472 37.065723 16.476562 37.089844L8.6835938 39.316406L10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531C10.933086 31.438901 10.975086 31.366709 11.037109 31.304688L29.111328 13.232422 z" fill="#ECE8E8" />
    </svg>
    
    <div>Upload asset image</div>
    </a>  
@endif

@endauth

@auth
<a href="{{ route('assets.show',[$asset->slug]) }}" class="flex text-sm md:text-base gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
<div>Preview</div>
</a>  
@endauth

@guest
<button @click="showLoginPopup = true"  class="flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
<div>View</div>
</button>
@endguest


</div>

</div>
@endforeach
</div>
@endif



</div>
</div>
</div>
</div>

@endsection

@section('app-script')
<script>
  function deleteAsset(assetId) {
    if (confirm('Are you sure you want to delete this asset?')) {
        fetch(`/assets/${assetId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Asset deleted successfully!');
                // Optionally, remove the asset from the DOM after deletion
                document.querySelector(`#asset-${assetId}`).remove();
            } else {
                alert(data.error || 'Error deleting asset.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}

</script>
@endsection
{{-- HERE 
http://127.0.0.1:8000/assets/gold-2
--}}