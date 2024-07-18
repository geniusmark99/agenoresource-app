<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight whitespace-nowrap md:ml-16 lg:ml-24 ">
            {{ __('Post Assets') }}
        </h2>
        <a href="{{ route('user.asset') }}" class="z-[20] mb-5 *:hover:translate-x-2 *:transition-all bg-white items-center border border-transparent transition-[border-color] hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-md dark:border-gray-700 text-gray-900 dark:text-gray-400 shadow-sm dark:bg-gray-800 flex justify-between w-40 text-sm rounded-md py-1 px-3">
    
            View all your asset
            <svg class="size-3 fill-gray-400 dark:fill-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
              <path d="M4,26h35.172l-6.586,6.586c-0.781,0.781-0.781,2.047,0,2.828C32.977,35.805,33.488,36,34,36s1.023-0.195,1.414-0.586l10-10 C45.789,25.04,46,24.531,46,24s-0.211-1.039-0.586-1.414l-10-10c-0.781-0.781-2.047-0.781-2.828,0 c-0.781,0.781-0.781,2.047,0,2.828L39.172,22H4c-1.104,0-2,0.896-2,2S2.896,26,4,26z"/>
            </svg>
        
          </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 custom-scroller">
                <div class="flex justify-center items-center w-full my-2">
                @if (session('error'))
                <div class="text-center py-2 rounded-lg w-[300px]  bg-rose-500 text-rose-300">
                {{session('error')}}
                </div>
                @endif
            </div>

            @include('posts.partials.post-assets-sales')
            </div>

            {{-- <div x-data="{
                activeTab : 'tab1',
                isActive(tab){
                    if(this.activeTab == tab){
                        return true;
                    }else{
                        return false;
                    }
                }
                }">
                <!-- Tab Navigation-->
                <div class="custom-scroller text-sm font-medium text-center overflow-x-auto overflow-y-hidden text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                    <ul class="flex flex-no-wrap -mb-px">
                        <li class="mr-2 cursor-pointer" @click="activeTab = 'tab1'">
                            <a class=" whitespace-nowrap inline-block p-4 rounded-t-lg border-b-2 border-transparent " :class="isActive('tab1') ? 'text-blue-600 border-blue-600 active ' : 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'">Post Assets for Sale</a>
                        </li>
                        <li class="mr-2 whitespace-nowrap cursor-pointer" @click="activeTab = 'tab2'">
                            <a class="inline-block p-4 rounded-t-lg border-b-2 border-transparent " :class="isActive('tab2') ? 'text-blue-600 border-blue-600 active ' : 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'">Post Assets for Lease</a>
                        </li>
                        <li class="mr-2 whitespace-nowrap cursor-pointer" @click="activeTab = 'tab3'">
                            <a class="inline-block p-4 rounded-t-lg border-b-2 border-transparent " :class="isActive('tab3') ? 'text-blue-600 border-blue-600 active ' : 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'">Post Assets for Partnership</a>
                        </li>
                        <li class="mr-2 whitespace-nowrap cursor-pointer" @click="activeTab = 'tab4'">
                            <a class="inline-block p-4 rounded-t-lg border-b-2 border-transparent " :class="isActive('tab4') ? 'text-blue-600 border-blue-600 active ' : 'hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'">Post Equipment for Lease or Sale</a>
                        </li>
                    </ul>
                </div>
                <!-- Tab Content-->
                <div class="p-5">
                    <div x-cloak="" x-show="isActive('tab1')">
                        @include('posts.partials.post-assets-sales')
                    </div>
                    <div x-cloak="" x-show="isActive('tab2')">
                        @include('posts.partials.post-assets-lease')
                    </div>
                    <div x-cloak="" x-show="isActive('tab3')">
                        @include('posts.partials.post-assets-partner')
                    </div>
                    <div x-cloak="" x-show="isActive('tab4')">
                        @include('posts.partials.post-assets-equipment')                    
                    </div>
                </div>
            </div> --}}
           
        </div>
    </div>
</x-app-layout>
