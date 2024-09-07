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



<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6 w-full relative">
@csrf
@method('patch')


<div class="grid grid-cols-1 lg:grid-cols-2 w-full lg:w-[1000px] gap-y-4 lg:gap-x-10">
<div class="w-full flex flex-col gap-y-4">
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
</div>

<div class="rounded-sm border border-gray-300 bg-white shadow-default dark:border-gray-700 dark:bg-gray-900">
  <div class="border-b border-gray-300 py-4 px-7 dark:border-gray-700">
  <h3 class="font-medium text-black dark:text-white">
  Your Photo
  </h3>
  </div>
  <div class="p-7" 
  x-data="{ 
  previewUrl: './images/user-profile.svg',
  updatePreview(event) {
  const file = event.target.files[0];
  if (file) {
  this.previewUrl = URL.createObjectURL(file);
  }
  },
  clearPreview() {
  this.previewUrl = 'https://via.placeholder.com/128';
  this.$refs.fileInput.value = '';
  }
  }" 
  >
  <div class="mb-4 flex items-center gap-3">
  <div class="h-14 w-14 rounded-full">
  <img 
  :src="previewUrl" 

  alt="User">
  </div>
  <div>
  <span class="mb-1.5 font-medium text-black dark:text-white">Edit your photo</span>
  <span class="flex gap-3">
  <button class="text-sm text-gray-500 dark:text-gray-400 font-medium hover:text-blue-500">
  Delete
  </button>
  <button class="text-sm text-gray-500 dark:text-gray-400 font-medium hover:text-blue-500">
  Update
  </button>
  </span>
  </div>
  </div>


  <div id="FileUpload" 

  class="relative mb-5 block w-full cursor-pointer appearance-none rounded border-2 border-dashed border-blue-600 bg-gray py-4 px-4 bg-blue-400/5 dark:bg-blue-500/5 sm:py-7.5"

  >
  <input type="file" name="profile_pics" accept="image/*" 
  x-ref="fileInput" @change="updatePreview"
  class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none">
  <div class="flex flex-col items-center justify-center space-y-3 dark:text-gray-200 font-thin">
  <span class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-gray-500 dark:bg-gray-800">
  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z" fill="#3C50E0"></path>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z" fill="#3C50E0"></path>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z" fill="#3C50E0"></path>
  </svg>
  </span>
  <p class="text-sm font-medium">
  <span class="text-blue-500">Click to upload</span>
  or drag and drop
  </p>
  <p class="mt-1.5 text-sm font-medium">
  SVG, PNG, JPG or GIF
  </p>
  <p class="text-sm font-medium">
  (max, 800px by 800px)
  </p>
  </div>



  </div>
  <div class="flex justify-end gap-4 mt-4">
  <button @click="clearPreview" class="flex justify-center rounded border border-gray-400 t py-2 px-6 font-medium text-black hover:shadow-md dark:border-gray-600 dark:text-white" >
  Cancel
  </button>
  <button class="flex justify-center rounded bg-blue-600 py-2 px-6 font-medium text-white hover:bg-opacity-90" type="submit">
  Save
  </button>
  </div>
  </div>

</div>

</div>


<div class="flex items-center gap-4">
<x-primary-button>{{ __('Save') }}</x-primary-button>





</div>
</form>
</section>
