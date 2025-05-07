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
/** @var array */
=======
// @var array
>>>>>>> 8c03ed1 (.)
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=[];
=======
// @var array
$base_middleware = [];
>>>>>>> 721b79a (.)

name('home');
middleware($base_middleware);

new class extends Component
{
};

?>

<x-layouts.marketing>
    @volt('home')
    <div>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 8c03ed1 (.)
        {{--
        {!! $_theme->showPageContent('home') !!}
        --}}
        <x-page-content slug="home" />
<<<<<<< HEAD

=======
>>>>>>> 8c03ed1 (.)
=======
        <x-page-content slug="home" />
>>>>>>> 721b79a (.)
    </div>
    @endvolt
</x-layouts.marketing>
