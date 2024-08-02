<?php

declare(strict_types=1);

namespace Modules\Fixcity\Providers\Filament;

use Filament\Panel;
use Filament\SpatieLaravelTranslatablePlugin;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Pboivin\FilamentPeek\FilamentPeekPlugin;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Fixcity';

<<<<<<< HEAD
    // public function panel(Panel $panel): Panel
    // {
    //     $panel->plugins([
    //         // FilamentPeekPlugin::make(),
    //         //SpatieLaravelTranslatablePlugin::make(),
    //     ]);

    //     return parent::panel($panel);
    // }
=======
    public function panel(Panel $panel): Panel
    {
        $panel->plugins([
            // FilamentPeekPlugin::make(),
            //SpatieLaravelTranslatablePlugin::make(),
        ]);

        return parent::panel($panel);
    }
>>>>>>> b14a224 (up)
}
