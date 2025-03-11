<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Providers\Filament;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Xot';
=======
namespace Modules\Job\Providers\Filament;

=======
=======
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
/**
 * ---.
 */

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\User\Providers\Filament;

use Filament\Navigation\MenuItem;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Modules\User\Filament\Pages\MyProfilePage;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
declare(strict_types=1);

namespace Modules\Media\Providers\Filament;

use Filament\Panel;
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
namespace Modules\Notify\Providers\Filament;

use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
declare(strict_types=1);

namespace Modules\Tenant\Providers\Filament;

use Filament\Panel;
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
declare(strict_types=1);

namespace Modules\UI\Providers\Filament;
=======
declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)

use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
<<<<<<< HEAD
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======
declare(strict_types=1);

namespace Modules\Activity\Providers\Filament;

use Filament\Panel;
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
=======
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $module = 'Job';
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
    protected string $module = 'User';
=======
    protected string $module = 'Media';
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
    protected string $module = 'Gdpr';
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)

    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
<<<<<<< HEAD

<<<<<<< HEAD
        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            static fn (): string => Blade::render("@livewire('socialite.buttons')"),
        );

        /*-- moved into Gdpr
        FilamentView::registerRenderHook(
            'panels::auth.login.form.after',
            fn (): string => Blade::render('@livewire(\'terms-of-service\')'),
        );
        */

        /* -- moved into Notify
        DatabaseNotifications::trigger('notifications.database-notifications-trigger');
        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            fn (): string => Blade::render('@livewire(\'database-notifications\')'),
        );
        //*/

        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            static fn (): string => Blade::render("@livewire('team.change')"),
        );

        FilamentView::registerRenderHook(
            'panels::user-menu.before',
            // static fn (): string => View::make('user::badges.super-admin')->render(),
            static fn (): string => Blade::render("@livewire('profile.super-admin')"),
        );

        /*
        $panel->renderHook(
            'panels::user-menu.before',
            fn (): string => Blade::render('@livewire(\'team.change\')'),
        );
        */
        // $tenantId = request()->route()->parameter('tenant');
        // $profile_url = MyProfilePage::getUrl(panel: 'admin');
        // $panel->default();
        // $profile_url = MyProfilePage::getUrl(panel: 'admin');
        // $panel = $panel->pages([
        //     MyProfilePage::class,
        // ]);
        // $profile_url = '#';
        // $panel->userMenuItems([
        //     // 'account' => MenuItem::make()->url($profile_url),
        //     MenuItem::make()
        //
        //         ->url(fn (): string => '#')
        //         ->icon('heroicon-m-cog-8-tooth'),
        // ]);

        return $panel;
    }
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
        return $panel;
    }
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
    protected string $module = 'Notify';

    public function panel(Panel $panel): Panel
    {
        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook(
                'panels::user-menu.before',
                static fn (): string => Blade::render('@livewire(\'database-notifications\')'),
            );
        }

        return parent::panel($panel);
    }
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
    protected string $module = 'Tenant';

    public function panel(Panel $panel): Panel
    {
        return parent::panel($panel);
    }
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    protected string $module = 'UI';

    public function panel(Panel $panel): Panel
    {
        // FilamentAsset::register(
        //     [
        //         Css::make('filament-navigation-styles', __DIR__.'/../../resources/dist/plugin.css'),
        //         Js::make('filament-navigation-scripts', __DIR__.'/../../resources/dist/plugin.js'),
        //     ],
        //     'filament-navigation'
        // );

        return parent::panel($panel);
    }
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======
    protected string $module = 'Activity';

    public function panel(Panel $panel): Panel
    {

        $panel = parent::panel($panel);

        return $panel;
    }
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
=======
        FilamentAsset::register([
            Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
            // Js::make('gdpr-scripts', __DIR__.'/../../resources/dist/assets/app2.js'),
        ], 'gdpr');

        return $panel;
    }
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
}
