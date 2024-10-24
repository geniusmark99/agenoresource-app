<section>
<header>
<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
{{ __('Profile Information') }}
</h2>

<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
{{ __("Update your account's profile information and email address.") }}
</p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
@csrf
</form>




@if (session('status') === 'profile-updated')
<div 
x-data="{ show: true }" 
x-init="setTimeout(() => { show = false }, 5000)" 
x-show="show" 
class="shadow-md">
<p class="text-sm p-1 fixed right-2 bottom-10 bg-emerald-500 rounded-lg text-white">{{ __('Profile updated successfully.') }}</p>
</div>
@endif



<div class="mt-6 space-y-6 w-full relative">
{{-- @csrf
@method('patch') --}}


<div class="grid grid-cols-1 lg:grid-cols-2 w-full lg:w-[1000px] gap-y-4 lg:gap-x-10">
<form method="post" action="{{ route('profile.update') }}"  class="w-full flex flex-col gap-y-4">
  @csrf
@method('patch')
<div>
<x-input-label for="uuid" :value="__('Your ID')" />
<x-text-input id="uuid" name="uuid" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('uuid', $user->uuid)" required autofocus autocomplete="name" disabled />
</div>
<div>
<x-input-label for="firstname" :value="__('Firstname')" />
<x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('firstname', $user->firstname)" required autofocus autocomplete="name" />
<x-input-error class="mt-2" :messages="$errors->get('firstname')" />
</div>

<div>
<x-input-label for="lastname" :value="__('Lastname')" />
<x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('lastname', $user->lastname)" required autofocus autocomplete="name" />
<x-input-error class="mt-2" :messages="$errors->get('lastname')" />
</div>

<div>
<x-input-label for="email" :value="__('Email')" />
<x-text-input id="email" name="email" type="email" class="mt-1 block w-full dark:bg-gray-900" :value="old('email', $user->email)" required autocomplete="username" />
<x-input-error class="mt-2" :messages="$errors->get('email')" />

@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
<div>
<p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
  {{ __('Your email address is unverified.') }}

  <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
      {{ __('Click here to re-send the verification email.') }}
  </button>
</p>

@if (session('status') === 'verification-link-sent')
  <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
      {{ __('A new verification link has been sent to your email address.') }}
  </p>
@endif
</div>
@endif
</div>


<div class="mt-4">
<label for="account_type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Account Type</label>
<select id="account_type" name="account_type" class="dark:bg-gray-900 mt-1 block w-full
dark:border-gray-700 dark:focus:border-indigo-600  dark:focus:ring-ageno 
dark:text-gray-300 py-3 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
<option value="{{$user->user_type}}">{{ $user->user_type }}</option>
</select>
<x-input-error :messages="$errors->get('user_type')" class="mt-2" />

</div>


<div class="flex items-center gap-4">
<x-primary-button>{{ __('Save') }}</x-primary-button>
</div>
</form>


<div> 
  
  <div class="avatar-display my-3">
  @if (auth()->user()->profile_pics)
      <img src="{{ auth()->user()->profile_pics }}" alt="User Profile Pics" class="size-48 lg:size-20 rounded-full object-cover">
  @else
      <img src="{{ asset('images/default-avatar.png') }}" alt="User Default Avatar" class="size-10 rounded-full object-cover" 
      >
  @endif
</div>

<form
action="{{ route('profile.update.pics') }}" method="POST" enctype="multipart/form-data"
class="rounded-sm border border-gray-300 bg-white shadow-default dark:border-gray-700 dark:bg-gray-900">
  @csrf
  @method('PUT')

  <div class="form-group mt-3">
    <label for="profile_pics">Upload Profile Picture</label>
    <input type="file" name="profile_pics" class=" @error('profile_pics') @enderror" required>
    @error('profile_pics')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="bg-ageno py-2 px-3 rounded-md text-white mt-3">Upload photo</button>


</form>

<form method="post" action="{{ route('profile.businessinfo.update') }}" class="mt-4 flex flex-col gap-y-4">
@csrf
@method('patch')
<div class="relative flex flex-col gap-y-3">
<label for="Business_description">About Business</label>
<textarea id="Business_description" name="business_description"
class="p-4 pb-12 block w-full bg-gray-100 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Write about your company..."> {{ old('business_description', $user->business_description ?? '')}}
</textarea>
</div>

<div>
  <x-input-label for="business_address" :value="__('Business Address')" />
  <x-text-input id="business_address" name="business_address" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('business_address', $user->business_address)" required autofocus />
  <x-input-error class="mt-2" :messages="$errors->get('business_address')" />
</div>


{{-- <div>
  <x-input-label for="business_state" :value="__('Business State')" />
  <x-text-input id="business_state" name="business_state" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('business_state', $user->business_state)" required autofocus />
  <x-input-error class="mt-2" :messages="$errors->get('business_state')" />
</div> --}}

<div class="mt-4">
  <label for="business_state" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Business State</label>
  
  <select id="business_state" name="business_state"
  class="dark:bg-gray-900 mt-1 block w-full
  dark:border-gray-700 dark:focus:border-indigo-600  dark:focus:ring-ageno 
  dark:text-gray-300 py-3 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none
  focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
  >
    <option value="" disabled>Select a state</option>
    @foreach ($states as $state)
        <option value="{{ $state }}" {{ $currentState == $state ? 'selected' : '' }}>
            {{ $state }}
        </option>
    @endforeach
</select>
  <x-input-error :messages="$errors->get('business_state')" class="mt-2" />
  
  </div>
  
<div class="bottom-px inset-x-px p-2 ">
  <button type="submit" class="py-1 px-3 inline-flex shrink-0 justify-center items-center  rounded-lg text-white bg-blue-600 hover:bg-blue-500 focus:z-10 focus:outline-none focus:bg-blue-500">

    Update
  </button>
</div>
</form>

</div>

</div>

{{-- 
<div class="flex items-center gap-4">
<x-primary-button>{{ __('Save') }}</x-primary-button>
</div> --}}
</div>
</section>
