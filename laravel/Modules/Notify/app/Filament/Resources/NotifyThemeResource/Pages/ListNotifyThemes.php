<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
=======
use Filament\Tables\Columns;
use Filament\Tables\Filters;
>>>>>>> origin/master
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListNotifyThemes extends XotBaseListRecords
{
    protected static string $resource = NotifyThemeResource::class;

<<<<<<< HEAD
    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->headerActions($this->getTableHeaderActions());
        // ->defaultSort('pos', 'asc')
        // ->reorderable('pos')
    }

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('id')->sortable(),
            TextColumn::make('lang')->sortable(),
            TextColumn::make('type')->sortable(),
            // TextColumn::make('post_id')->sortable(),
            // TextColumn::make('post_type')->sortable(),
            TextColumn::make('logo_src')->sortable(),
        ];
    }

    public function getListTableColumns(): array
    {
        return $this->getTableColumns();
    }
=======
    public function getListTableColumns(): array
    {
        return [
            'id' => Columns\TextColumn::make('id')
                ->sortable(),
            'lang' => Columns\TextColumn::make('lang')
                ->sortable(),
            'type' => Columns\TextColumn::make('type')
                ->sortable(),
            'post_id' => Columns\TextColumn::make('post_id')
                ->sortable(),
            'post_type' => Columns\TextColumn::make('post_type')
                ->sortable(),
            'logo_src' => Columns\TextColumn::make('logo_src')
                ->sortable(),
            'created_at' => Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            'lang' => Filters\SelectFilter::make('lang')
                ->options(NotifyThemeResource::fieldOptions('lang')),
            'post_type' => Filters\SelectFilter::make('post_type')
                ->options(NotifyThemeResource::fieldOptions('post_type')),
            'type' => Filters\SelectFilter::make('type')
                ->options(NotifyThemeResource::fieldOptions('type'))
        ];
    }
   
>>>>>>> origin/master
}
