<!DOCTYPE html>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        <title>Module Tenant</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/tenant.css') }}"> --}}
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
        <title>Module Gdpr</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-gdpr', 'resources/assets/sass/app.scss') }} --}}
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
        <title>Module Blog</title>

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-blog', 'resources/assets/sass/app.scss') }} --}}
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)

    </head>
    <body>
        @yield('content')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/tenant.js') }}"></script> --}}
    </body>
</html>
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-gdpr', 'resources/assets/js/app.js') }} --}}
    </body>
</html>
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-blog', 'resources/assets/js/app.js') }} --}}
    </body>
</html>
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
