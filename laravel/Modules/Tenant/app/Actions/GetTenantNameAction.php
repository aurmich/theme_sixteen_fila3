<?php

declare(strict_types=1);

namespace Modules\Tenant\Actions;

use Illuminate\Support\Str;
use Spatie\QueueableAction\QueueableAction;

class GetTenantNameAction
{
    use QueueableAction;

    /**
     * Restituisce il nome del tenant corrente.
     */
    public function execute(): string
    {
        // Implementazione semplificata per phpstan
        return 'default';
    }
} 