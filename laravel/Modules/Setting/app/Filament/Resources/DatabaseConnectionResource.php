<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources;

use Filament\Forms\Form;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;
use Modules\Setting\Models\DatabaseConnection;
use Modules\Xot\Filament\Resources\XotBaseResource;

class DatabaseConnectionResource extends XotBaseResource
{
    protected static ?string $model = DatabaseConnection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function getFormSchema(): array
    {
        return [
            'name' => [
                'type' => 'text',
                'label' => 'Connection Name',
                'required' => true,
            ],
            'host' => [
                'type' => 'text',
                'label' => 'Host',
                'required' => true,
            ],
            'port' => [
                'type' => 'number',
                'label' => 'Port',
                'required' => true,
            ],
            'database' => [
                'type' => 'text',
                'label' => 'Database Name',
                'required' => true,
            ],
            'username' => [
                'type' => 'text',
                'label' => 'Username',
                'required' => true,
            ],
            'password' => [
                'type' => 'password',
                'label' => 'Password',
                'required' => true,
            ],
            'driver' => [
                'type' => 'select',
                'label' => 'Driver',
                'options' => [
                    'mysql' => 'MySQL',
                    'pgsql' => 'PostgreSQL',
                    'sqlsrv' => 'SQL Server',
                    'sqlite' => 'SQLite',
                ],
                'required' => true,
            ],
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDatabaseConnections::route('/'),
            'create' => Pages\CreateDatabaseConnection::route('/create'),
            'edit' => Pages\EditDatabaseConnection::route('/{record}/edit'),
        ];
    }
}
