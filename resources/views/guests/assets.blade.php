@extends('layouts.general')
@section('app-title','Assets')
@section('app-content')

@livewire('asset-filter')


<section class="py-14 lg:py-24 relative z-0 bg-gray-50 dark:bg-gray-800 ">
<div class="diamond-pattern bg-gray-100/50 dark:bg-gray-700 mx-3 md:mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative text-center shadow-md dark:shadow-sm shadow-ageno-2/20 py-6 rounded-lg">
<h1
class="dark:text-gray-300 max-w-[700px] mx-auto text-center font-manrope font-bold text-3xl md:text-4xl  text-gray-900 mb-5 lg:text-5xl md:leading-normal">
<span class="text-ageno">Search</span> and <span class="text-ageno">Filter</span> your <span class="text-ageno">Desired</span> mining assets 
</h1>


</div>

{{-- <div x-data="{ activeTab: 'tab1' }" class="w-full mx-3 md:mx-auto max-w-7xl mt-10 bg-white shadow-lg rounded-lg p-6">
        <div class="border-b border-gray-200 overflow-x-auto">
      <nav class="flex space-x-4 w-max">
        <button @click="activeTab = 'tab1'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab1' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Diamond
        </button>
        <button @click="activeTab = 'tab2'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab2' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Gold
        </button>
        <button @click="activeTab = 'tab3'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab3' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Silver
        </button>
        <button @click="activeTab = 'tab3'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab3' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Copper
        </button>
        <button @click="activeTab = 'tab3'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab3' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Tungsten
        </button>
        <button @click="activeTab = 'tab3'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab3' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Lead
        </button>
        <button @click="activeTab = 'tab3'" :class="{ 'border-indigo-500 text-indigo-600': activeTab === 'tab3' }" class="px-3 py-2 font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 border-b-2 border-transparent focus:outline-none">
        Lithium
        </button>
      </nav>
    </div>

       <template x-if="true">
        <div class="mt-4">
          <div x-show="activeTab === 'tab1'" class="p-4">
            <h3 class="text-lg font-semibold text-gray-900">Tab 1 Content</h3>
            <p class="mt-2 text-gray-600">This is the content of the first tab.</p>
          </div>
          
          <div x-show="activeTab === 'tab2'" class="p-4">
            <h3 class="text-lg font-semibold text-gray-900">Tab 2 Content</h3>
            <p class="mt-2 text-gray-600">This is the content of the second tab.</p>
          </div>
          
          <div x-show="activeTab === 'tab3'" class="p-4">
            <h3 class="text-lg font-semibold text-gray-900">Tab 3 Content</h3>
            <p class="mt-2 text-gray-600">This is the content of the third tab.</p>
          </div>
        </div>
        </template>
</div> --}}


</section>


<div class="flex flex-col mt-4">
<h3 class=" px-4 sm:px-6 lg:px-28 text-left text-ageno lg:text-3xl font-bold dark:text-white">Top Latest assets</h3>
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
<!-- Grid -->
{{-- grid lg:grid-cols-2 gap-4 sm:gap-6 --}}
<div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-8">
<x-widgets.asset-widget :assets="$assets"/>
</div>
</div>
</div>
@endsection


