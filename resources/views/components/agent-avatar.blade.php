
@if (!Auth::user()->profile_pics)
<div  draggable="false"
class="shadow-md border relative group text-ageno size-[40px] flex justify-center items-center text-lg font-bold rounded-full">
{{substr($fname, 0,1)}}<span class="mx-[0.5px]"></span>{{substr($lname, 0,1)}} 
</div>
@else
<img src="{{Auth::user()->profile_pics}}" alt="{{Auth::user()->firstname}} {{Auth::user()->lastname}} Profile Pics" 
class="shadow-md border text-ageno font-mono size-10 flex justify-center items-center text-lg font-bold rounded-full">
@endif
