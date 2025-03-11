<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Providers;
=======
namespace Modules\Job\Providers;
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
    }
=======
    protected function configureEmailVerification(): void {}
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
namespace Modules\User\Providers;

use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\OtherDeviceLogout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\User\Listeners\FailedLoginListener;
use Modules\User\Listeners\LoginListener;
use Modules\User\Listeners\LogoutListener;
use Modules\User\Listeners\OtherDeviceLogoutListener;
use SocialiteProviders\Auth0\Auth0ExtendSocialite;
use SocialiteProviders\Manager\SocialiteWasCalled;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [
        SocialiteWasCalled::class => [
            Auth0ExtendSocialite::class.'@handle',
        ],
        Login::class => [
            LoginListener::class,
        ],
        Logout::class => [
            LogoutListener::class,
        ],
        Failed::class => [
            FailedLoginListener::class,
        ],
        OtherDeviceLogout::class => [
            OtherDeviceLogoutListener::class,
        ],
    ];
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
}
