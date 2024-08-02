<header class="border-b shadow-sm shadow-ageno/20">
 <div class="flex item-center justify-between md:justify-around md:mx-10 p-3 ">
    <a href="{{ route('home') }}" class="flex items-center outset-none flex-none text-xl font-semibold dark:text-white"  aria-label="Agenoresource">
    <x-application-logo class="size-14"/>
    <h1 class="text-cyan-600 text-[16px] w-20 lg:w-32 font-bold leading-5 p-0 m-0 text-center">
    <span class="hidden lg:block">Agenoresource</span><span>Partners</span> 
    </h1>
    </a>

    <div class="hidden md:flex justify-between items-center w-2/12">
        <ul class="flex items-center justify-between w-full">
        <li>
        <a href="{{route('about')}}" class="text-indigo-950 font-semibold hover:underline hover:text-ageno">
        About us
        </a>
        </li>

        {{-- <li>
        <a href="{{route('partner.pricing')}}" class="text-indigo-950 font-semibold hover:underline hover:text-ageno">
        Pricing
        </a>
        </li> --}}

        <li>
        <a href="{{route('contact')}}" class="text-indigo-950 font-semibold hover:underline hover:text-ageno">
        Contact us
        </a>
        </li>
        </ul>
    </div>



    <ul class="flex items-center justify-between gap-x-5">
       <li>
        <a href="{{ route('partner.login') }}" class="text-sm lg:text-base shadow-sm shadow-ageno/30 hover:bg-ageno hover:text-white rounded-md px-4 py-2 transition-all text-ageno font-semibold ">
            Log in
            </a>
       </li>

       <li class="hidden lg:block">
            <a href="#partner-register-form" class="py-2 px-4 rounded-md hover:bg-white hover:text-ageno shadow-md shadow-ageno/30 transition-all bg-ageno outset-none text-white font-semibold">
            Create a free account
            </a>
       </li>

       
       <li class="block lg:hidden ">
        <a href="#partner-register-form" class="text-sm lg:text-base  py-2 px-4 rounded-md bg-ageno outset-none text-white font-semibold">
     Register
        </a>
   </li>


    </ul>

</div>

</header>