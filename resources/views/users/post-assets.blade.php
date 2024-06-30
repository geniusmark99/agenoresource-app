<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight whitespace-nowrap ">
            {{ __('Post Assets') }}
        </h2>
        <x-menu-desc-widget>
        Post your assets
        </x-menu-desc-widget>
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
