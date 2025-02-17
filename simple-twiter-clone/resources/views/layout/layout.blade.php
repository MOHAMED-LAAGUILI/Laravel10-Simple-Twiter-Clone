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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white bg-gray-100 text-gray-900 ">
    @include('layout.navbar') <!-- Add this line -->
<div class="mt-[50px]">
    @yield('content')
</div>

    @include('layout.footer') <!-- Add this line -->
</body>

</html>
