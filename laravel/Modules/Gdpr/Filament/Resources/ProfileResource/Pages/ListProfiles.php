<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Gdpr\Filament\Resources\ProfileResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\User\Filament\Resources\BaseProfileResource\Pages\ListProfiles as UserListProfiles;
use Modules\Xot\Filament\Traits\TransTrait;

class ListProfiles extends UserListProfiles
{
    use TransTrait;

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = ProfileResource::class;

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
            Tables\Columns\TextColumn::make('type')
                ->searchable(),
            Tables\Columns\TextColumn::make('first_name')
                ->searchable(),
            Tables\Columns\TextColumn::make('last_name')
                ->searchable(),
            Tables\Columns\TextColumn::make('full_name')
                ->searchable(),
            Tables\Columns\TextColumn::make('email')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('user_id')
                ->searchable(),
            Tables\Columns\TextColumn::make('updated_by')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_by')
                ->searchable(),
            Tables\Columns\TextColumn::make('deleted_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('deleted_by')
                ->searchable(),
            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
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
