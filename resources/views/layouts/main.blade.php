<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<div class="w-full max-w-full container">
    @include('layouts.navbar')

    @yield('content')
</div>

<body class="fonr-roboto">
    @livewireScripts
    {{-- <script>
        window.addEventListener('load', function() {
            document.querySelector('html').setAttribute('data-theme', 'light')
        });

        const swapTheme = document.getElementById('swap-theme');
        swapTheme.addEventListener('change', function(e) {
            console.log(this.checkboxValue)
            this.checkboxValue = e.target.checked ? 'dark' : 'light';
            this.checkboxValue === 'dark' ? document.querySelector('html').setAttribute('data-theme', 'dark') :
                document.querySelector('html').setAttribute('data-theme', 'light')
        });
    </script> --}}
</body>

</html>
