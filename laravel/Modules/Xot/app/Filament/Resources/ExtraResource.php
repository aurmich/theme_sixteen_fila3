<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
=======
<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Components\KeyValue;
=======
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
use Modules\Xot\Filament\Resources\ExtraResource\Pages;
use Modules\Xot\Models\Extra;

class ExtraResource extends XotBaseResource
{
    protected static ?string $model = Extra::class;

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
            'post_type' => Forms\Components\TextInput::make('post_type')
                ->required()
                ->maxLength(255),
            'post_id' => Forms\Components\TextInput::make('post_id')
                ->required()
                ->numeric(),
            'value' => Forms\Components\TextInput::make('value')
                ->required(),
            'key' => Forms\Components\TextInput::make('key')
                ->required()
                ->maxLength(255),
=======
>>>>>>> origin/master
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('id')
                ->required()
                ->maxLength(36),

            TextInput::make('post_type')
                ->required()
                ->maxLength(255),

            TextInput::make('post_id')
                ->required()
                ->numeric(),

            KeyValue::make('value')
                ->keyLabel('Chiave')
                ->valueLabel('Valore')
                ->reorderable()
                ->columnSpanFull(),
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
            'index' => Pages\ListExtras::route('/'),
            'create' => Pages\CreateExtra::route('/create'),
            'edit' => Pages\EditExtra::route('/{record}/edit'),
        ];
    }
}
