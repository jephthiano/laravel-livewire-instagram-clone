<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/main.css', 'resources/css/color.css', 'resources/js/app.js'])
        
        <style>
            [x-clock]{
                display: none !important;r
            }
        </style>
    </head>
    <body class="font-sans antialiased">

        <div class="drawer lg:drawer-open">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <!-- Page content here -->
            <div class="drawer-content flex flex-col items-center justify-center">
                {{-- <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
                    Open Drawer
                </label> --}}
                {{ $slot }}
            </div>
            
            <div class="drawer-side">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                @include('layouts.components.sidebar')

            </div>
        </div>

    </body>
</html>