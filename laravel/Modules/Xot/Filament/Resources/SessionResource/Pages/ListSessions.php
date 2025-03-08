<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\SessionResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
=======
use Filament\Actions;
use Filament\Tables\Table;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Actions\DeleteBulkAction;
>>>>>>> 5a9a90183 (up)
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\SessionResource;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListSessions extends XotBaseListRecords
{
<<<<<<< HEAD
=======
    
>>>>>>> 5a9a90183 (up)
    protected static string $resource = SessionResource::class;

    public function getGridTableColumns(): array
    {
        return [
            Stack::make([
                TextColumn::make('id'),
                TextColumn::make('user_id'),
                TextColumn::make('ip_address'),
                // TextColumn::make('user_agent'),
                // TextColumn::make('payload'),
                TextColumn::make('last_activity'),
            ]),
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('user_id'),
            TextColumn::make('ip_address'),
            // TextColumn::make('user_agent'),
            // TextColumn::make('payload'),
            TextColumn::make('last_activity'),
        ];
    }
}
