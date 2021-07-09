<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles />

</head>
<body class="antialiased">

<x-menu.mainmenu></x-menu.mainmenu>

<div class="container mx-auto py-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
            <aside class="py-6 lg:col-span-3">
                <x-menu.UserMenu></x-menu.UserMenu>

            </aside>

            {{ $slot }}

            {{--            <aside class="py-6 px-4 lg:col-span-3">--}}
            {{--                <x-sidebarRight :user="Auth()->user()->id" />--}}
            {{--            </aside>--}}
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<livewire:scripts />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>


