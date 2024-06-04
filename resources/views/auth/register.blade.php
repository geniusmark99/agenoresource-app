<x-guest-layout>
    <h1 class="text-center text-2xl lg:text-3l font-semibold text-slate-900 dark:text-neutral-300 mb-10">Register</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Firstame -->
        <div>
            <x-input-label for="firstname" :value="__('Firstname')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Account Type -->
        <div class="mt-4">
            <label for="account_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Account Type</label>
            <select id="account_type" name="account_type" class="mt-1 block w-full py-3 px-3 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm dark:focus:border-indigo-600  dark:focus:ring-ageno focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value="seller">Seller</option>
                <option value="leaser">Leaser</option>
                <option value="partner">Partner</option>
            </select>
            <x-input-error :messages="$errors->get('account_type')" class="mt-2" />

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
              {{-- <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M5.516 6.594l.093-.083c.243-.195.572-.195.815 0l.093.083 3 3.25.083.093c.195.243.195.572 0 .815l-.083.093-3 3.25-.093.083c-.243.195-.572.195-.815 0l-.093-.083-.083-.093c-.195-.243-.195-.572 0-.815l.083-.093L8.084 10 5.61 7.072l-.093-.083c-.195-.243-.195-.572 0-.815l.083-.093-.083.093z"/>
                </svg>
              </div> --}}
            </div>
            <div class="flex flex-col gap-y-2 relative w-9/12">
                <input x-model="phoneNumber" pattern="[0-9]*" @input="filterNonNumeric" type="tel" class="w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 border border-gray-400 px-4 py-3 rounded" placeholder="Phone number">
                <span x-show="showError" class="text-red-500 absolute -bottom-[22px] text-sm right-0">*Please enter numbers only.</span>
           
            </div>
       
        </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
</x-guest-layout>
