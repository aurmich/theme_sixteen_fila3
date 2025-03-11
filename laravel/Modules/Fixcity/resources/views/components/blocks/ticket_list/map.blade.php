<div>
     {{--  
    
    @livewire(\Modules\Geo\Filament\Widgets\OSMMapWidget::class)
    @livewire(\Modules\Geo\Filament\Widgets\LocationMapTableWidget::class)
    --}}    
    <div class="container p-4 mx-auto sm:hidden">
        <x-filament::button class="w-full py-4 bg-blue-500 hover:bg-blue-700" icon="heroicon-m-sparkles"
            href="{{ route('ticket.create', ['lang'=>$lang]) }}"
            tag="a"
            >
<<<<<<< HEAD
<<<<<<< HEAD
            {{ __('fixcity::txt.click-here-to-submit-a-new-ticket') }}
=======
            {{ __('ticket::txt.click-here-to-submit-a-new-ticket') }}
>>>>>>> origin/master
=======
            {{ __('ticket::txt.click-here-to-submit-a-new-ticket') }}
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        </x-filament::button>
    </div>

    @livewire(\Modules\Fixcity\Filament\Widgets\TicketsMapTableWidget::class)
</div>
