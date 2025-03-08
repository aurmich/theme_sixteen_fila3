<?php

/**
 * --.
 */
declare(strict_types=1);

namespace Modules\User\Filament\Resources\TenantResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
use Modules\User\Filament\Resources\TenantResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditTenant extends XotBaseEditRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\TenantResource;

class EditTenant extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
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
