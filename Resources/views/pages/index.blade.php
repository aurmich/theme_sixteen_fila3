<?php

use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Livewire\Volt\Component;

name('home');
//middleware(['redirect-to-dashboard']);

new class extends Component
{
    public function test()
    {

        Notification::make()
            ->title('Test')
            ->success()
            ->send();
    }

};

?>

<x-layouts.marketing>
    <button wire:click="notify()">notify</button>
    {!! $_theme->showPageContent('home') !!}

</x-layouts.marketing>
