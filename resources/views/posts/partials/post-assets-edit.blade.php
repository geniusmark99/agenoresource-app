<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class="">
    <section>

    <header class="flex justify-between flex-col gap-y-4 lg:flex-row">
        <div>
        <h2 class="text-sm md:text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __('Edit your Post Assets') }}
        </h2>
        <p class="mt-1 text-xs md:text-sm text-gray-600 dark:text-gray-400">
        {{ __("Edit your assets") }}
        </p>
        </div>
        <div class="flex flex-col justify-start">
        <div class="flex gap-10 mb-5">
        <div class="inline-flex items-center">  
       
        <label class="mt-px font-light text-gray-700 dark:text-gray-300 cursor-pointer select-none">
        Publish
        </label>
        </div>  
        <div class="inline-flex items-center" x-data="{ open: false }">

        <button  @click="open = true" class="mt-px p-2 rounded-md bg-ageno-2 hover:bg-ageno hover:shadow-md font-light text-white outline-none focus:outline-none focus:ring-0 appearance-none dark:bg-ageno-2 dark:hover:bg-indigo-600 dark:text-gray-200 cursor-pointer select-none" >
        How to publish
        </button>
        <template x-if="true">
        <div x-show="open" 
        @click.away="open = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"
        class="fixed inset-0 flex z-[1000] items-center justify-center bg-gray-300/80 dark:bg-slate-500/30 bg-opacity-80">
        <div class="mx-4">
        <div class="bg-white dark:bg-slate-900 dark:text-gray-300 rounded-lg shadow-lg p-6 w-full lg:max-w-[500px] min-h-[400px]">
        <h2 class="text-xl font-semibold mb-4 text-center">How to publish</h2>
        <p class="mb-4">
        <ul class="list-disc space-y-2 mb-10">
        <li class="leading-7">Make your payment to Agenoresource Account based on your choosen plan (i.e Bronze,Silver,Gold,Diamond or Platinum)</li>
        <li class="leading-7">Send your payment receipt with your ID at the top of your Dashboard profile to Admin Whatsapp</li>
        <li class="leading-7">After Admin has verified your payment then your assets will be publised on our page for your potential customers to see</li>
        </ul>
        </p>
        <div class="flex justify-end">
        <button @click="open = false" class="px-4 py-2 text-white bg-ageno-2 rounded hover:bg-ageno-2/80">Close</button>
        </div>
        </div>
        </div>
        </div>

        </template>
        </div>  
        </div> 
        </div>
    </header>


