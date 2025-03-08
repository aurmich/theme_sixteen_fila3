<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Xot\Providers;
=======
/**
 * Provides event handling configuration for the Setting module.
 *
 * This class extends the base event service provider and configures the event
 * handling for the Setting module. It indicates that events should be
 * discovered, but does not define any specific event listeners.
 */

declare(strict_types=1);

namespace Modules\Setting\Providers;
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
declare(strict_types=1);

namespace Modules\Job\Providers;
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
declare(strict_types=1);

namespace Modules\Media\Providers;
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
declare(strict_types=1);

namespace Modules\Notify\Providers;
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
declare(strict_types=1);

namespace Modules\Gdpr\Providers;
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
declare(strict_types=1);

namespace Modules\Cms\Providers;
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
declare(strict_types=1);

namespace Modules\Rating\Providers;
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
declare(strict_types=1);

namespace Modules\Lang\Providers;
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
declare(strict_types=1);

namespace Modules\Geo\Providers;
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======

>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======

>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======

>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======

>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======

>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======

>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======

>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======

>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
<<<<<<< HEAD
=======
        // ...
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
    }
=======
    protected function configureEmailVerification(): void {}
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
    protected function configureEmailVerification(): void {}
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
declare(strict_types=1);

namespace Modules\Blog\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\User\Listeners\LogoutListener;
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
        Registered::class => [
            // ProfileRegisteredListener::class,
        ],

        // SocialiteWasCalled::class => [
        //     Auth0ExtendSocialite::class.'@handle',
        // ],
        Login::class => [
            // LoginListener::class,
        ],
        // Logout::class => [
        //     LogoutListener::class,
        // ],
    ];
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
}
