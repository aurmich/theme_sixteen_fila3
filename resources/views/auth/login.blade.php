<x-guest-layout>
    <x-auth.authentication-card>
        <x-slot name="logo">
            <x-filament-panels::logo />
        </x-slot>

        {{-- Integrazione LoginWidget Filament --}}
        @livewire(Modules\User\Filament\Widgets\LoginWidget::class)

    </x-auth.authentication-card>
</x-guest-layout>
