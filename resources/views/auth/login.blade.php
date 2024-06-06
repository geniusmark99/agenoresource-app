<x-guest-layout>

    <div class="sm:max-w-sm mt-6 mb-5 px-6 py-4 bg-white border border-ageno/30 dark:bg-gray-800 shadow-sm overflow-y-auto rounded-lg">
    <!-- Session Status -->
    <div class="mb-10">
    <h1 class="text-center text-2xl lg:text-3l font-semibold text-slate-900 dark:text-neutral-300">Login</h1>
    <p class="font-semibold dark:text-neutral-200">
    Welcome back! 👋 Login to get started!
    </p>
    </div>


    <x-auth-session-status class="mb-4" :status="session('status')" />
    

    <form method="POST" action="{{ route('login') }}" 
    >
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="dark:bg-gray-900 block mt-1 w-full placeholder:text-sm" type="email" name="email" placeholder="hello@ageno@gmail.com" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="dark:bg-gray-900 block mt-1 w-full placeholder:text-sm"
                            type="password"
                            name="password"
                            placeholder="**********"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-2">
                <a class="underline text-sm text-ageno dark:text-gray-400 hover:text-ageno-2 dark:hover:text-gray-100 rounded-md focus:outline-none" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>

        </div>
        <div class="mt-4 flex justify-between items-center">


        <button type='submit' class='w-full text-center shadow-md px-4 py-2 bg-ageno border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-100 tracking-widest hover:bg-ageno-2 dark:hover:bg-blue-600 focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'>
            {{ __('Login') }}

            </button>

            
        </div>

 
<div class="flex justify-between items-center">

    <div class="flex items-center justify-center mt-4 text-center  w-full">
        <div class="flex items-center text-sm gap-x-2 text-center dark:text-gray-100">
Not registered yet?
            <a class="underline text-sm text-ageno dark:text-gray-400 hover:text-ageno-2 dark:hover:text-gray-100 rounded-md focus:outline-none" href="{{ route('register') }}">
 Create an Account
            </a>

        </div>

    </div>

</div>

    </form>
</div>

</x-guest-layout>
