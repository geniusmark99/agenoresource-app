<!doctype html>
<html x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" 
:class="{ 'dark': darkMode }">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="rgb(59 130 246)" />
<meta name="theme-color" media="(prefers-color-scheme: dark)" content="rgb(23 37 84)" />
  <title>
    Ageno resource: @yield('app-title','Home')
  </title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <style>
    
  </style>
</head>
<body class="dark:bg-gray-900">
@include('layouts.general-navigation')


<main>
@yield('app-content')
</main>

<x-general-footer/>
@yield('app-script')
</body>
</html>