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
// @var array
$base_middleware = [];
=======
/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=[];
>>>>>>> 7223ff2 (.)

name('home');
middleware($base_middleware);

new class extends Component
{
<<<<<<< HEAD
=======

>>>>>>> 7223ff2 (.)
};

?>

<x-layouts.marketing>
    @volt('home')
    <div>
<<<<<<< HEAD
        <x-page-content slug="home" />
=======

        {{--
        {!! $_theme->showPageContent('home') !!}
        --}}
        <x-page-content slug="home" />

>>>>>>> 7223ff2 (.)
    </div>
    @endvolt
</x-layouts.marketing>
