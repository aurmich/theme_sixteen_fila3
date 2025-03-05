<?php

/**
 * --.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
use Modules\User\Filament\Resources\TenantResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditTenant extends XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\TenantResource;

class EditTenant extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> 8501391d (up)
{
    protected static string $resource = TenantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
