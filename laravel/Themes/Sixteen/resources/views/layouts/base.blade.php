<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
=======

>>>>>>> 301f685410 (.)
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
<<<<<<< HEAD

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

=======
        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
>>>>>>> 301f685410 (.)
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
<<<<<<< HEAD

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        @filamentStyles
<<<<<<< HEAD
        @vite(['resources/sass/app.scss'],'themes/One/dist')
=======
        @vite(['resources/css/app.css'],'themes/Sixteen/dist')
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
=======
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        @filamentStyles
        @vite(['resources/css/app.css'],'themes/Sixteen/dist')
>>>>>>> 301f685410 (.)

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        @yield('body')

        @livewire('notifications')

        @filamentScripts
<<<<<<< HEAD
<<<<<<< HEAD
        @vite(['resources/js/app.js'],'themes/One/dist')
    </body>
</html>
=======
        @vite(['resources/js/app.js'],'themes/Sixteen/dist')
    </body>
</html>
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
=======
        @vite(['resources/js/app.js'],'themes/Sixteen/dist')
    </body>
</html>
>>>>>>> 301f685410 (.)
