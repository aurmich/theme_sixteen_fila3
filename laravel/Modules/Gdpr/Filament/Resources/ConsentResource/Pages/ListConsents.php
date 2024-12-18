<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ConsentResource\Pages;

use Filament\Actions;
use Modules\Gdpr\Filament\Resources\ConsentResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListConsents extends XotBaseListRecords
{
    protected static string $resource = ConsentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
