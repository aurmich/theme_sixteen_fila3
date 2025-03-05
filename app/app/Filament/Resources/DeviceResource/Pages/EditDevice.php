<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
=======
use Filament\Resources\Pages\EditRecord;
>>>>>>> 8501391d (up)
use Modules\User\Filament\Resources\DeviceResource;

class EditDevice extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = DeviceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
