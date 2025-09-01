<?php

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};

middleware(['guest']);
name('login');

?>

<x-layouts.app>
    <x-slot name="title">
        {{ __('Login') }}
    </x-slot>

<<<<<<< HEAD
    @livewire(Modules\User\Filament\Widgets\Auth\LoginWidget::class)
=======
    @livewire(Modules\User\Widget\Auth\Login::class)
>>>>>>> d1c61d3 (.)
</x-layouts.app>
