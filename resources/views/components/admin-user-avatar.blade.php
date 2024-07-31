@props(['fname','lname'])

@php
$firstname = strtoupper(substr($fname, 0,1));
$lastname = strtoupper(substr($lname, 0,1));
$fullfirstname = $fname . " " . $lname
@endphp

<div draggable="false"
{!! $attributes->merge(['class' => 'shadow-md border-2 border-white  bg-ageno-2 relative group text-white flex justify-center items-center text-lg font-bold rounded-full']) !!}>
{{$firstname}}<span class="mx-[0.5px]"></span>{{$lastname}} 

<div class="z-[10] absolute -bottom-[40px] bg-ageno-2 border-white dark:border-slate-900 border-2 text-center transition-all text-white w-[180px] translate-y-2 group-hover:translate-y-0.5  opacity-0 group-hover:opacity-100 group-hover:z-[22] text-sm md:text-normal rounded-md py-2 font-normal px-0.5 shadow-md">
{{ $fullfirstname }}'s Profile
</div>
</div>

