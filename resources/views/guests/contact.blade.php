@extends('layouts.general')
@section('app-title','Contact us')

@section('app-content')
<section class="bg-white dark:bg-gray-900 relative lg:px-20 nanum-gothic-extrabold font-medium">

     <div class="flex justify-center items-center mt-10">
           

            <div class="p-4 py-6 rounded-lg bg-gray-50 dark:bg-gray-800 md:p-8 ">
             <div class="mb-5">
            <p class="font-medium text-xl text-center  text-blue-500 dark:text-blue-400">Contact us</p>


            <p class="font-medium mt-3 text-gray-500 dark:text-gray-400 text-center">We’d at  <i class="text-ageno">Agenoresource</i> will love to hear from you. Please fill out this form or shoot us an email.</p>
        </div>


@if (session('success'))
<div 
x-data="{ show: true }" 
x-init="setTimeout(() => { show = false }, 5000)" 
x-show="show" 
class="fixed bottom-4 right-4 bg-ageno-2 text-white px-4 py-2 rounded shadow-md"
>
{{ session('success') }}
</div>
@endif
                 <form  method="POST" action="{{route('contact.us')}}">
                    @csrf
                    <div class="-mx-2 md:items-center md:flex">
                        <div class="flex-1 px-2 relative">
                            <label class="font-medium block mb-2 text-sm text-gray-600 dark:text-gray-200">First Name</label>
                            <input type="text" name="firstname" placeholder="John " class="font-medium block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>

                        <div class="flex-1 px-2 mt-4 md:mt-0 relative">
                            <label class="font-medium block mb-2 text-sm text-gray-600 dark:text-gray-200">Last Name</label>
                            <input type="text" name="lastname"value="{{ old('lastname') }}" placeholder="Doe" class="font-medium block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4 relative">
                        <label class="font-medium block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                        <input type="email" name="email"value="{{ old('email') }}" placeholder="johndoe@agenoresource.com" class="font-medium block w-full px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="w-full my-4 relative">
                        <label class="font-medium block mb-2 text-sm text-gray-600 dark:text-gray-200">Message</label>
                        <textarea name="message" value="{{ old('message') }}" class="font-medium block w-full h-32 px-5 py-2.5 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg md:h-56 dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                
                    </div>

                    <button  type="submit" class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Send message
                    </button>
                </form> 
            </div>
        </div>
    
   {{--  <div aria-hidden="true" class="flex absolute -top-48 start-0 -z-[1]">
        <div class="bg-purple-200 opacity-30 blur-3xl w-[1036px] h-[600px] dark:bg-purple-900 dark:opacity-20"></div>
        <div class="bg-slate-200 opacity-90 blur-3xl w-[577px] h-[300px] transform translate-y-32 dark:bg-slate-800/60"></div>
      </div> --}}

    {{-- <div class="container px-6 py-12 mx-auto"> --}}
       {{--  <div>
            <p class="font-medium text-blue-500 dark:text-blue-400">Contact us</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Chat to our friendly team</h1>

            <p class="mt-3 text-gray-500 dark:text-gray-400">We’d love to hear from you. Please fill out this form or shoot us an email.</p>
        </div> --}}

       
    {{-- </div> --}}
</section>
@endsection