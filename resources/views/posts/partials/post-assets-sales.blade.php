    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class="">
    <section>
    <header class="flex justify-between flex-col gap-y-4 lg:flex-row">
    <div>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
    {{ __('Post Assets for Sales') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
    {{ __("Post your assets for sales and information") }}
    </p>
    </div>


    <div class="flex flex-col justify-start">
    <div class="flex gap-10 mb-5">
    <div class="inline-flex items-center">
    <label class="relative flex items-center p-3 rounded-full cursor-pointer" >
    <input name="type" type="radio"
    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border-2 border-blue-gray-200 text-white transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-indigo-900 checked:before:bg-indigo-900 hover:before:opacity-10"
    id="publish" />
    <span
    class="absolute text-indigo-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
    </svg>
    </span>
    </label>
    <label class="mt-px font-light text-gray-700 dark:text-gray-300 cursor-pointer select-none">
    Publish
    </label>
    </div>
    <div class="inline-flex items-center" x-data="{ open: false }">

    <button  @click="open = true" class="mt-px p-2 rounded-md bg-indigo-500 hover:bg-indigo-700 hover:shadow-md font-light text-white outline-none focus:outline-none focus:ring-0 appearance-none dark:bg-indigo-500 dark:text-gray-300 cursor-pointer select-none" >
     How to publish
    </button>

       <!-- Modal -->
        <div x-show="open" 
             @click.away="open = false"
             
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90"
             class="fixed inset-0 flex items-center justify-center bg-gray-300/80 dark:bg-slate-500/30 bg-opacity-80">
             <div class="mx-4">
            <div class="bg-white dark:bg-slate-900 dark:text-gray-300 rounded-lg shadow-lg p-6 w-full lg:max-w-[500px] min-h-[400px]">
                <h2 class="text-xl font-semibold mb-4 text-center">How to publish</h2>
                <p class="mb-4">
                    <ul class="list-disc space-y-2">
                        <li>Make your payment to Agenoresource Account based on your choosen plan</li>
                        <li>Send your payment receipt with your ID at the top of your Dashboard profile to Admin Whatsapp</li>
                        <li>After Admin has verified your payment then your assets will be publised</li>
                    </ul>
                </p>
                <div class="flex justify-end">
                    <button @click="open = false" class="px-4 py-2 text-gray-700 bg-gray-200 rounded hover:bg-gray-300">Close</button>
                </div>
            </div>
             </div>
        </div>
    </div>

   
    </div> 

    <p class="pl-3 text-xs md:text-sm lg:text-base">
    <a href="" class="text-indigo-500 underline font-thin">
    Upgrade to <b class="font-bold">premium feature</b>  this listing
    </a>
    </p>





    </div>

    </header>

    <form  class="mt-6 space-y-6" method="POST" action="{{ route('post.sale.assets') }}" >
    @csrf
   
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4">
        <x-input-label for="asset_type" :value="__('Asset Type')" />
        <x-text-input id="asset_type" name="asset_type" type="text" class="mt-1 block w-full" value="sales"   disabled autofocus />
        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>

        <div class="mb-4">
        <x-input-label for="asset_type" :value="__('Asset Name')" />
        <x-text-input id="asset_type" name="asset_name" type="text" class="mt-1 block w-full" :value="old('asset_name')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('asset_name')" />
        </div>
    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4">
        <x-input-label for="technical_report" :value="__('Technical Report (URL)')" />
        <x-text-input id="technical_report" name="technical_report" type="text" class="mt-1 block w-full" :value="old('technical_report')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('technical_report')" />
        </div>

        <div class="mb-4">
        <x-input-label for="asset_information" :value="__('Asset Information')" />
        <x-text-input id="asset_information" name="asset_information" type="text" class="mt-1 block w-full" :value="old('asset_information')" autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('asset_information')" />
        </div>
    </div>

    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
      <div  class="mb-4">
      <x-input-label for="asset_location_details" :value="__('Assets Location Details')" />
      <x-text-input id="asset_location_details" name="asset_location_details" type="text" class="mt-1 block w-full" :value="old('asset_location_details')" autofocus />
      <x-input-error class="mt-2" :messages="$errors->get('asset_location_details')" />
     
    </div>

      <div class="mb-4">
      <x-input-label for="technical_report" :value="__('Geological Location')" />
      <x-text-input id="technical_report" name="geological_location" type="text" class="mt-1 block w-full" :value="old('geological_location')" autofocus />
      <x-input-error class="mt-2" :messages="$errors->get('geological_location')" />
      </div>
  </div>

    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4" x-data="{ price: '' }" >
        <x-input-label for="price" :value="__('Price')" />
        <div class="flex items-center w-full gap-x-2">
        <select 
        class="mt-1 block w-2/12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"         
         >
         <option value="USD">NGN</option>
         <option value="USD">USD</option>
          <option value="EUR">EUR</option>
        </select>
        <input 
        x-model="price"
        x-on:input="price = price.replace(/[^0-9.]/g, '')"
        type="text"
        name="price"
        id="price"
        placeholder="0.00"
        class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-ageno dark:focus:ring-ageno rounded-md shadow-sm"
        value="{{ old('price')}}"
        >
        </div>
      
        <x-input-error class="mt-2" :messages="$errors->get('price')" />
        
      </div>

        <div class="mb-4">
        <x-input-label for="coordinates" :value="__('Coordinates')" />
        <x-text-input id="coordinates" name="coordinates" type="text" class="mt-1 block w-full"  autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('coordinates')" />
        </div>
    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
      <div  class="mb-4">
      <x-input-label for="reserve_deposit" :value="__('Reserve Deposit')" />
      <x-text-input id="reserve_deposit" name="reserve_deposit" type="text"
       class="mt-1 block w-full" :value="old('reserve_deposit')" autofocus />
       <x-input-error class="mt-2" :messages="$errors->get('reserve_deposit')" />

      </div>

      <div class="mb-4">
      <x-input-label for="jorc_report" :value="__('JORC Report')" />
      <x-text-input id="jorc_report" name="jorc_report" type="text" class="mt-1 block w-full"  autofocus />
      <x-input-error class="mt-2" :messages="$errors->get('jorc_report')" />
      </div>
  </div>

  <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
    <div  class="mb-4">
    <x-input-label for="opportunity_type" :value="__('Opportunity Type')" />
    <x-text-input value="{{old('opportunity_type')}}" id="opportunity_type"  name="opportunity_type" type="text" class="mt-1 block w-full"  autofocus />
    </div>

    <div class="mb-4">
    <x-input-label for="geological_location" :value="__('Geological Location')" />
    <x-text-input id="geological_location" name="geological_location" type="text" class="mt-1 block w-full"  autofocus />
    <x-input-error class="mt-2" :messages="$errors->get('geological_location')" />
    </div>
</div>

 

    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

        <div class="mb-4">
        <x-input-label for="land_size" :value="__('Land Size')" />
        {{-- <x-number-input id="land_size" name="land_size"/> --}}
   <div class="flex items-center gap-x-2">     
<div x-data="{ quantity: 1 }" class="flex gap-x-2 items-center">
  <div @click="quantity = Math.max(1, quantity - 1)" class="cursor-pointer bg-gray-300 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm  dark:border-gray-700 dark:bg-gray-900 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
      -
  </div>
<input  x-model="quantity" name="land_size" value="{{old('land_size')}}" type="number"  class='appearance-none bg-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 shadow-sm text-gray-700 text-center border border-gray-300 rounded w-[100px] py-2 px-4'>

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

        <div class="mb-4 mt-2">
        <x-input-label for="coordinates" :value="__('Coordinates')" />
        <x-text-input id="coordinates" name="coordinates" type="text" class="mt-1 block w-full"  autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('coordinates')" />
        </div>


    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

    <div class="mb-4 w-full">
    <x-input-label for="mineral_details" :value="__('Mineral Details')" />
    <x-input-textarea />
    <x-input-error class="mt-2" :messages="$errors->get('mineral_details')" />
    </div>

    
<div class="container mx-auto py-8">

<div x-data="imageUploader()" class="max-w-2xl mx-auto p-5 bg-white dark:bg-slate-900 rounded-lg shadow-md">
  <x-input-label for="pictures" :value="__('Upload your assets images')" class="mb-5"/>
  

  <!-- Popup Messages -->
  <div x-show="successMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-green-100 text-green-700 rounded shadow-md" x-text="successMessage" x-transition x-init="setTimeout(() => successMessage = '', 5000)"></div>
  <div x-show="errorMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-red-100 text-red-700 rounded shadow-md" x-text="errorMessage" x-transition x-init="setTimeout(() => errorMessage = '', 5000)"></div>

  

  <div class="space-y-5">
      <div
          x-ref="dropArea"
          @dragover.prevent="dragOver"
          @dragleave.prevent="dragLeave"
          @drop.prevent="handleDrop"
          class="border-2 mb-5 border-dashed border-gray-200 rounded-lg p-10 text-center cursor-pointer"
          :class="{'bg-gray-200': isDragging}"
          @click="$refs.fileInput.click()"
      >
          <p class="text-gray-500">Drag & drop images here, or click to select images</p>
          <input type="file" multiple name="pictures[]" x-ref="fileInput" @change="handleFiles" class="hidden">
      </div>

      <div class="grid grid-cols-3 gap-4 mb-5">
          <template x-for="(file, index) in files" :key="index">
              <div class="relative">
                  <img :src="file.url" class="w-full h-32 object-cover rounded-lg">
                  <button type="button" @click="removeFile(index)" 
                  title="click to remove"
                  class="absolute text-xl top-0 right-0 size-6 flex justify-center items-center hover:bg-red-700 bg-red-500 text-white p-1 rounded-full">
                      &times;
                  </button>
              </div>
          </template>
      </div>

      {{-- <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg" :disabled="files.length === 0 || files.length > 5" :class="{'opacity-50 cursor-not-allowed': files.length === 0 || files.length > 5}">
          Upload
      </button> --}}
    </div>
</div>
</div> 
    


    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">

      <div x-data="videoUploader()" class="p-5 bg-white dark:bg-slate-900 rounded-lg shadow-md">
        <x-input-label for="pictures" :value="__('Upload your assets video(s)')" class="mb-5"/>

    
        <!-- Popup Messages -->
        <div x-show="successMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-green-100 text-green-700 rounded shadow-md" x-text="successMessage" x-transition x-init="setTimeout(() => { successMessage = '' }, 5000)"></div>
        <div x-show="errorMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-red-100 text-red-700 rounded shadow-md" x-text="errorMessage" x-transition x-init="setTimeout(() => { errorMessage = '' }, 5000)"></div>
        <div x-show="warningMessage" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 p-4 bg-yellow-100 text-yellow-700 rounded shadow-md" x-text="warningMessage" x-transition x-init="setTimeout(() => { warningMessage = '' }, 5000)"></div>
    
        <div @submit.prevent="submitForm" class="space-y-5">
            <div
                x-ref="dropArea"
                @dragover.prevent="dragOver"
                @dragleave.prevent="dragLeave"
                @drop.prevent="handleDrop"
                class="border-2 border-dashed border-gray-200 rounded-lg p-10 text-center cursor-pointer"
                :class="{'bg-gray-200': isDragging}"
                @click="$refs.fileInput.click()"
            >
                <p class="text-gray-500">Drag & drop videos here, or click to select videos</p>
                <input type="file" multiple x-ref="fileInput" @change="handleFiles" accept="video/*" 
                class="hidden">
            </div>
    
            <div class="grid grid-cols-3 gap-4">
                <template x-for="(file, index) in files" :key="index">
                    <div class="relative">
                        <video class="w-full h-32 object-cover rounded-lg" controls>
                            <source :src="file.url" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <button type="button" @click="removeFile(index)" 
                        title="click to remove"
                  class="absolute text-xl top-0 right-0 size-6 flex justify-center items-center hover:bg-red-700 bg-red-500 text-white p-1 rounded-full">

                            &times;
                        </button>
                    </div>
                </template>
            </div>
{{--     
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg" :disabled="files.length === 0 || files.length > 2" :class="{'opacity-50 cursor-not-allowed': files.length === 0 || files.length > 2}">
                Upload
            </button> --}}
        </div>
    </div>
    </div>




<button type='submit' class='flex items-center justify-center text-center px-4 py-3 w-80 bg-ageno dark:bg-ageno-2 dark:hover:bg-ageno-3 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-300 uppercase tracking-widest hover:bg-indigo-600  focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'>
  Submit
</button>



    </form>
    </section>

    </div>
    </div>





    </div>
