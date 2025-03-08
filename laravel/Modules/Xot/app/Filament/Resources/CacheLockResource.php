<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
=======
<<<<<<< HEAD
use Filament\Forms;
=======
use Filament\Forms\Components\TextInput;
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
use Modules\Xot\Filament\Resources\CacheLockResource\Pages;
use Modules\Xot\Models\CacheLock;

class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * Get the form schema for the resource.
     *
     * @return array<string, Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'key' => Forms\Components\TextInput::make('key')
                ->required()
                ->maxLength(255),
            'owner' => Forms\Components\TextInput::make('owner')
                ->required()
                ->maxLength(255),
            'expiration' => Forms\Components\DateTimePicker::make('expiration')
                ->required(),
=======
>>>>>>> origin/master
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('key')
                ->required()
                ->maxLength(255),

            TextInput::make('owner')
                ->required()
                ->maxLength(255),

            TextInput::make('expiration')
                ->required()
                ->numeric(),
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
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
            'index' => Pages\ListCacheLocks::route('/'),
            'create' => Pages\CreateCacheLock::route('/create'),
            'edit' => Pages\EditCacheLock::route('/{record}/edit'),
        ];
    }
}
