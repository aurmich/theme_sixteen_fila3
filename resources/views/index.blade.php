<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@extends('setting::layouts.master')
=======
@extends('job::layouts.master')
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
@extends('user::layouts.master')
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
@extends('media::layouts.master')
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
@extends('notify::layouts.master')
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
@extends('tenant::layouts.master')
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
@extends('gdpr::layouts.master')
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)

@section('content')
    <h1>Hello World</h1>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <p>
<<<<<<< HEAD
<<<<<<< HEAD
        This view is loaded from module: {!! config('setting.name') !!}
=======
        This view is loaded from module: {!! config('job.name') !!}
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
        This view is loaded from module: {!! config('user.name') !!}
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
    </p>
=======
    <p>Module: {!! config('media.name') !!}</p>
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
    <p>
        This view is loaded from module: {!! config('notify.name') !!}
    </p>
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
    <p>
        This view is loaded from module: {!! config('tenant.name') !!}
    </p>
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
    <p>
        This view is loaded from module: {!! config('gdpr.name') !!}
    </p>
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
@endsection
