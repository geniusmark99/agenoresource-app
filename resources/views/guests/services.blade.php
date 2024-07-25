@extends('layouts.general')
@section('app-title','Services')
@section('app-content')
<!-- Hero -->
<div class="relative overflow-hidden">
  <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
    <div class="text-center">
      <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 dark:text-gray-200">
        Ageno resources
      </h1>

      <p class="mt-3 text-lg font-semibold md:text-2xl text-gray-900 dark:text-gray-400">
        Post mining assets and get insights from industry experts.
      </p>

      <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
      

        <!-- SVG Element -->
        <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
          <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- End SVG Element -->

        <!-- SVG Element -->
        <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
          <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round"/>
          </svg>
        </div>
        <!-- End SVG Element -->
      </div>


      {{-- Section --}}

      <div class="w-full mt-32">
        <div class="flex flex-col w-full mb-10 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-indigo-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-indigo-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Mineral Supply Chain</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-indigo-500 uppercase">------------</p>
                        {{-- <p class="mb-2 text-gray-600">
                            At Agenoresource, we streamline the mineral supply chain to ensure the efficient and timely delivery of precious stones and minerals. Our robust network and logistics capabilities guarantee that our customers receive high-quality minerals, such as gold, cobalt, silver, and diamonds, from reliable sources around the globe.
                        </p> --}}
                        <p class="mb-2 text-gray-600">
                            At Agenoresource, We create the link between the buyer and seller of mineral assets whether locally or globally. We have strong partnership with renowned logistics companies locally and globally that aid the safe, seamless and smooth movement of minerals from one location to another.
The types of minerals acceptable or that can be listed are: Lithium, tantalite, columbite, tin, tungsten (wolframite), nickel, cobalt, manganese, lead, beryl, tourmaline, rose quartz, amethyst, citrine,  zinc, gold, etc.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-purple-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-purple-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Mining Assets For Sale</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-purple-500 uppercase">------------</p>
                        {{-- <p class="mb-2 text-gray-600">
                            Explore our extensive inventory of mining assets for sale. From high-yield mineral deposits to fully operational mines, we offer a range of assets that cater to both small and large-scale mining operations. Invest with confidence and secure valuable resources to meet your business needs.
                        </p> --}}
                        <ul class="flex flex-col justify-start items-start">
                            <li class="flex flex-col justify-start items-start">
                                <h1 class="font-semibold">
                                    Mining asset (for sale):
                                </h1>
                                <p class="mb-2 text-gray-600">
                                    Here asset operators or owners can list their assets for outright purchase. You can add some good images that will appeal to viewers.
                                </p>
                            </li>

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full mb-5 sm:flex-row">
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-blue-400 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-blue-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Mining Assets For Lease</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-blue-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">
                            We provide flexible leasing options for mining assets, allowing you to access essential resources without the upfront investment. Whether you need short-term access to a mining site or long-term leasing solutions, our tailored plans are designed to support your operational requirements and maximize your productivity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full mb-10 sm:mb-0 sm:w-1/2">
                <div class="relative h-full ml-0 mr-0 sm:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-yellow-400 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-yellow-400 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Manpower Deployment/Supply</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-yellow-400 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">
                            Our comprehensive manpower deployment services ensure that you have the skilled workforce necessary to execute your mining projects efficiently. We supply experienced professionals, from engineers to technicians, who are well-versed in industry best practices and safety standards, ensuring smooth and successful operations.

                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2">
                <div class="relative h-full ml-0 md:mr-10">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800">Equipment Lease and Sales</h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                        <p class="mb-2 text-gray-600">

                            Equip your mining operations with top-of-the-line machinery and tools through our equipment lease and sales services. We offer a wide range of equipment, from heavy-duty mining trucks to precision drilling machines, available for both purchase and lease. Our flexible terms and high-quality inventory ensure you have the right tools to achieve optimal performance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

      {{-- End of Section --}}

      
    </div>
  </div>
</div>

@endsection