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

@section('content')
    <h1>Hello World</h1>

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
