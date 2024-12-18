<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Activity\Filament\Resources\SnapshotResource;

class EditSnapshot extends EditRecord
{
    protected static string $resource = SnapshotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
