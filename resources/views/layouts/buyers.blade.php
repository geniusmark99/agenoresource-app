<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- x-data="
{show:true, 
deleteModal: false, 
previewModal: false,
previewCacModal: false,
darkMode: localStorage.getItem('darkMode') === 'true', 
sidebarOpen: false, textToCopy:  '{{Auth::user()->uuid}}', 
copied: false }"
:class="{ 'dark': darkMode }" --}}

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Agenoresource') }}</title>
@vite(['resources/css/app.css'])
@yield('app-style')
<body>
    <main>
        <x-buyer-header-widget/>
        @yield('buyer-content')
    </main>
    @yield('buyer-script')
    
</body>
</html>

