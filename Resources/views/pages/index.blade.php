<?php

use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;

name('home');
//middleware(['redirect-to-dashboard']);



new class extends Component
{
    public function test(): void
    {
        //dddx(auth()->user()->consecutiveDaysLogin());
        //Notifications::alignment(Alignment::Center);
        //Notifications::verticalAlignment(VerticalAlignment::Center);
        Notification::make()
            //->alignment(Alignment::Center)
            //->verticalAlignment(VerticalAlignment::Center)
            ->icon('heroicon-o-document-text')
            ->iconColor('success')
            ->title('Test')
            ->body('Changes to the post have been saved.')
            //->persistent()
            ->duration(5000)
            //->success()
            ->actions([
                //Action::make('view')
               //     ->button(),
                Action::make('close')
                    ->button()
                    ->icon('heroicon-o-document-text')
                    ->color('gray')
                    ->close(),
            ])
            ->send();
    }

};

?>

<x-layouts.marketing>
    @volt
    <div>
        {{--
        <span wire:init="test()"></span>
        --}}
        {!! $_theme->showPageContent('home') !!}
    </div>
    @endvolt
</x-layouts.marketing>
