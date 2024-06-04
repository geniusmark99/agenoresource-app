<!DOCTYPE html>
    <html 
    lang="en"
    x-data="{ darkMode: localStorage.getItem('darkMode') === 'true', sidebarOpen: false }" 
:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin: </title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- @vite --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/tw.css') }}"> --}}
</head>
<body 

  x-data="{ sidebarOpen: false }" @click.outside="sidebarOpen = false"
>
    <main class="h-screen">
        {{ $slot }}
    </main>
<script src="{{ asset('js/alpine.js') }}"></script>  
<script>
       function darkMode() {
            return {
                dark: localStorage.getItem('dark') === 'true',
                toggle() {
                    this.dark = !this.dark;
                    localStorage.setItem('dark', this.dark);
                }
            }
        }

 
</script>
</body>
</html>