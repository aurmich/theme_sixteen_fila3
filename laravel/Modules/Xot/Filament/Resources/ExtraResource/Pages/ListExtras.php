<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ExtraResource\Pages;

<<<<<<< HEAD
use Filament\Actions;
use Filament\Actions;
use Filament\Tables;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\ExtraResource;

class ListExtras extends XotBaseListRecords
{
=======
<<<<<<< HEAD
use Filament\Actions;
=======
>>>>>>> 5a9a90183 (up)
use Filament\Tables;
use Filament\Actions;
use Filament\Tables\Table;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseListRecords;
=======
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 5a9a90183 (up)
use Modules\Xot\Filament\Resources\ExtraResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListExtras extends XotBaseListRecords
{
<<<<<<< HEAD
=======
    
>>>>>>> 5a9a90183 (up)
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
    protected static string $resource = ExtraResource::class;

    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('model_type'),
            Tables\Columns\TextColumn::make('model_id'),
            Tables\Columns\TextColumn::make('extra_attributes'),
        ];
    }

    public function getTableFilters(): array
    {
        return [];
    }

    public function getTableActions(): array
    {
        return [
            Tables\Actions\EditAction::make(),
        ];
    }

    public function getTableBuilkActions(): array
    {
        return [
            Tables\Actions\DeleteBulkAction::make(),
        ];
    }

<<<<<<< HEAD
=======


>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
