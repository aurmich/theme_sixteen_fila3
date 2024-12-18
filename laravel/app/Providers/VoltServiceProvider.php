<?php

namespace App\Providers;

use Livewire\Volt\Volt;
use Modules\Xot\Datas\XotData;
use Illuminate\Support\ServiceProvider;

class VoltServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $xot = XotData::make();
        Volt::mount([
            $xot->getPubThemeViewPath('livewire'),
            $xot->getPubThemeViewPath('pages'),
            //config('livewire.view_path', resource_path('views/livewire')),
            //resource_path('views/pages'),
        ]);
    }
}
