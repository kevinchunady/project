<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Project') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body class="min-h-screen bg-white antialiased font-inter flex flex-row">
        @include('layouts.sidebar')
        <div class="py-12 px-14 flex flex-col justify-between w-4/5">
            <div class="flex flex-col">
                @yield('back-button')
                @yield('header-title')
                @yield('form')
            </div>
            <div class="flex flex-row items-end justify-end">
                @yield('confirm-button')
            </div>
        </div>
    </body>
</html>
