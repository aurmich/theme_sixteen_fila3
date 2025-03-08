<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
@extends('blog::layouts.master')
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
@extends('cms::layouts.master')
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
@extends('rating::layouts.master')
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
@extends('geo::layouts.master')
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
@extends('fixcity::layouts.master')
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
=======
@extends('ai::layouts.master')
>>>>>>> dbd8492a9c (Squashed 'laravel/Modules/AI/' content from commit e3f9fcc723)

@section('content')
    <h1>Hello World</h1>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    <p>
        This view is loaded from module: {!! config('cms.name') !!}
    </p>
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
    <p>
        This view is loaded from module: {!! config('rating.name') !!}
    </p>
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
@endsection
=======
    <p>
        This view is loaded from module: {!! config('geo.name') !!}
    </p>
@stop
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
    <p>Module: {!! config('fixcity.name') !!}</p>
@endsection
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
=======
    <p>
        This view is loaded from module: {!! config('ai.name') !!}
    </p>
@endsection
>>>>>>> dbd8492a9c (Squashed 'laravel/Modules/AI/' content from commit e3f9fcc723)
