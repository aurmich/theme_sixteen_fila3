<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources\StoredEventResource\Pages;

use Filament\Tables;
use Modules\Activity\Filament\Resources\StoredEventResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListStoredEvents extends XotBaseListRecords
{
    protected static string $resource = StoredEventResource::class;

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('event_class'),
            // Tables\Columns\TextColumn::make('event_properties'),
            Tables\Columns\ViewColumn::make('event_properties')
                ->view('activity::filament.tables.columns.event-properties'),
        ];
    }
}
