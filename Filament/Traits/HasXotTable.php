<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Traits;

use Filament\Tables;
use Filament\Actions;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Notifications\Notification;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Columns\Layout\Stack;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;

/**
 * Trait HasXotTable
 * Provides enhanced table functionality with translations and optimized structure.
 *
 * @property TableLayoutEnum $layoutView
 */
trait HasXotTable
{
    /**
     * Configure table header actions.
     *
     * @return array
     */
    protected function getTableHeaderActions(): array
    {
        $actions = [
            TableLayoutToggleTableAction::make(),
        ];

        // Aggiunge AssociateAction solo se una relazione è disponibile
        if ($this->shouldShowAssociateAction()) {
            $actions[] = Tables\Actions\AssociateAction::make()
                ->label('')
                ->icon('heroicon-o-paper-clip')
                ->tooltip(__('user::actions.associate_user'));
        }

        // Aggiunge AttachAction solo se applicabile
        if ($this->shouldShowAttachAction()) {
            $actions[] = Tables\Actions\AttachAction::make()
                ->label('')
                ->icon('heroicon-o-link')
                ->tooltip(__('user::actions.attach_user'));
        }

        return $actions;
    }

    /**
     * Determina se visualizzare l'azione AssociateAction.
     *
     * @return bool
     */
    protected function shouldShowAssociateAction(): bool
    {
        // Logica personalizzata per determinare quando mostrare AssociateAction
        return false; // Cambia con la tua condizione
    }

    /**
     * Determina se visualizzare l'azione AttachAction.
     *
     * @return bool
     */
    protected function shouldShowAttachAction(): bool
    {
        if (!method_exists($this, 'getRelationship')) {
            return false;
        }
        // Logica personalizzata per determinare quando mostrare AttachAction
        return true; // Cambia con la tua condizione
    }

    /**
    * Determina se visualizzare l'azione DetachAction.
    *
    * @return bool
    */
    protected function shouldShowDetachAction(): bool
    {
        // Logica personalizzata per determinare quando mostrare DetachAction
        // Ad esempio, solo se esiste una relazione associata
        return method_exists($this, 'getRelationship') && $this->getRelationship()->exists();
    }
    /**
     * Configure general header actions.
     *
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('')
                ->tooltip(__('user::actions.create_user'))
                ->icon('heroicon-o-plus'),
        ];
    }

    /**
     * Define the main table structure.
     *
     * @param Table $table
     * @return Table
     */
    public function table(Table $table): Table
    {
        if (! $this->tableExists()) {
            $this->notifyTableMissing();
            return $this->configureEmptyTable($table);
        }

        return $table
            ->columns($this->layoutView->getTableColumns())
            ->contentGrid($this->layoutView->getTableContentGrid())
            ->headerActions($this->getTableHeaderActions())
            ->filters($this->getTableFilters())
            ->filtersLayout(FiltersLayout::AboveContent)
            ->filtersFormColumns(3)
            ->persistFiltersInSession()
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions())
            ->actionsPosition(ActionsPosition::BeforeColumns)
            ->striped();
    }

    /**
     * Define grid layout columns.
     *
     * @return array
     */
    public function getGridTableColumns(): array
    {
        return [
            Stack::make($this->getListTableColumns()),
        ];
    }

    /**
     * Define table filters.
     *
     * @return array
     */
    protected function getTableFilters(): array
    {
        return [];
    }

    /**
     * Define row-level actions with translations.
     *
     * @return array
     */
    protected function getTableActions(): array
    {
        $actions = [
            Tables\Actions\ViewAction::make()
                ->label('')
                ->tooltip(__('user::actions.view'))
                ->icon('heroicon-o-eye')
                ->color('info'),

            Tables\Actions\EditAction::make()
                ->label('')
                ->tooltip(__('user::actions.edit'))
                ->icon('heroicon-o-pencil')
                ->color('warning'),
        ];

        // Aggiunge DetachAction solo se applicabile
        if ($this->shouldShowDetachAction()) {
            $actions[] = Tables\Actions\DetachAction::make()
                ->label('')
                ->tooltip(__('user::actions.detach'))
                ->icon('heroicon-o-link-slash')
                ->color('danger')
                ->requiresConfirmation();
        }

        return $actions;
    }

    /**
     * Define bulk actions with translations.
     *
     * @return array
     */
    protected function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make()
                ->label('')
                ->tooltip(__('user::actions.delete_selected'))
                ->icon('heroicon-o-trash')
                ->color('danger')
                ->requiresConfirmation(),
        ];
    }

    /**
     * Retrieve the default sorting column.
     *
     * @return string
     */
    protected function getDefaultSort(): string
    {
        return 'id';
    }

    /**
     * Get the model class from the relationship or throw an exception if not found.
     *
     * @return string
     * @throws \Exception
     */
    public function getModelClass(): string
    {
        if (method_exists($this, 'getRelationship')) {
            $model = $this->getRelationship()->getModel();
            return $model::class;
        }
        if (method_exists($this, 'getModel')) {
            return $this->getModel();
        }
        throw new \Exception("No model found in " . class_basename(__CLASS__) . "::" . __FUNCTION__);
    }

    /**
     * Check if the model's table exists in the database.
     *
     * @return bool
     */
    protected function tableExists(): bool
    {
        $model = $this->getModelClass();
        return app($model)->getConnection()->getSchemaBuilder()->hasTable(app($model)->getTable());
    }

    /**
     * Notify the user if the table is missing.
     *
     * @return void
     */
    protected function notifyTableMissing(): void
    {
        $model = $this->getModelClass();
        $tableName = app($model)->getTable();
        Notification::make()
            ->title(__('user::notifications.table_missing.title'))
            ->body(__('user::notifications.table_missing.body', ['table' => $tableName]))
            ->persistent()
            ->warning()
            ->send();
    }

    /**
     * Configure an empty table in case the actual table is missing.
     *
     * @param Table $table
     * @return Table
     */
    protected function configureEmptyTable(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->whereNull('id'))
            ->columns([
                TextColumn::make('message')
                    ->label(__('user::fields.message.label'))
                    ->default(__('user::fields.message.default'))
                    ->html(),
            ])
            ->headerActions([])
            ->actions([]);
    }
}
