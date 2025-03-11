<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@extends('xot::layouts.app')
=======
@extends('job::layouts.master')
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
@extends('user::layouts.master')
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
@extends('media::layouts.master')
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
@extends('notify::layouts.master')
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
@extends('tenant::layouts.master')
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
@extends('ui::layouts.master')
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======
@extends('activity::layouts.master')
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
=======
@extends('gdpr::layouts.master')
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
@extends('lang::layouts.master')
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)

@section('content')
    <h1>Hello World</h1>

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
        This view is loaded from module: {!! config('xot.name') !!}
    </p>
@stop
=======
        This view is loaded from module: {!! config('job.name') !!}
    </p>
@endsection
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
        This view is loaded from module: {!! config('user.name') !!}
    </p>
@endsection
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
    <p>Module: {!! config('media.name') !!}</p>
@endsection
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
    <p>
        This view is loaded from module: {!! config('notify.name') !!}
    </p>
@endsection
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
    <p>
        This view is loaded from module: {!! config('tenant.name') !!}
    </p>
@endsection
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    <p>
        This view is loaded from module: {!! config('ui.name') !!}
    </p>
@endsection
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======
    <p>
        This view is loaded from module: {!! config('activity.name') !!}
    </p>
@endsection
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
=======
    <p>
        This view is loaded from module: {!! config('gdpr.name') !!}
    </p>
@endsection
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
    <p>
        This view is loaded from module: {!! config('lang.name') !!}
    </p>
@endsection
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
