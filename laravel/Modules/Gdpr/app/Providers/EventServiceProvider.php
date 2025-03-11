<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

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
    protected function configureEmailVerification(): void {}
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
}
