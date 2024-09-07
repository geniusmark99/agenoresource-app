@extends('layouts.general-partner')
@section('app-content')
   {{-- Header --}}
   <x-partner-navbar/>
    {{--End of Header --}}

     {{-- Partner Section    --}}
   <x-partner-section/>
   {{--End of Partner Section --}}


   {{-- Footer --}}
   <x-general-footer/>
{{-- End of Footer --}}
@endsection