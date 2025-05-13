<?php

use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;
use Modules\Tenant\Services\TenantService;

<<<<<<< HEAD
<<<<<<< HEAD
// @var array
$base_middleware = [];
=======
/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=[];
>>>>>>> 7223ff2 (.)
=======
// @var array
$base_middleware = [];
>>>>>>> e8676ed (.)

name('home');
middleware($base_middleware);

new class extends Component
{
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 7223ff2 (.)
=======
>>>>>>> e8676ed (.)
};

?>

<x-layouts.marketing>
    @volt('home')
    <div>
<<<<<<< HEAD
<<<<<<< HEAD
        <x-page-content slug="home" />
=======

        {{--
        {!! $_theme->showPageContent('home') !!}
        --}}
        <x-page-content slug="home" />

>>>>>>> 7223ff2 (.)
=======
        <x-page-content slug="home" />
>>>>>>> e8676ed (.)
    </div>
    @endvolt
</x-layouts.marketing>
