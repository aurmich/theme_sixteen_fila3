<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaConvertResource\Pages;

<<<<<<< HEAD
use Modules\Media\Filament\Resources\MediaConvertResource;

class EditMediaConvert extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = MediaConvertResource::class;
=======
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
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
}
