<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\ActivityResource\Pages;

use Filament\Tables;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Resources\Pages\ListRecords;
use Modules\Xot\Filament\Traits\HasXotTable;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Activity\Filament\Resources\ActivityResource;

class ListActivities extends XotBaseListRecords
{
    protected static string $resource = ActivityResource::class;


    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')
                ->label('ID')
                ->sortable(),
            Tables\Columns\TextColumn::make('description')
                ->label('Description'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->sortable(),
        ];
    }
}