<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Form;
=======
use Filament\Forms;
>>>>>>> origin/master
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;
use Modules\Setting\Models\DatabaseConnection;
use Modules\Xot\Filament\Resources\XotBaseResource;

class DatabaseConnectionResource extends XotBaseResource
{
    protected static ?string $model = DatabaseConnection::class;

<<<<<<< HEAD
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
=======
    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            'driver' => Forms\Components\Select::make('driver')
                ->required()
                ->options([
                    'mysql' => 'MySQL',
                    'pgsql' => 'PostgreSQL',
                    'sqlite' => 'SQLite',
                    'sqlsrv' => 'SQL Server',
                ]),

            'host' => Forms\Components\TextInput::make('host')
                ->required()
                ->maxLength(255),

            'port' => Forms\Components\TextInput::make('port')
                ->required()
                ->numeric()
                ->default(3306),

            'database' => Forms\Components\TextInput::make('database')
                ->required()
                ->maxLength(255),

            'username' => Forms\Components\TextInput::make('username')
                ->required()
                ->maxLength(255),

            'password' => Forms\Components\TextInput::make('password')
                ->password()
                ->required()
                ->maxLength(255),

            'charset' => Forms\Components\TextInput::make('charset')
                ->default('utf8mb4')
                ->maxLength(255),

            'collation' => Forms\Components\TextInput::make('collation')
                ->default('utf8mb4_unicode_ci')
                ->maxLength(255),

            'prefix' => Forms\Components\TextInput::make('prefix')
                ->maxLength(255),

            'strict' => Forms\Components\Toggle::make('strict')
                ->default(true),

            'engine' => Forms\Components\Select::make('engine')
                ->options([
                    'InnoDB' => 'InnoDB',
                    'MyISAM' => 'MyISAM',
                ])
                ->default('InnoDB'),

            'options' => Forms\Components\KeyValue::make('options')
                ->keyLabel('Option Name')
                ->valueLabel('Option Value'),

            'status' => Forms\Components\Select::make('status')
                ->required()
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                    'testing' => 'Testing',
                ])
                ->default('inactive'),
>>>>>>> origin/master
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
