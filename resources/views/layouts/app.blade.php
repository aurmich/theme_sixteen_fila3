<<<<<<< HEAD
@extends('pub_theme::layouts.base')

@section('body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
=======
@extends('geo::layouts.plane')
@section('body')
    <div id="app">
    @yield('content')
    </div>
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
@endsection
