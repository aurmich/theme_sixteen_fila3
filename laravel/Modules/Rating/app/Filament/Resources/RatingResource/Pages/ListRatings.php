<?php

declare(strict_types=1);

namespace Modules\Rating\Filament\Resources\RatingResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Table;
use Filament\Tables\Actions\DeleteBulkAction;
use Modules\Rating\Filament\Resources\RatingResource;

class ListRatings extends ListRecords
{
    protected static string $resource = RatingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getTableBulkActions(): array
=======
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Rating\Filament\Resources\RatingResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListRatings extends XotBaseListRecords
{
    protected static string $resource = RatingResource::class;

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('id')

                ->sortable()
                ->searchable(),
            TextColumn::make('title')

                ->sortable()
                ->searchable(),
            TextColumn::make('rule')

                ->badge(),
            IconColumn::make('is_disabled')
                ->boolean(),
            IconColumn::make('is_readonly')
                ->boolean(),
        ];

        // TextColumn::make('extra_attributes.type'),
        // TextColumn::make('extra_attributes.anno'),

        // TextColumn::make('is_readonly'),
        // TextColumn::make('is_disabled'),
        // ToggleColumn::make('is_readonly'),

        // TextColumn::make('color'),
    }

    public function getTableFilters(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            ViewAction::make()
                ->label(''),
            EditAction::make()
                ->label(''),
            DeleteAction::make()
                ->label('')
                ->requiresConfirmation(),
        ];
    }

    public function getTableBulkActions(): array
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

<<<<<<< HEAD
    /**
     * Ottiene le colonne della tabella.
     *
     * @return array<\Filament\Tables\Columns\Column>
     */
    protected function getTableColumns(): array
    {
        return $this->layoutView->getTableColumns();
    }

    /**
     * Configura le opzioni aggiuntive della tabella.
     *
     * @param Table $table
     * @return array<string, mixed>
     */
    protected function getTableConfiguration(): array
    {
        return [
            'defaultSort' => 'created_at',
            'defaultSortDirection' => 'desc',
            'paginated' => true,
            'recordsPerPage' => 25,
        ];
=======
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
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
