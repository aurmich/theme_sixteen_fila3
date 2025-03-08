<!DOCTYPE html>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <title>Module Setting</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-setting', 'resources/assets/sass/app.scss') }} --}}
=======
        <title>Module Job</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/job.css') }}"> --}}
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
        <title>Module User</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-user', 'resources/assets/sass/app.scss') }} --}}
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
        <title>Module Notify</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/notify.css') }}"> --}}
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)

    </head>
    <body>
        @yield('content')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-setting', 'resources/assets/js/app.js') }} --}}
=======
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/job.js') }}"></script> --}}
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-user', 'resources/assets/js/app.js') }} --}}
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
    </body>
</html>
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Media Module - {{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="{{ $author ?? '' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    {{-- Vite CSS --}}
    {{-- {{ module_vite('build-media', 'resources/assets/sass/app.scss') }} --}}
</head>

<body>
    @yield('content')

    {{-- Vite JS --}}
    {{-- {{ module_vite('build-media', 'resources/assets/js/app.js') }} --}}
</body>
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/notify.js') }}"></script> --}}
    </body>
</html>
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
