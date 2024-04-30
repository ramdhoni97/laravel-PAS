<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        </style>
                @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        @livewire('navigation-menu')
        <div class="relative sm:flex sm:justify-center min-h-screen bg-gradient-to-r from-cyan-500 to-blue-500"selection:text-white">
            @if (!auth()->user())    
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            </div>
            @endif
            <div class="max-w-screen w-screen mx-auto px-6">
                <div class="flex justify-center">
                    <span class="font-semibold text-4xl text-white font-bold mb-4">
                        Welcome
                    </span>
                </div>
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($images as $img)
                    <div class="grid gap-4">
                        <div>
                            <a href="/image/{{ $img->slug }}">
                                <img class="h-auto max-w-full rounded-lg dark:shadow- shadow-black shadow-md" src="{{ asset('storage/images/'.$img->image_name) }}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
