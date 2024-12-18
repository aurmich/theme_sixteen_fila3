<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\FailedImportRowResource\Pages;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Job\Filament\Resources\FailedImportRowResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListFailedImportRows extends XotBaseListRecords
{
    protected static string $resource = FailedImportRowResource::class;

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('data'),
            TextColumn::make('import_id'),
            TextColumn::make('validation_error'),
        ];
    }

    public function getTableFilters(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            // Tables\Actions\BulkActionGroup::make([
            Tables\Actions\DeleteBulkAction::make(),
            // ]),
        ];
    }


}
