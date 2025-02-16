<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name')}}</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    @endif

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white bg-gray-100 text-gray-900 ">
    @include('layout.navbar') <!-- Add this line -->

    @yield('content')

    @include('layout.footer') <!-- Add this line -->
</body>

</html>
