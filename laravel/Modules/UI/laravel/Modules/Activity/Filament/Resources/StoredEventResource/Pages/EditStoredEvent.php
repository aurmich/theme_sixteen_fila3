<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Activity\Filament\Resources\StoredEventResource;

class EditStoredEvent extends EditRecord
{
    protected static string $resource = StoredEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
