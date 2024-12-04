<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\SnapshotResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Activity\Filament\Resources\SnapshotResource;

class CreateSnapshot extends CreateRecord
{
    protected static string $resource = SnapshotResource::class;
}
