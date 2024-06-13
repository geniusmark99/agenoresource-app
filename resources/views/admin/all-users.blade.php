@extends('admin.layout')
@section('admin-content')
<div class="-m-1.5 overflow-x-auto">
  <!-- Table -->
  <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
    <thead class="bg-gray-50 dark:bg-neutral-800">
      <tr>
        {{-- <th scope="col" class="ps-6 py-3 text-start">
          <label for="hs-at-with-checkboxes-main" class="flex">
            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
            <span class="sr-only">Checkbox</span>
          </label>
        </th> --}}

        <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
              Names
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-start">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
              Account Type
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-start">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
              No of Assets
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-start">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
              ID
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-start">
          <div class="flex items-center gap-x-2">
            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
              Created
            </span>
          </div>
        </th>

        <th scope="col" class="px-6 py-3 text-end"></th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
      @foreach ($users as $user)
      <tr>
        {{-- <td class="size-px whitespace-nowrap">
          <div class="ps-6 py-3">
            <label for="hs-at-with-checkboxes-1" class="flex">
              <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1">
              <span class="sr-only">Checkbox</span>
            </label>
          </div>
        </td> --}}
        <td class="size-px whitespace-nowrap">
          <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
            <div class="flex items-center gap-x-3">
              <img class="inline-block size-[38px] rounded-full" 
              src="{{ $user->profile_pics }}" alt="Image Description">
              <div class="grow">
                <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $user->firstname }} {{ $user->lastname }}</span>
                <span class="block text-sm text-gray-500 dark:text-neutral-500">{{ $user->email }}</span>
              </div>
            </div>
          </div>
        </td>
        <td class="h-px w-72 whitespace-nowrap">
          <div class="px-6 py-3">
            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $user->account_type }}</span>
            <span class="block text-sm text-gray-500 dark:text-neutral-500"></span>
          </div>
        </td>
        <td class="size-px whitespace-nowrap">
          <div class="px-6 py-3">
           @if ($user->assets->isEmpty())
           <p class="text-neutral-600 dark:text-neutral-500">User have no asset posted</p>
           @else
           <p class="text-neutral-600 dark:text-neutral-500 font-semibold">
              {{ count($user->assets) > 1 ? count($user->assets) . ' assets' : count($user->assets) . ' asset' }}
           </p>
           {{-- @foreach ($user->assets as $asset)
           {{ $asset->active ? 'Yes' : 'No' }}
        
       @endforeach --}}
           @endif
            {{-- @if($user->assets->active)  
            
            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
              Active
            </span>
            @else
            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
              Unactive
            </span>
            @endif --}}
            
          </div>
        </td>
        <td class="size-px whitespace-nowrap">
          <div class="px-6 py-3">
            <div class="flex items-center gap-x-3 dark:text-neutral-500">
              {{ $user->uuid }}
              {{-- <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div> --}}
            </div>
          </div>
        </td>
        <td class="size-px whitespace-nowrap">
          <div class="px-6 py-3">
            <span class="text-sm text-gray-500 dark:text-neutral-500">
              {{ $user->created_at }}
            </span>
          </div>
        </td>
        <td class="size-px whitespace-nowrap">
          <div class="px-6 py-1.5">
            <a href="{{ route('admin.user',[$user->uuid]) }}" class="flex items-center gap-x-2 text-sm
               text-blue-600 dark:text-white font-medium  bg-gray-100 dark:bg-ageno rounded-xl p-1.5 hover:shadow-md shadow-blue-500/50 justify-center hover:bg-blue-600 dark:hover:bg-neutral-900 hover:text-white dark:hover:text-blue-600">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-3 fill-current">
                <path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
                View
            </a>
          </div>
        </td>
      </tr>
      @endforeach
  

    





      

      

    </tbody>
  </table>
  <!-- End Table -->
</div>
@endsection