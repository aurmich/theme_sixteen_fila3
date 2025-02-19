<?php

declare(strict_types=1);

namespace Modules\Fixcity\Providers;

use Illuminate\Support\Facades\Blade;
use Modules\Fixcity\Ticket\View\Components\Blocks\TicketList\Agid;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Fixcity\Ticket\Models\Ticket;
use Modules\Fixcity\Ticket\Policies\TicketPolicy;
use Illuminate\Support\Facades\Gate;

class FixcityServiceProvider extends XotBaseServiceProvider
{
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Fixcity';

    protected $policies = [
        Ticket::class => TicketPolicy::class,
    ];

    public function boot(): void
    {
        parent::boot();

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'fixcity');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'fixcity');

        // Carica le migrazioni del modulo Ticket
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations/ticket');

        // Carica le viste del modulo Ticket
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/ticket', 'ticket');

        // Carica le routes del modulo Ticket
        $this->loadRoutesFrom(__DIR__ . '/../../routes/ticket.php');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api_ticket.php');

        // Registra i componenti
        Blade::componentNamespace('Modules\\Fixcity\\View\\Components', 'fixcity');
        Blade::componentNamespace('Modules\\Fixcity\\Ticket\\View\\Components', 'ticket');
        Blade::component('fixcity-ticket-list-agid', Agid::class);

        // Pubblica le configurazioni
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('fixcity.php'),
            __DIR__ . '/../../config/ticket.php' => config_path('ticket.php'),
        ], 'config');

        // Pubblica le viste
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/fixcity'),
            __DIR__ . '/../../resources/views/ticket' => resource_path('views/vendor/ticket'),
        ], 'views');

        // Pubblica le traduzioni
        $this->publishes([
            __DIR__ . '/../../lang' => resource_path('lang/vendor/fixcity'),
            __DIR__ . '/../../lang/ticket' => resource_path('lang/vendor/ticket'),
        ], 'lang');

        // Registra le policy
        $this->registerPolicies();
    }

    public function register(): void
    {
        parent::register();
        
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php', 'fixcity'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/ticket.php', 'ticket'
        );

        // Registra i servizi del modulo Ticket
        $this->app->singleton('ticket', function ($app) {
            return new \Modules\Fixcity\Ticket\Services\TicketService();
        });
    }

    protected function registerPolicies(): void
    {
        foreach ($this->policies as $model => $policy) {
            Gate::policy($model, $policy);
        }
    }
}
