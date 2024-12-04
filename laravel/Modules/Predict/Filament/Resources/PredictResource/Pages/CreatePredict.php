<?php

declare(strict_types=1);

namespace Modules\Predict\Filament\Resources\PredictResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Modules\Predict\Filament\Resources\PredictResource;

class CreatePredict extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = PredictResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
