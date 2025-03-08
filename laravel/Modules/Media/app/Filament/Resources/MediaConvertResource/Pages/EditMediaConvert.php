<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaConvertResource\Pages;

<<<<<<< HEAD
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Media\Filament\Resources\MediaConvertResource;

class EditMediaConvert extends EditRecord
{
    protected static string $resource = MediaConvertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
=======
use Modules\Media\Filament\Resources\MediaConvertResource;

class EditMediaConvert extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = MediaConvertResource::class;
>>>>>>> origin/master
}
