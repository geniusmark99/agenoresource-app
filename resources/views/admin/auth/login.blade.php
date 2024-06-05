<x-admin-app-layout>
<div class="flex justify-center items-center h-screen">

    <div class=" w-full justify-center items-center flex">

<section class="mx-6 lg:mx-10 bg-gray-100/50 p-4 rounded-xl border shadow-md w-full lg:w-[400px] flex justify-center flex-col gap-y-10 ">
    <h1 class="text-center text-2xl font-bold">Admin</h1>
<form action="{{ route('admin.login') }}" method="POST" class="flex flex-col gap-y-4" >
@csrf

<!--Admin  --> 
<div>
    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">
    Name
    </label>
    <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" 
    id="name" type="text" name="name" required="required" autofocus="autofocus">
    </div>

<!-- Email Address -->
<div>
<label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">
Email
</label>
<input
class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" 
id="email" type="email" name="email" required="required" autofocus="autofocus">
</div>

<!-- Password -->
<div class="mt-4">
<label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="password">
Password
</label>

<input 
class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
 id="password" type="password" name="password" required="required" autocomplete="current-password">

</div>

<!-- Remember Me -->
{{-- <div class="block mt-4">
<label for="remember_me" class="inline-flex items-center">
<input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
<span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
</label>
</div> --}}

<div class="flex items-center justify-end mt-4">
 
<button type="submit" class="inline-flex items-center px-4 py-2 bg-ageno dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-blue-600 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ms-3">
Log in
</button>
</div>
</form>
</section>
</div>
</div>



</x-admin-app-layout>