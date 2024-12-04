<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Activity\Filament\Resources\ActivityResource;

class CreateActivity extends CreateRecord
{
    protected static string $resource = ActivityResource::class;
}
