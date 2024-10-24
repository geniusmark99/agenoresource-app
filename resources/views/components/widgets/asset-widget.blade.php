@foreach($assets as $asset)
<div class="group flex flex-col relative justify-between gap-y-1 overflow-hidden bg-white border-2 border-gray-300/50 hover:border-ageno-2 rounded-xl dark:bg-gray-800 dark:border-gray-700">
<div class="p-2 md:p-2.5 flex items-center border-b font-semibold bg-ageno/5 text-ageno justify-between">
<div>
{{ $asset->asset_type_value }} asset

</div>
<div>
    {{-- {{$asset->plan}} --}}
    @switch($asset->plan)
        @case('platinum')
            <div class="flex justify-between w-full gap-x-0.5 items-center">
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
            </div>
            @break
            @case('diamond')
            <div class="flex justify-between w-full gap-x-0.5 items-center">
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="zI5~V7kqQWqczEwQDvqzya" x1="9.009" x2="38.092" y1="519.64" y2="480.734" gradientTransform="matrix(1 0 0 -1 0 526)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#zI5~V7kqQWqczEwQDvqzya)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/><radialGradient id="zI5~V7kqQWqczEwQDvqzyb" cx="20.375" cy="20.637" r="23.105" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fafafb"/><stop offset=".293" stop-color="#f6f7f8"/><stop offset=".566" stop-color="#ebecee"/><stop offset=".832" stop-color="#d8dcdf"/><stop offset="1" stop-color="#c8cdd1"/></radialGradient><path fill="url(#zI5~V7kqQWqczEwQDvqzyb)" d="M43.769,18.887l-13.378-1.413L24.913,5.186C24.737,4.79,24.368,4.593,24,4.593v32.548l11.653,6.723c0.75,0.432,1.658-0.227,1.478-1.074L34.34,29.629l9.993-9.005C44.976,20.045,44.63,18.978,43.769,18.887z"/></svg>
            </div>
            @break
            @case('gold')
            <div class="flex justify-between w-full gap-x-0.5 items-center">
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                <svg class="size-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="dy387SCudbBlR6FY1Dyrka" x1="9.009" x2="38.092" y1="6.36" y2="45.266" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#dy387SCudbBlR6FY1Dyrka)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/></svg>
                {{-- <svg class="size-3"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><linearGradient id="zI5~V7kqQWqczEwQDvqzya" x1="9.009" x2="38.092" y1="519.64" y2="480.734" gradientTransform="matrix(1 0 0 -1 0 526)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffda1c"/><stop offset="1" stop-color="#feb705"/></linearGradient><path fill="url(#zI5~V7kqQWqczEwQDvqzya)" d="M24.913,5.186l5.478,12.288l13.378,1.413c0.861,0.091,1.207,1.158,0.564,1.737l-9.993,9.005l2.791,13.161c0.18,0.847-0.728,1.506-1.478,1.074L24,37.141l-11.653,6.722c-0.75,0.432-1.657-0.227-1.478-1.074l2.791-13.161l-9.993-9.005c-0.643-0.579-0.296-1.646,0.564-1.737l13.378-1.413l5.478-12.288C23.439,4.395,24.561,4.395,24.913,5.186z"/><radialGradient id="zI5~V7kqQWqczEwQDvqzyb" cx="20.375" cy="20.637" r="23.105" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fafafb"/><stop offset=".293" stop-color="#f6f7f8"/><stop offset=".566" stop-color="#ebecee"/><stop offset=".832" stop-color="#d8dcdf"/><stop offset="1" stop-color="#c8cdd1"/></radialGradient><path fill="url(#zI5~V7kqQWqczEwQDvqzyb)" d="M43.769,18.887l-13.378-1.413L24.913,5.186C24.737,4.79,24.368,4.593,24,4.593v32.548l11.653,6.723c0.75,0.432,1.658-0.227,1.478-1.074L34.34,29.629l9.993-9.005C44.976,20.045,44.63,18.978,43.769,18.887z"/></svg> --}}
            </div>
            @break
        @default
            
    @endswitch
</div>
</div>

<div class="p-2 md:p-2.5 flex gap-x-3 flex-col lg:flex-row w-full">

<div class="w-full lg:w-5/12 overflow-hidden rounded-md">
@if ($asset->pictures)
@if (count($asset->pictures) > 1)
<x-swiper-gallery :pictures="$asset->pictures" />
@else
@foreach ($asset->pictures as $picture) 
<img src="{{ asset($picture) }}" alt="" 
class="w-full h-[230px] object-cover transition-all transform hover:filter rounded-md group-hover:scale-105" draggable="false">
@endforeach 
@endif

@endif 
</div>  

<div class="w-full lg:w-7/12 flex flex-col gap-y-3 mt-10">
<p style="display: -webkit-box; -webkit-box-orient: vertical;  -webkit-line-clamp: 3;"
class="text-gray-500 w-full max-h-[4.5em]  overflow-hidden text-ellipsis dark:text-gray-200 relative min-h-[150px] before:absolute before:content-[''] before:w-full before:h-[0.1px] before:bg-gray-200 dark:before:bg-gray-600 before:-bottom-1">
{{ $asset->mineral_details }}
</p>
<div class="flex gap-x-3 items-center">
<h1 class="text-base lg:text-2xl font-bold"><span class="text-gray-600 dark:text-gray-300">Price:</span>
<span class="text-blue-600">&#8358;{{ $asset->price }}</span>
</h1>
</div>
</div>
</div>

<div class="flex border-t-[0.5px] p-2 bg-gray-300/20 rounded-br-xl rounded-bl-xl border-gray-300/50 dark:border-gray-500 justify-between dark:text-gray-300">
<div class="flex gap-x-2 items-center">
<div class="text-xs md:text:sm text-gray-500 font-semibold dark:text-gray-100">
Ratings:
</div>
<div class="flex items-center gap-x-2">
    <div class="flex items-center gap-x-2 text-xs">
        <button id="like-btn" class="flex bg-ageno-2 text-white rounded-md items-center gapx-x-2 outline-none border-none shadow-sm p-2">
            <div>
                <svg class="size-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M36.9,19.5c-0.9-1-2.1-1.5-3.4-1.5h-9.2c-0.2,0-0.3-0.1-0.4-0.2c-0.1-0.2-0.1-0.4,0-0.6c0.8-1.8,1.3-3.4,1.7-5.4C25.9,10.7,26,10,26,9.3c0-2.9-2.2-4-3.3-4.2c-0.2,0-0.4,0-0.5,0.2c-0.1,0.1-6.4,9.2-8.9,11.7c-2.1,2-3.3,4.5-3.3,7v6.6C10,36.3,14.7,41,20.5,41h9.3c3.3,0,6-2.4,6.5-5.7L38,23.1C38.2,21.8,37.8,20.5,36.9,19.5z" />
                  </svg>
            </div>
        <div class="flex text-center">{{ $asset->likes }}</div>

        </button>
    </div>
    <div class="flex items-center gap-x-2 text-xs">
        {{-- <button id="dislike-btn" class="flex bg-rose-600 text-white rounded-md items-center gapx-x-2 outline-none border-none shadow-sm p-2">
            <div>
                  <svg  class="size-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <path d="M38,24.9l-1.7-12.2C35.9,9.4,33.1,7,29.8,7h-9.3C14.7,7,10,11.7,10,17.5v6.6c0,2.5,1.2,5,3.3,7c2.6,2.5,8.9,11.6,8.9,11.7c0.1,0.1,0.2,0.2,0.4,0.2c0,0,0.1,0,0.1,0c1.1-0.2,3.3-1.3,3.3-4.2c0-0.6-0.1-1.4-0.4-2.5c-0.4-2-0.9-3.6-1.7-5.4c-0.1-0.2-0.1-0.4,0-0.6c0.1-0.1,0.2-0.2,0.4-0.2h9.2c1.3,0,2.5-0.6,3.4-1.5C37.8,27.5,38.2,26.2,38,24.9z" />
                  </svg>
            </div>
        <div class="flex text-center">{{ $asset->dislikes }}</div>

        </button> --}}
    </div>
</div>
</div>

@auth
<a href="{{ route('assets.show',[$asset->slug]) }}" class="outset-none flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-white" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>
<div>View</div>
</a>  
@endauth

@guest
<a href="{{route('login')}}"  class="outset-none group flex gap-x-2 items-center text-white bg-blue-600 rounded-md px-2 py-1 hover:shadow-md transition-all hover:bg-opacity-95">
<svg xmlns="http://www.w3.org/2000/svg" class="hidden size-4 fill-white group-hover:block transition-all" viewBox="0 0 48 48"><path d="M23.986328 9C12.666705 9 2.6928719 16.845918 0.046875 27.126953 A 1.5002454 1.5002454 0 0 0 2.953125 27.873047C5.2331281 19.014082 14.065951 12 23.986328 12C33.906705 12 42.767507 19.01655 45.046875 27.873047 A 1.5002454 1.5002454 0 0 0 47.953125 27.126953C45.306493 16.84345 35.305951 9 23.986328 9 z M 24.001953 17C18.681885 17 14.337891 21.343999 14.337891 26.664062C14.337891 31.984127 18.681885 36.330078 24.001953 36.330078C29.322021 36.330078 33.667969 31.984126 33.667969 26.664062C33.667969 21.343999 29.322021 17 24.001953 17 z"/></svg>

<svg  class="size-4 fill-white group-hover:hidden transition-all" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
<path d="M16.085938 4C12.077347 4 8.4120791 5.626878 5.65625 8.2792969L7.0429688 9.7207031C9.4571396 7.397122 12.616528 6 16.085938 6C19.52373 6 22.655075 7.3722574 25.060547 9.6582031L26.4375 8.2089844C23.690972 5.5989301 20.058142 4 16.085938 4 z M 27.732422 14.529297C25.328915 19.038932 20.996033 22 16.068359 22C11.150761 22 6.8271852 19.053156 4.4199219 14.558594L2.65625 15.501953C3.4310162 16.948507 4.3979396 18.254863 5.5097656 19.392578L2.3007812 22.53125L3.6992188 23.960938L6.9960938 20.734375C7.866762 21.428723 8.7988317 22.035862 9.7910156 22.523438L7.7421875 27.060547L9.5644531 27.882812L11.644531 23.28125C12.739676 23.64253 13.884159 23.879004 15.066406 23.962891L15.066406 29L17.066406 29L17.066406 23.960938C18.237058 23.878176 19.369601 23.643677 20.455078 23.289062L22.337891 27.853516L24.1875 27.089844L22.308594 22.537109C23.283254 22.061749 24.208613 21.486457 25.066406 20.810547L28.210938 23.953125L29.623047 22.539062L26.560547 19.474609C27.710518 18.310688 28.701805 16.961005 29.496094 15.470703L27.732422 14.529297 z"/>
</svg>

<div>View</div>
</a>
@endguest


</div>

</div>
@endforeach