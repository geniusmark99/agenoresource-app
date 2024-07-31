@props(['fname','lname'])

@php
$firstname = strtoupper(substr($fname, 0,1));
$lastname = strtoupper(substr($lname, 0,1));
@endphp

<a title="" href="{{route('profile.edit')}}" draggable="false"
{!! $attributes->merge(['class' => 'shadow-md border-2 border-white p-1 bg-ageno-2 relative group text-white size-[40px] flex justify-center items-center text-lg font-bold rounded-full']) !!}>
{{$firstname}}<span class="mx-[0.5px]"></span>{{$lastname}} 

<div class="z-[10] right-[1px] lg:right-1 absolute -bottom-[40px] bg-ageno-2 border-white border-2 text-center transition-all text-white w-[180px] translate-y-2 group-hover:translate-y-0.5  opacity-0 group-hover:opacity-100 group-hover:z-[22] text-xs rounded-md py-1.5 font-normal px-0.5 shadow-md">
Upload your profile picture
</div>
</a>

{{-- @if (!Auth::user()->profile_pics)
<a title="" href="{{route('profile.edit')}}" draggable="false"
class="shadow-md border-2 border-white p-1 bg-ageno-2 relative group text-white size-[40px] flex justify-center items-center text-lg font-bold rounded-full">
{{$firstname}}<span class="mx-[0.5px]"></span>{{$lastname}} 


<div class="z-[10] right-[1px] lg:right-1 absolute -bottom-[40px] bg-ageno-2 border-white border-2 text-center transition-all text-white w-[180px] translate-y-2 group-hover:translate-y-0.5  opacity-0 group-hover:opacity-100 group-hover:z-[22] text-xs rounded-md py-1.5 font-normal px-0.5 shadow-md">
Upload your profile picture
</div>

</a>
@else
<img src="{{Auth::user()->profile_pics}}" alt="{{Auth::user()->firstname}} {{Auth::user()->lastname}} Profile Pics" 
class="shadow-md border text-ageno font-mono size-10 flex justify-center items-center text-lg font-bold rounded-full">

@endif --}}
