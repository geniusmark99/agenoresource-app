<form action="{{ route('upload.govt_and_cac') }}" method="POST" enctype="multipart/form-data">
 @csrf
    

<div class="grid grid-cols-1 lg:grid-cols-2 w-full lg:w-[1000px] gap-y-4 lg:gap-x-10">

<div class="rounded-sm border overflow-hidden h-[400px] border-gray-300 bg-white shadow-default dark:border-gray-700 dark:bg-gray-900">
<div class="border-b border-gray-300 py-4 px-7 dark:border-gray-700">
<h3 class="font-medium text-black dark:text-white">
Your Govt ID
</h3>
</div>
@if(!auth()->user()->govt_id)
{{-- <form action="{{ route('upload.govtid') }}" method="POST" enctype="multipart/form-data"> 
    @csrf
    --}}
    <div class="p-7">
    <label for="govt_id">Upload Govt ID:</label>
    <input type="file" name="govt_id" accept="image/*" required id="govt_id">
    <p id="errorMsg" style="color: red;"></p>
  
    </div>
{{-- </form> --}}
@else
<div  class="w-full h-full  mb-4 flex flex-col gap-y-5">
<img src="{{ auth()->user()->govt_id }}" alt="NIN Image" class="h-[250px] object-cover">
<div class="h-[100px] flex w-full justify-end gap-x-5 pr-4">
    {{-- <form action="{{ route('delete.nin_cac','govt_id') }}" method="POST">
        
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-ageno-2 text-white h-[40px] px-4 rounded-md">Delete</button>
    </form> --}}
</div>
</div>
@endif
</div>





<div class="rounded-sm border overflow-hidden h-[400px] border-gray-300 bg-white shadow-default dark:border-gray-700 dark:bg-gray-900">
<div class="border-b border-gray-300 py-4 px-7 dark:border-gray-700">
<h3 class="font-medium text-black dark:text-white">
Your CAC Document
</h3>
</div>
@if(!auth()->user()->cac_document)
{{-- <form action="{{ route('upload.cac_document') }}" method="POST" enctype="multipart/form-data">
    @csrf --}}
    <div class="p-7">
    <label for="cac_document">Upload CAC Document:</label>
    <input type="file" name="cac_document" accept="image/*" required id="cac_document">
    <p id="errorMsg" style="color: red;"></p>
    {{-- <button class=" mt-10 flex justify-center rounded bg-blue-600 py-2 px-6 font-medium text-white hover:bg-opacity-90" type="submit">
    Upload
    </button> --}}
    </div>
{{-- </form> --}}


@else

<div  class="w-full h-full  mb-4 flex flex-col gap-y-5">
<img src="{{ auth()->user()->cac_document}}" alt="CAC Document" class="h-[250px] object-cover">

<div class="h-[100px] flex w-full justify-end gap-x-5 pr-4">
{{-- <form action="{{ route('delete.nin_cac','cac_document') }}" method="POST">
@csrf
@method('DELETE')
<button class="bg-ageno-2 text-white h-[40px] px-4 rounded-md">Delete</button>
</form> --}}
</div>
</div>
@endif
</div>


</div>

<button class=" mt-10 flex justify-center rounded bg-blue-600 py-2 px-6 font-medium text-white hover:bg-opacity-90" type="submit">
    Upload
    </button>

</form>