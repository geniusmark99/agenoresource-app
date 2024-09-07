@extends('layouts.general-partner')
@section('app-content')
<main class="w-full max-w-lg mx-auto p-6">
    <div class="flex justify-center items-center">
        <x-application-logo class="size-20 lg:size-16"/>
    </div>

<x-partner-register-form/>
</main>
@endsection