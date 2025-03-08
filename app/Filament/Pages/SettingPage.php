<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Filament\Pages;

use Filament\Pages\Page;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'notify::filament.pages.setting';

=======
namespace Modules\Geo\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends XotBasePage
{
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    public function getHeaderWidgets(): array
    {
        $only = [
            'debugbar_enabled',
<<<<<<< HEAD
            // 'google_maps_api_key',
            'telegram_bot_token',
=======
            'google_maps_api_key',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
        ];

        return [
            EnvWidget::make(['only' => $only]),
        ];
    }
}
