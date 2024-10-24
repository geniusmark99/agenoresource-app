@extends('admin.layout')
@section('admin-content')

<div class="container mx-auto px-4 py-6">

    @if ($notifications->isEmpty())
       
        <div class="flex justify-center items-center flex-col h-full p-6 text-center">
            <svg class="w-[12rem] mb-4 mx-auto block " width="178" height="90" viewBox="0 0 178 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="27" y="50.5" width="124" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
                <rect x="27" y="50.5" width="124" height="39" rx="7.5" stroke="currentColor" class="stroke-[#f9fafb] dark:stroke-neutral-700/10"></rect>
                <rect x="34.5" y="58" width="24" height="24" rx="4" fill="currentColor" class="fill-[#f9fafb] dark:fill-neutral-700/30"></rect>
                <rect x="66.5" y="61" width="60" height="6" rx="3" fill="currentColor" class="fill-[#f9fafb] dark:fill-neutral-700/30"></rect>
                <rect x="66.5" y="73" width="77" height="6" rx="3" fill="currentColor" class="fill-[#f9fafb] dark:fill-neutral-700/30"></rect>
                <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
                <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" stroke="currentColor" class="stroke-[#f3f4f6] dark:stroke-neutral-700/30"></rect>
                <rect x="27" y="36" width="24" height="24" rx="4" fill="currentColor" class="fill-[#f3f4f6] dark:fill-neutral-700/70"></rect>
                <rect x="59" y="39" width="60" height="6" rx="3" fill="currentColor" class="fill-[#f3f4f6] dark:fill-neutral-700/70"></rect>
                <rect x="59" y="51" width="92" height="6" rx="3" fill="currentColor" class="fill-[#f3f4f6] dark:fill-neutral-700/70"></rect>
                <g filter="url(#filter14)">
                  <rect x="12" y="6" width="154" height="40" rx="8" fill="currentColor" class="fill-white dark:fill-neutral-800" shape-rendering="crispEdges"></rect>
                  <rect x="12.5" y="6.5" width="153" height="39" rx="7.5" stroke="currentColor" class="stroke-[#f3f4f6] dark:stroke-neutral-700/60" shape-rendering="crispEdges"></rect>
                  <rect x="20" y="14" width="24" height="24" rx="4" fill="currentColor" class="fill-[#e5e7eb] dark:fill-neutral-700 "></rect>
                  <rect x="52" y="17" width="60" height="6" rx="3" fill="currentColor" class="fill-[#e5e7eb] dark:fill-neutral-700"></rect>
                  <rect x="52" y="29" width="106" height="6" rx="3" fill="currentColor" class="fill-[#e5e7eb] dark:fill-neutral-700"></rect>
                </g>
                <defs>
                  <filter id="filter14" x="0" y="0" width="178" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                    <feOffset dy="6"></feOffset>
                    <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0"></feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1187_14810"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1187_14810" result="shape"></feBlend>
                  </filter>
                </defs>
              </svg>

              <div class="max-w-[24rem] mx-auto">
                <p class="mt-2 font-[500] text-gray-500 dark:text-neutral-500">No Notification</p>
                <p class="mb-5 leading-5 text-[0.875rem] text-gray-500 dark:text-neutral-500">
                    No Notification here yet. you will see notification when there's an update.
                </p>
              </div>
        </div>
    @else
        <div class="space-y-4">
            @foreach ($notifications as $notification)
                <div class=" dark:bg-neutral-800 shadow-md rounded-lg p-4 border-l-4 border-blue-500">
                    <div class="flex justify-between items-start">
                        <div class="flex items-center">
                            <!-- Icon -->
                            <div class="bg-blue-100 dark:bg-neutral-900 text-blue-600 p-2 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 11-4 0m2 0a2 2 0 11-4 0M5 8h14v8H5V8z" />
                                </svg>
                            </div>
                            <!-- Message -->
                            <div>
                                <strong class="text-lg text-gray-900 dark:text-gray-400">{{ $notification->data['message'] }}</strong>
                                <p class="text-sm text-gray-600 dark:text-gray-500">Uploaded by: <a href="{{ $notification->data['profile_url'] }}" class="text-blue-600 hover:underline hover:text-blue-800">View Profile</a></p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-500 text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                            {{-- <form action="{{ route('admin.notifications.read', $notification->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="text-blue-500 hover:text-blue-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                </button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>




@endsection