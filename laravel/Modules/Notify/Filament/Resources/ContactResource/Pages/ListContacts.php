<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

    public function getListTableColumns(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label(''),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