<div class="rounded-md border shadow-sm mt-10 py-3 ">
   
    <div class="p-8 rounded-lg" >
     
        <form id="progressForm" method="POST" action="{{route('post.assets.update', $asset->id)}}"  enctype="multipart/form-data">
        @csrf
        {{-- @method('PUT') --}}
            <div>
              <div class="flex flex-col gap-y-4">

                <div>
                {{-- <x-input-label for="plan" :value="__('Asset Plan')" /> --}}

                <div class="gap-y-5 lg:py-4 mt-1 flex px-3 justify-start items-start flex-col lg:flex-row lg:justify-between lg:items-center bg-white dark:bg-gray-900 dark:border-gray-700 border shadow py-3 rounded-lg">
                <div class="flex items-center">
                <input id="bronze-plan" name="plan"  type="radio" value="bronze" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <label for="bronze-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Bronze Plan
                </label>
                </div>

                <div class="flex items-center">
                <input id="silver-plan" name="plan" type="radio" value="silver" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <label for="silver-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Silver Plan
                </label>
                </div>

                <div class="flex items-center"> 
                <input id="gold-plan" name="plan" type="radio" value="gold" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <label for="gold-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Gold Plan
                </label>
                </div>

                <div class="flex items-center">
                <input id="diamond-plan" name="plan" type="radio" value="diamond" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <label for="diamond-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Diamond Plan
                </label>
                </div>


                <div class="flex items-center">
                <input id="platinum-plan" name="plan" type="radio" value="platinum" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                <label for="platinum-plan" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                Platinum Plan
                </label>
                </div>
                </div>

                </div>

                <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
                    <div  class="mb-4 relative">
                    <x-input-label for="asset_type" :value="__('Asset Type')" /> 

                    {{-- 
                    
                      <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="asset_name">Asset Name</label>
            <input type="text" name="asset_name" id="asset_name" class="shadow appearance-none border 
            rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            value="{{ old('asset_name', $asset->asset_name) }}">
            @error('asset_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
                    --}}
                    <select name="asset_type" id="asset_type" class="border-gray-300 mt-1 block w-full dark:bg-gray-900 dark:border-gray-700  dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm">
                    <option value="gold">Gold</option>    
                    <option value="silver">Silver</option>    
                    <option value="diamond">Diamond</option>    
                    <option value="cobalt">Cobalt</option>    
                    <option value="lithium">Lithium</option>    
                    <option value="tantalite">Tantalite</option>    
                    <option value="comlumite">Comlumite</option>    
                    <option value="nickel">Nickel</option>    
                    <option value="mangenese">Mangenese</option>    
                    <option value="lead">Lead</option>    
                    <option value="beryl">Beryl</option>    
                    <option value="tungsten">Tungsten</option>    
                    </select>   
                    
                    
                    <x-input-error class="mt-2" :messages="$errors->get('asset_type')" />
                    </div>
                    
                    <div class="mb-4 relative">
                    <x-input-label for="asset_name" :value="__('Asset Name')" />
                    <x-text-input id="asset_name" name="asset_name" type="text" 
                     value="{{ old('asset_name', $asset->asset_name) }}"
                    class="mt-1 block w-full dark:bg-gray-900" autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('asset_name')" />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
                    <div  class="mb-4 relative">
                    <x-input-label for="technical_report" :value="__('Technical Report (URL)')" />
                    <x-text-input id="technical_report" name="technical_report" type="text" 
                    class="mt-1 block w-full dark:bg-gray-900" 
                    value="{{ old('technical_report', $asset->technical_report) }}" autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('technical_report')" />
                    </div>
                    
                    <div class="mb-4 relative">
                    <x-input-label for="asset_information" :value="__('Asset Information')" />
                    <x-text-input id="asset_information" name="asset_information" type="text" 
                    class="mt-1 block w-full dark:bg-gray-900" 
                    value="{{ old('asset_information', $asset->asset_information) }}"                    
                    autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('asset_information')" />
                    </div>
                </div>
            
            </div>

              
            </div>
            <div>
                <div class="flex flex-col gap-y-4">
                  
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

        <div class="mb-4 relative">
        <x-input-label for="asset_location_details" :value="__('Assets Location Details')" />
        <x-text-input id="asset_location_details" name="asset_location_details" type="text" 
        class="mt-1 block w-full dark:bg-gray-900" 
        value="{{ old('asset_location_details', $asset->asset_location_details) }}" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('asset_location_details')" />
        </div>

        <div class="mb-4 relative">
        <x-input-label for="geological_location" :value="__('Geological Location')" />
        <x-text-input id="geological_location" name="geological_location" type="text" 
        class="mt-1 block w-full dark:bg-gray-900" 
           value="{{ old('geological_location', $asset->geological_location) }}"
         autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('geological_location')" />
        </div>

    </div>



        
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative" x-data="{ price: '' }" >
        <x-input-label for="price" :value="__('Price')" />
        <div class="flex items-center w-full gap-x-2">
        <div class="py-2 px-3 mt-1 rounded-md border shadow-sm  text-gray-500 dark:border-gray-700 dark:bg-gray-900 font-semibold text-base">&#8358;</div>
        <input 
        x-on:input="price = price.replace(/[^0-9.]/g, '')"
        type="text"
        name="price"
        id="price"
        placeholder="0.00"
        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"
        value="{{ old('price', $asset->price) }}"
        />
        </div>
        
        <x-input-error class="mt-2" :messages="$errors->get('price')" />
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="coordinates" :value="__('Coordinates')" />
        <x-text-input id="coordinates" name="coordinates" type="text" class="mt-1 block w-full dark:bg-gray-900" 
        value="{{ old('coordinates',$asset->coordinates) }}" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('coordinates')" />
        </div>
    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4 relative">
        <x-input-label for="reserve_deposit" :value="__('Reserve Deposit')" />
        <x-text-input id="reserve_deposit" name="reserve_deposit" type="text"
        class="mt-1 block w-full dark:bg-gray-900" 
        value="{{ old('reserve_deposit',$asset->reserve_deposit) }}"         
        autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('reserve_deposit')" />
        
        </div>
        
        <div class="mb-4 relative">
        <x-input-label for="jorc_report" :value="__('JORC Report')" />
        <x-text-input id="jorc_report" name="jorc_report" type="text" class="mt-1 block w-full dark:bg-gray-900" 
        value="{{ old('jorc_report',$asset->jorc_report) }}" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('jorc_report')" />
        </div>
    </div>
    


                </div>
    
                
             
            </div>


            <div>
                <div class="flex flex-col gap-y-2">
                    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
                        <div  class="mb-4 relative">
                        <x-input-label for="opportunity_type" :value="__('Opportunity Type')" />
                        <x-text-input 
                        value="{{old('opportunity_type',$asset->opportunity_type)}}" id="opportunity_type"  name="opportunity_type" type="text" class="mt-1 block w-full dark:bg-gray-900" :value="old('opportunity_type')" autofocus />
                        </div>
                        
                        <div class="mb-4 relative">
                        <x-input-label for="land_size" :value="__('Land Size')" />
                        <div class="flex items-center gap-x-2">     
                        <div x-data="{ quantity: 1 }" class="flex gap-x-2 items-center">
                        <div @click="quantity = Math.max(1, quantity - 1)" class="cursor-pointer bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm  dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                        -
                        </div>
                        <input  x-model="quantity" name="land_size" value="{{old('land_size')}}" type="number" min="1"  class='appearance-none bg-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 shadow-sm text-gray-700 text-center border border-gray-300 rounded w-[100px] py-2 px-4'>
                        <div @click="quantity = quantity + 1" class="cursor-pointer bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                        +
                        </div>
                        </div>
                        <select
                        class="mt-1 block w-2/12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"         
                        >
                        <option value="USD">Cadastre</option>
                        <option value="USD">
                        Kilometre
                        
                        </option>
                        </select>
                        </div>
                        
                        <x-input-error class="mt-2" :messages="$errors->get('land_size')" />
                        </div>
                    </div> 
                    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
                        <div class="mb-1 w-full relative">
                        <x-input-label for="mineral_details" :value="__('Mineral Details')" />

                        <textarea id="mineral_details" name="mineral_details" rows="10"
                        type="text" 
                        value="{{old('mineral_details',$asset->mineral_details)}}"
                        class='mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm' >
                        </textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('mineral_details')" />
                        </div>
                    
                        <div class="mb-1 mt-4 w-full relative flex flex-col gap-y-10 lg:gap-y-5">
                    
                        <div>   
                        <x-input-label for="mineral_details" :value="__('Duration')" />


                        <select name="duration" id="duration" class="border-gray-300 mt-1 block w-full dark:bg-gray-900 dark:border-gray-700  dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm">
                            <option value="1 week">1 week</option>    
                           <option value="2 weeks">2 weeks</option>    
                            <option value="3 weeks">3 weeks</option>    
                             <option value="4 weeks">4 weeks</option>     
                            </select>   
                      
                        </div>
                    
                        <div class="mb-1 w-full relative">
                        <x-input-label for="contact_information" :value="__('Contact Information')" />
                        <x-text-input id="contact_information" name="contact_information" type="text"
                        class="mt-1 block w-full dark:bg-gray-900" 
                        value="{{old('contact_information',$asset->contact_information)}}"
                        autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('contact_information')" />
                        </div>
                        </div>
                    </div>


                    
                </div>

              
            </div>
            <div>


                <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

                    <label for="pictures">
                    <p>Picture</p>
                    <input type="file" name="pictures[]" id="pictures" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" multiple>
                    </label>

                    <label for="video">
                    <p>Video</p>
                    <input type="file" name="video" id="video" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </label>


                  

                </div>

              
            </div>

            <div class="flex justify-end items-center mt-5">
                <button  type="submit" class="group bg-ageno-2 text-white flex items-center gap-x-2 outset-none rounded-lg p-2 font-semibold">
                <span>
                    Update
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-4 fill-current group-hover:rotate-90 transition-all">
                    <path d="M25.970703 1.9863281 A 1.50015 1.50015 0 0 0 24.939453 2.4394531L21.068359 6.3105469 A 1.50015 1.50015 0 0 0 20.785156 6.59375L20.439453 6.9394531 A 1.50015 1.50015 0 0 0 20.439453 9.0605469L24.939453 13.560547 A 1.50015 1.50015 0 1 0 27.060547 11.439453L24.654297 9.0332031C32.649194 9.3765807 39 15.918478 39 24C39 29.075961 36.48322 33.534381 32.634766 36.251953 A 1.5002303 1.5002303 0 1 0 34.365234 38.703125C38.97678 35.446698 42 30.070039 42 24C42 14.597089 34.745957 6.8649392 25.542969 6.078125L27.060547 4.5605469 A 1.50015 1.50015 0 0 0 25.970703 1.9863281 z M 14.578125 9.0117188 A 1.50015 1.50015 0 0 0 13.634766 9.296875C9.0232192 12.553302 6 17.929961 6 24C6 33.402911 13.254043 41.135061 22.457031 41.921875L20.939453 43.439453 A 1.50015 1.50015 0 1 0 23.060547 45.560547L26.931641 41.689453 A 1.50015 1.50015 0 0 0 27.214844 41.40625L27.560547 41.060547 A 1.50015 1.50015 0 0 0 27.560547 38.939453L23.060547 34.439453 A 1.50015 1.50015 0 0 0 21.984375 33.984375 A 1.50015 1.50015 0 0 0 20.939453 36.560547L23.345703 38.966797C15.350806 38.623419 9 32.081522 9 24C9 18.924039 11.51678 14.465619 15.365234 11.748047 A 1.50015 1.50015 0 0 0 14.578125 9.0117188 z" />
                  </svg>
                </button>
             </div>

        </form>


    </div>
</div>
@session('success')
<div class="w-full flex justify-center items-center ">
<div class="max-w-[250px] whitespace-nowrap bg-teal-600 dark:bg-green-700 text-green-200 rounded-lg px-2 py-1 shadow-lg">
{{ session('success') }}
</div>
</div>
@endsession

</section>
</div>
</div>




</div>



  