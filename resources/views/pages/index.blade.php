<?php

use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;
use Modules\Tenant\Services\TenantService;

// @var array
$base_middleware = [];

name('home');
middleware($base_middleware);

new class extends Component
{
};

?>

<x-layouts.marketing>
    @volt('home')
    <div>
        <x-page-content slug="home" />
    </div>
    @endvolt
</x-layouts.marketing>
