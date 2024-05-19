<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
    <div class="">
    <section>
    <header class="flex justify-between flex-col gap-y-4 lg:flex-row">
    <div>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
    {{ __('Post Assets for Partnership') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
    {{ __("Post your assets for sales and information") }}
    </p>
    </div>


    <div class="flex flex-col justify-start">
    <div class="flex gap-10">
    <div class="inline-flex items-center">
    <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="html">
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
    <label class="mt-px font-light text-gray-700 dark:text-gray-300 cursor-pointer select-none" htmlFor="html">
    Publish
    </label>
    </div>
    <div class="inline-flex items-center">
    <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="html">
    <input name="type" type="radio"
    class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border-2 border-blue-gray-200 text-white transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-indigo-900 checked:before:bg-indigo-900 hover:before:opacity-10"
    id="unpublish" />
    <span
    class="absolute text-indigo-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
    <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
    </svg>
    </span>
    </label>
    <label class="mt-px font-light text-gray-700  dark:text-gray-300 cursor-pointer select-none" htmlFor="react">
    Unpublish
    </label>
    </div>
    </div> 

    <p class="pl-3 text-xs md:text-sm lg:text-base">
    <a href="" class="text-indigo-500 underline font-thin">
    Upgrade to <b class="font-bold">premium feature</b>  this listing
    </a>
    </p>





    </div>

    </header>

    <form  class="mt-6 space-y-6" action="#" method="post">
    {{-- @csrf --}}
   
    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4">
        <x-input-label for="asset_type" :value="__('Asset Type')" />
        <x-text-input id="asset_type" name="asset_type" type="text" class="mt-1 block w-full" value="sales"   disabled autofocus />
        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>

        <div class="mb-4">
        <x-input-label for="asset_type" :value="__('Asset Name')" />
        <x-text-input id="asset_type" name="asset_name" type="text" class="mt-1 block w-full" autofocus />
        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>
    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4">
        <x-input-label for="technical_report" :value="__('Technical Report (URL)')" />
        <x-text-input id="technical_report" name="technical_report" type="text" class="mt-1 block w-full" autofocus />
        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>

        <div class="mb-4">
        <x-input-label for="asset_information" :value="__('Asset Information')" />
        <x-text-input id="asset_information" name="asset_information" type="text" class="mt-1 block w-full" autofocus />
        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>
    </div>

    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
      <div  class="mb-4">
      <x-input-label for="asset_location_details" :value="__('Assets Location Details')" />
      <x-text-input id="asset_location_details" name="asset_location_details" type="text" class="mt-1 block w-full"  autofocus />
      </div>

      <div class="mb-4">
      <x-input-label for="technical_report" :value="__('Technical Reports')" />
      <x-text-input id="technical_report" name="technical_report" type="text" class="mt-1 block w-full"  autofocus />
      <x-input-error class="mt-2" :messages="$errors->get('technical_report')" />
      </div>
  </div>

    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
        <div  class="mb-4">
        <x-input-label for="price" :value="__('Price')" />
        <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"  autofocus />
        </div>

        <div class="mb-4">
        <x-input-label for="coordinates" :value="__('Coordinates')" />
        <x-text-input id="coordinates" name="coordinates" type="text" class="mt-1 block w-full"  autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
    </div>


    <div class="grid md:grid-cols-2 w-full md:gap-x-3 lg:gap-x-5">
      <div  class="mb-4">
      <x-input-label for="reserve_deposit" :value="__('Reserve Deposit')" />
      <x-text-input id="reserve_deposit" name="reserve_deposit" type="text" class="mt-1 block w-full"  autofocus />
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
    <x-text-input id="opportunity_type" name="opportunity_type" type="text" class="mt-1 block w-full"  autofocus />
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
        <x-number-input id="land_size" name="land_size"/>
        <x-input-error class="mt-2" :messages="$errors->get('land_size')" />
        </div>

        <div class="mb-4 mt-2">
        <x-input-label for="coordinates" :value="__('Coordinates')" />
        <x-text-input id="coordinates" name="coordinates" type="text" class="mt-1 block w-full"  autofocus />
        <x-input-error class="mt-2" :messages="$errors->get('coordinates')" />
        </div>


    </div>


    <div class="grid md:grid-cols-2  w-full md:gap-x-3 lg:gap-x-5">

    <div class="mb-4 w-full">
    <x-input-label for="mineral_details" :value="__('Mineral Details')" />
    <x-input-textarea id="mineral_details" name="mineral_details" type="text" class="mt-1 block w-full"  autofocus />
    <x-input-error class="mt-2" :messages="$errors->get('mineral_details')" />
    </div>

    


    </div>


    <div class="grid md:grid-cols-2  w-full md:gap-x-3 lg:gap-x-5">

       <div class="container mx-auto py-8">
            <div x-data="{ images: [] }" class="col-span-6 ml-2 sm:col-span-4 md:mr-3" >
              <label for="image-upload" class="block text-sm font-medium text-gray-700">
                Select Images (Multiple)
              </label>
              <input id="image-upload"  type="file" accept="image/*" multiple @change="images = $event.target.files" class="mt-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
        
              <div x-show="images.length > 0" class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <template x-for="image in images">
                  <div class="relative">
                    <img :src="URL.createObjectURL(image)" alt="Uploaded Image" class="w-full h-auto rounded-lg">
                    <button @click="removeImage(image)" class="absolute top-2 right-2 text-white bg-red-500 p-1 rounded-full hover:bg-red-600 focus:outline-none focus:bg-red-600">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM5 9a1 1 0 0 1 2 0v6a1 1 0 0 1-2 0V9zm5-4a1 1 0 0 1 2 0v10a1 1 0 0 1-2 0V5zm3-1a1 1 0 0 1 1 1v9a1 1 0 0 1-2 0V5a1 1 0 0 1 1-1z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
                </template>

              </div>
            </div>
          </div> 
        
        {{-- <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
            <!-- Photo File Input -->
            <input type="file" class="hidden" x-ref="photo" x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
            ">
        
            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2 text-center" for="photo">
                Asset Image<span class="text-red-600"> </span>
            </label>
            
            <div class="text-center">
                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ asset('./images/image-placeholder.jpg') }}" class="w-40 h-40 m-auto rounded-full shadow">
                </div>
                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block w-40 h-40 rounded-md m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                    </span>
                </div>
                <button type="button" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-900 dark:text-gray-400 border border-gray-300 dark:border-gray-600 rounded-sm font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                  Add Asset Image
                </button>
            </div>
        </div> --}}


    </div>

    <div class="grid md:grid-cols-2  w-full md:gap-x-3 lg:gap-x-5">

<div x-data="{ video: null }">
    <label for="video-upload" class="block text-sm font-medium text-gray-700">
      Select Video
    </label>

    
    <input id="video-upload" type="file" accept="video/*" @change="video = $event.target.files[0]" class="mt-1 block w-full border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">

    <div x-show="video" class="mt-4">
      <video x-bind:src="URL.createObjectURL(video)" class="w-full" controls></video>
      <div @click="video = null" class="mt-2 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none focus:bg-red-600">
        Remove Video
      </div>
    </div>
  </div>
    </div>


 



    </form>
    </section>

    </div>
    </div>





    </div>
