
<div x-data="{ quantity: 1 }" class="flex gap-x-2 items-center">
    <button @click="quantity = Math.max(1, quantity - 1)" class="bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm  dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        -
    </button>
<input  x-model="quantity" disabled    {!! $attributes->merge(['class' => 'appearance-none bg-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 shadow-sm text-gray-700 text-center border border-gray-300 rounded w-[100px] py-2 px-4']) !!}>

    <button @click="quantity = quantity + 1" class="bg-gray-300  dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
        +
    </button>
<div class="bg-gray-300 italic p-2 rounded-md text-gray-400 dark:bg-gray-700 w-20 h-10 overflow-hidden">
<span>
Cadastre
</span>

<span class="-translate-y-20">
Kilometre
</span>
</div>
</div