@if (!Auth::user()->govt_id || !Auth::user()->cac_document)
<div class="flex mx-6 mb-10 justify-center items-center">

  <div class="bg-rose-500 fixed z-[3000] text-white  text-center items-center border border-transparent transition-[border-color] hover:border-gray-300 dark:hover:border-gray-600 hover:shadow-md dark:border-gray-700  dark:text-gray-400 shadow-sm dark:bg-gray-800 flex justify-between w-10/12 md:w-5/12 lg:w-6/12   rounded-md py-3 px-3">
  <div class="text-sm">
    Please upload your @if (!Auth::user()->govt_id) Govt issued ID and @endif @if (!Auth::user()->cac_document) CAC @endif for Verification before you can upload assets

  </div>
   <a href="{{ route('profile.edit') }}#verified-documents" class="hover:bg-white group bg-rose-600 hover:text-rose-500 hover:shadow-lg transition-all flex gap-x-2 px-2 py-1 rounded-md items-center justify-center">
   Upload
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="size-5 fill-white group-hover:fill-rose-500">
      <path d="M24 7C16.51 7 10.330078 12.71 9.5800781 20L9 20C4.04 20 0 24.04 0 29C0 33.96 4.04 38 9 38L19.759766 38C19.589766 37.53 19.5 37.03 19.5 36.5L19.5 35L9 35C5.69 35 3 32.31 3 29C3 25.69 5.69 23 9 23L11 23C11.83 23 12.5 22.33 12.5 21.5C12.5 15.16 17.66 10 24 10C30.34 10 35.5 15.16 35.5 21.5C35.5 22.33 36.17 23 37 23L39 23C42.31 23 45 25.69 45 29C45 32.31 42.31 35 39 35L28.5 35L28.5 36.5C28.5 37.03 28.410234 37.53 28.240234 38L39 38C43.96 38 48 33.96 48 29C48 24.04 43.96 20 39 20L38.419922 20C37.669922 12.71 31.49 7 24 7 z M 23.925781 18.001953 A 1.50015 1.50015 0 0 0 22.976562 18.404297L15.476562 25.404297 A 1.50015 1.50015 0 1 0 17.523438 27.595703L22.5 22.953125L22.5 36.5 A 1.50015 1.50015 0 1 0 25.5 36.5L25.5 22.953125L30.476562 27.595703 A 1.50015 1.50015 0 1 0 32.523438 25.404297L25.023438 18.404297 A 1.50015 1.50015 0 0 0 23.925781 18.001953 z"/>
    </svg>
   </a>
  </div>
</div>
@endif

{{-- || !!Auth::user()->cac_document --}}