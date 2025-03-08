<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Activity\Filament\Resources\StoredEventResource;

class CreateStoredEvent extends CreateRecord
{
    protected static string $resource = StoredEventResource::class;
}
