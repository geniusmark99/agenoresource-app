<div class="relative flex-[1_0_0%]">
    <label for="hs-search-article-1" class="block text-sm text-gray-700 font-medium dark:text-white"><span class="sr-only">Search assets</span></label>
    <input 
        type="text" 
        wire:model.debounce.300ms="query"
        class="py-2.5 px-4 block w-full border-transparent rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Search assets">
    
    <div 
        class="absolute bg-white dark:bg-slate-900 border-transparent rounded-md mt-1 z-10 shadow-lg w-full" 
        x-show.transition.opacity="$wire.query"
    >
    {{-- @if($query)
            <ul>
                @foreach($results as $result)
                    <li class="px-4 py-2 hover:bg-gray-100">{{ $result->name }}</li>
                @endforeach
            </ul>
        @endif --}}
     
    </div>
</div>
