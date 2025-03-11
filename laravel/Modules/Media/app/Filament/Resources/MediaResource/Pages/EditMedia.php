<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends EditRecord
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
{
    protected static string $resource = MediaResource::class;

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
