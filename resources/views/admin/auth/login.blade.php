<!DOCTYPE html>
<html lang="en"
x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" :class="{ 'dark': darkMode }">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Admin: Agenoresource</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="w-full max-w-md mx-auto p-6">

    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
        <div class="p-4 sm:p-7">
          <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Admin Login</h1>
            <p class="mt-2 text-sm text-blue-600 font-medium dark:text-neutral-400">
              Welcome Agenoresource Admin
            </p>
          </div>
      
          <div class="mt-5">
            {{-- <button type="button" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
              <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
                <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
                <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
                <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
              </svg>
              Sign in with Google
            </button> 
      
            <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Or</div>
              --}}
            <form action="{{ route('admin.login') }}" method="POST" class="w-full md:max-w-sm" >
                    @csrf   
                
              <div class="grid gap-y-4">

                     <!-- Form Group -->
                     <div>
                        <label for="firstname" class="block text-sm mb-2 dark:text-white">Firstname</label>
                        <div class="relative">
                          <input type="text" id="firstname" name="firstname" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="email-error">
                          <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                            <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                          </div>
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                      </div>
                      <!-- End Form Group -->


                           <!-- Form Group -->
                     <div>
                      <label for="lastname" class="block text-sm mb-2 dark:text-white">Firstname</label>
                      <div class="relative">
                        <input type="text" id="lastname" name="lastname" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                          <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg>
                        </div>
                      </div>
                      <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                    </div>
                    <!-- End Form Group -->


                <!-- Form Group -->
                <div>
                  <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                  <div class="relative">
                    <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="email-error">
                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                      <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                  </div>
                  <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                </div>
                <!-- End Form Group -->
      
                <!-- Form Group -->
                <div>
                  <div class="flex justify-between items-center">
                    <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                    <a class="text-sm text-blue-600 decoration-2 hover:underline font-medium" href="../examples/html/recover-account.html">Forgot password?</a>
                  </div>
                  <div class="relative">
                    <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="password-error">
                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                      <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>
                    </div>
                  </div>
                  <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required</p>
                </div>
                <!-- End Form Group -->
      
                <!-- Checkbox -->
                <div class="flex items-center">
                  <div class="flex">
                    <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                  </div>
                  <div class="ms-3">
                    <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                  </div>
                </div>
                <!-- End Checkbox -->
      
                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign in</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>

    </main>
      {{-- 
<div class="bg-zinc-900">
 <section class="py-24">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
<div class="flex flex-col-reverse lg:flex-row lg:grid lg:grid-cols-2">
<div class="lg:mb-0 mb-10">
<div class="group w-full h-full">
<div class="relative h-full">
<img src="https://pagedone.io/asset/uploads/1696488602.png" alt="ContactUs tailwind section" class="w-full h-full lg:rounded-l-2xl rounded-2xl bg-blend-multiply bg-indigo-700"/>
<h1 class="font-manrope text-white text-4xl font-bold leading-10 absolute top-11 left-11"></h1>
<div class="absolute bottom-0 w-full lg:p-11 p-5">

</div>
</div>
</div>
</div>

<div class="bg-zinc-800 p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl flex flex-col justify-center items-center">
<h2 class="text-ageno text-center text-3xl font-semibold leading-10 mb-11">Admin login</h2>
<form action="{{ route('admin.login') }}" method="POST" class="w-full md:max-w-sm" >
    @csrf   

<input type="text" name="name" class="appearance-none w-full h-12 text-zinc-300 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border-2 border-zinc-500 focus:border-zinc-400 ring-0 focus:ring-0  focus:outline-none pl-4 mb-10" placeholder="Name">
<input type="email" name="email" class="w-full h-12 text-zinc-300 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border-2 border-zinc-500 focus:border-zinc-400 ring-0 focus:ring-0  focus:outline-none pl-4 mb-10" placeholder="Email">
<input type="password" name="password" class="w-full h-12 text-zinc-300 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-lg border-2 border-zinc-500 focus:border-zinc-400 ring-0 focus:ring-0  focus:outline-none pl-4 mb-10" placeholder="Password">
<button class="w-full h-12 text-white text-base font-semibold leading-6 rounded-lg transition-all duration-700 hover:bg-ageno-2 bg-ageno shadow-sm">Login</button>
</form>



</div>
</div>
</section>

</div> --}}

</body>
</html>