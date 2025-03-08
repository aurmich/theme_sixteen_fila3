<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Setting\Filament\Actions\Table\DatabaseBackupTableAction;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListDatabaseConnections extends XotBaseListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    public function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('driver')->searchable()->sortable(),
            TextColumn::make('database')->searchable()->sortable(),
        ];
    }

    public function getListTableColumns(): array
    {
        return $this->getTableColumns();
=======
use Filament\Resources\Pages\ListRecords;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ListDatabaseConnections extends ListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    public function getListTableColumns(): array
    {
        return [
            'name' => Tables\Columns\TextColumn::make('name')
                ->searchable(),

            'driver' => Tables\Columns\TextColumn::make('driver')
                ->searchable(),

            'host' => Tables\Columns\TextColumn::make('host')
                ->searchable(),

            'database' => Tables\Columns\TextColumn::make('database')
                ->searchable(),

            'status' => Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'danger' => 'inactive',
                    'warning' => 'testing',
                    'success' => 'active',
                ]),

            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ];
>>>>>>> origin/master
    }

    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
=======
            Tables\Filters\SelectFilter::make('driver')
                ->options([
                    'mysql' => 'MySQL',
                    'pgsql' => 'PostgreSQL',
                    'sqlite' => 'SQLite',
                    'sqlsrv' => 'SQL Server',
                ]),

            Tables\Filters\SelectFilter::make('status')
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                    'testing' => 'Testing',
                ]),
>>>>>>> origin/master
        ];
    }

    public function getTableActions(): array
    {
        return [
<<<<<<< HEAD
            // Tables\Actions\EditAction::make(),
            DatabaseBackupTableAction::make(),
=======
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\Action::make('test')
                ->action(fn ($record) => $record->testConnection())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
>>>>>>> origin/master
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
<<<<<<< HEAD
            // Tables\Actions\BulkActionGroup::make([
            Tables\Actions\DeleteBulkAction::make(),
            // ]),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters($this->getTableFilters())
            ->actions($this->getTableActions())
            ->bulkActions($this->getTableBulkActions());
=======
            Tables\Actions\DeleteBulkAction::make(),
        ];
    }

    public function getTableHeaderActions(): array
    {
        return [
            Tables\Actions\CreateAction::make(),
        ];
>>>>>>> origin/master
    }
}
