<div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:shadow-slate-700/[.7]">
    <div class="h-52 flex flex-col justify-center items-center rounded-t-xl overflow-hidden hover:bg-red-800">
     <img src="{{ asset($asset->image) }}" class="bg-no-repeat bg-contain"/>
    </div>
    <div class="p-4 md:p-6">
      <span class="block mb-1 text-xs font-semibold uppercase text-ageno-2">
        Asset type: {{ $asset->type }}
      </span>
      <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:hover:text-white">
        Description:  {{ $description }}
      </h3>
      {{-- <p class="mt-3 text-gray-500">
        Email collaboration and email service desk made easy.
      </p> --}}
    </div>
    <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-gray-700 dark:divide-gray-700">
      <a 
      href="{{$link}}"
       class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-es-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" >
        View asset
      </a>
      <div class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
      <div></div>
      <div></div>
    </div>
    </div>
  </div>