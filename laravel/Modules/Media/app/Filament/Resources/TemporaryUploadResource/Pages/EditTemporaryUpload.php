<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
use Modules\Media\Filament\Resources\TemporaryUploadResource;

class EditTemporaryUpload extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\Media\Filament\Resources\TemporaryUploadResource;

class EditTemporaryUpload extends EditRecord
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
{
    protected static string $resource = TemporaryUploadResource::class;

    /**
     * @return DeleteAction[]
     *
     * @psalm-return list{DeleteAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
