<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Components\KeyValue;
=======
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Modules\Xot\Filament\Resources\ExtraResource\Pages;
use Modules\Xot\Models\Extra;

class ExtraResource extends XotBaseResource
{
    protected static ?string $model = Extra::class;

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
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
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
