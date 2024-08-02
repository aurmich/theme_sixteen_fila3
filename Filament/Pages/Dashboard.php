<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Pages;

<<<<<<< HEAD
// use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'fixcity::filament.pages.dashboard';
=======
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    // protected static string $view = 'gdpr::filament.pages.dashboard';
>>>>>>> b14a224 (up)
}
