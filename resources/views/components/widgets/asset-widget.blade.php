@foreach($assets as $asset)
<div class="flex flex-col justify-between gap-y-1 bg-white border border-gray-300/50 rounded-xl dark:bg-gray-800 dark:border-gray-700">
    <!-- Header -->
    <div class="p-2 md:p-2.5 flex justify-between items-center">
    <h2 class="text-sm md:text-base lg:text-xl text-gray-800 font-bold dark:text-gray-300">
     Agent: <a class="text-blue-600 underline" href="/assets/{{ $asset->id }}">{{ $asset->user->name }}</a>
    </h2>
    </div>
    <!-- End Header -->

    <div class="p-2 md:p-2.5 flex gap-x-3 flex-col lg:flex-row w-full">
    <div class="w-full lg:w-5/12">

    <img src="{{$asset->profile_pics}}" alt="" class="w-full h-[230px] rounded-md">

    {{-- <img src="{{ asset('./images/placeholder.jpg') }}" alt="" class="w-full h-[230px] rounded-md"> --}}
    </div>

    <div class="w-full lg:w-7/12 flex flex-col gap-y-3">
    <h2 class="text-base lg:text-2xl font-bold text-blue-600">Precious Metals</h2>
    <p class="text-gray-500 relative before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 before:-bottom-1">
{{ $asset->mineral_details }}
    <div class="flex gap-x-3 items-center">
    <h1 class="text-base lg:text-2xl font-bold text-blue-600"><span class="lowercase">For {{ $asset->asset_type }}:</span>
     &#8358;<span>{{ $asset->price }}</span>
    </h1>
    </div>
    </div>
    </div>

    <div class="flex border-t-[0.5px] p-2 bg-gray-500/20 rounded-br-xl rounded-bl-xl border-gray-300/50 justify-between dark:text-gray-300">
    <div class="flex gap-x-2 items-center">
    <div>
        Asset Type:
    </div>
    <div class="text-blue-600 font-bold">
        Gold(Au), Silver(Ag)
    </div>
    </div>
  
    <a href="{{ route('assetsmore',[3]) }}" class="flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
    <div>View</div>
    </a>
    </div>

</div>
@endforeach