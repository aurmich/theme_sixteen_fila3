<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Resources\TicketResource\Pages;

<<<<<<< HEAD
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Fixcity\Filament\Resources\TicketResource;
=======
use Modules\Fixcity\Filament\Resources\TicketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class EditTicket extends EditRecord
{
    protected static string $resource = TicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
