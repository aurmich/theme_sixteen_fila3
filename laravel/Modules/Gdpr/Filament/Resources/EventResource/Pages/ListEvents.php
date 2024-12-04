<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\EventResource\Pages;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Gdpr\Filament\Resources\EventResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListEvents extends XotBaseListRecords
{
    protected static string $resource = EventResource::class;

    public function table(Table $table): Table
    {
        return $table
            // ->columns($this->getTableColumns())
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())

            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->persistFiltersInSession()
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->defaultSort(
                column: 'created_at',
                direction: 'DESC',
            );
    }

    public function getGridTableColumns(): array
    {
        return [
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')

                ->searchable(),
            Tables\Columns\TextColumn::make('treatment_id')
                ->searchable(),
            Tables\Columns\TextColumn::make('consent.id')
                ->searchable(),
            Tables\Columns\TextColumn::make('subject_id')
                ->searchable(),
            Tables\Columns\TextColumn::make('ip')
                ->searchable(),
            Tables\Columns\TextColumn::make('action')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
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
            Actions\CreateAction::make(),
        ];
    }
}
