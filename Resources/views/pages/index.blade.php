<?php

use function Laravel\Folio\{middleware, name};
use Filament\Notifications\Notification;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Actions\Action;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Livewire\Volt\Component;
use Modules\Tenant\Services\TenantService;

/** @var array */
//$middleware=TenantService::config('middleware');
//$base_middleware=Arr::get($middleware,'base',[]);
$base_middleware=[];

name('home');
middleware($base_middleware);



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
