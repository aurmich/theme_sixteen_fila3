<?php

declare(strict_types=1);

<<<<<<< HEAD
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
=======
namespace Modules\AI\Filament\Pages;
>>>>>>> dbd8492a9c (Squashed 'laravel/Modules/AI/' content from commit e3f9fcc723)

use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends XotBasePage
{
<<<<<<< HEAD
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'ai::filament.pages.setting';

>>>>>>> dbd8492a9c (Squashed 'laravel/Modules/AI/' content from commit e3f9fcc723)
    public function getHeaderWidgets(): array
    {
        $only = [
            'debugbar_enabled',
<<<<<<< HEAD
<<<<<<< HEAD
            // 'google_maps_api_key',
            'telegram_bot_token',
=======
            'google_maps_api_key',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
            'google_maps_api_key',
>>>>>>> dbd8492a9c (Squashed 'laravel/Modules/AI/' content from commit e3f9fcc723)
        ];

        return [
            EnvWidget::make(['only' => $only]),
        ];
    }
}
