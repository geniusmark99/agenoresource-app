<x-guest-layout>
    <div class="mt-6 mx-2 mb-20 px-6 py-4 bg-white border border-ageno/30 dark:bg-gray-800 shadow-sm overflow-y-auto rounded-lg">


    <div class="mb-10">
        <h1 class="text-center text-2xl lg:text-3l font-semibold text-slate-900 dark:text-neutral-300">Register</h1>
        <p class="text-xs md:text-sm lg:text-base font-semibold dark:text-neutral-200 text-center">
        Welcome to Agenoresource! 👋 Register to get started!
        </p>
        </div>
    
<div class="lg:mx-0">

    <form method="POST" action="{{ route('register') }}">
        @csrf
<div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:gap-x-4 lg:my-4">
        <!-- Firstame -->
        <div class="relative">
            <x-input-label for="firstname" :value="__('Firstname')" />
            <x-text-input id="firstname" class="dark:bg-gray-900 block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="mt-4 lg:mt-0 relative">
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" class="dark:bg-gray-900 block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

</div>

<div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:gap-x-4 lg:my-4">

        <!-- Account Type -->
        <div class="mt-4 lg:mt-2 relative">
            <label for="account_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Account Type</label>
            <select id="account_type" name="account_type" class="mt-1 block w-full py-3 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm dark:focus:border-indigo-600  dark:focus:ring-ageno focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="seller">Seller</option>
                <option value="leaser">Leaser</option>
                <option value="partner">Partner</option>
            </select>
            <x-input-error :messages="$errors->get('account_type')" class="mt-2" />

        </div>

            <!-- Email Address -->
            <div class="mt-4 lg:mt-2 relative">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="dark:bg-gray-900 block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
</div>

        <!-- Phone number-->
        <div x-data="phoneInput()" class="flex flex-col mt-4 gap-y-2">
            <label for="account_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone number</label>
<div class="flex items-center space-x-2">
            <div class="relative w-3/12">
                <select x-model="selectedCountry" @change="updatePhoneCode" class="dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <template x-for="country in countries" :key="country.code">
                      <option :value="country.code" x-text="`${country.name} (${country.dialCode})`"></option>
                    </template>
                  </select>
            
            </div>
            <div class="flex flex-col gap-y-2 relative w-9/12">
                <input x-model="phoneNumber" pattern="[0-9]*" name="phone_number" @input="filterNonNumeric" value="{{ old('phone_number')}}" type="tel" 
                class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm" placeholder="Phone number">
                <span x-show="showError" class="text-red-500 absolute -bottom-[22px] text-sm right-0">*Please enter numbers only.</span>
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
           
            </div>
       
        </div>
        </div>


    
<div class="grid grid-cols-1 lg:grid-cols-2 items-center lg:gap-x-4 lg:my-4">

        <!-- Password -->
                <div class="mt-4 relative">
                    <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="dark:bg-gray-900 block mt-1 w-full"
                            type="password"
                            name="password"
                            autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 relative">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="dark:bg-gray-900 block mt-1 w-full"
                            type="password"
                            name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 right-0" />
        </div>
</div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</div>


    </div>
</x-guest-layout>
