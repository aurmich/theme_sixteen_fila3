<?php

declare(strict_types=1);

namespace Modules\Seo\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'seo::filament.pages.dashboard';
}
