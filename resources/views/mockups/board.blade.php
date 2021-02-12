<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="p-10 overflow-hidden rounded-t-xl bg-gradient-to-r from-fuchsia-50 to-fuchsia-100">
        <div class="grid grid-cols-3 gap-4 p-4 rounded-md bg-fuchsia-300 bg-stripes bg-stripes-white">
            <div class="h-12 rounded-md bg-fuchsia-400"></div>
            <div class="h-12 rounded-md bg-fuchsia-500"></div>
            <div class="h-12 rounded-md bg-fuchsia-400"></div>
            <div class="h-12 rounded-md bg-fuchsia-500"></div>
            <div class="h-12 rounded-md bg-fuchsia-400"></div>
            <div class="h-12 rounded-md bg-fuchsia-500"></div>
            <div class="h-12 rounded-md bg-fuchsia-400"></div>
            <div class="h-12 rounded-md bg-fuchsia-500"></div>
            <div class="h-12 rounded-md bg-fuchsia-400"></div>
        </div>
    </div>
</body>
</html>
