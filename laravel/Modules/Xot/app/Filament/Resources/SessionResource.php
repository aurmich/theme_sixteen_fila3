<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
=======
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Modules\Xot\Filament\Resources\SessionResource\Pages;
use Modules\Xot\Models\Session;

class SessionResource extends XotBaseResource
{
    protected static ?string $model = Session::class;

<<<<<<< HEAD
    /**
     * Get the form schema for the resource.
     *
     * @return array<string, Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'id' => Forms\Components\TextInput::make('id')
                ->required()
                ->maxLength(255),
            'user_id' => Forms\Components\TextInput::make('user_id')
                ->numeric(),
            'ip_address' => Forms\Components\TextInput::make('ip_address')
                ->maxLength(45),
            'user_agent' => Forms\Components\TextInput::make('user_agent')
                ->maxLength(255),
            'payload' => Forms\Components\Textarea::make('payload')
                ->required(),
            'last_activity' => Forms\Components\DateTimePicker::make('last_activity')
                ->required(),
=======
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('id')
                ->required()
                ->maxLength(255),

            TextInput::make('user_id')
                ->numeric(),

            TextInput::make('ip_address')
                ->maxLength(45),

            TextInput::make('user_agent')
                ->maxLength(255),

            KeyValue::make('payload')
                ->columnSpanFull(),

            TextInput::make('last_activity')
                ->required()
                ->numeric(),
        ];
    }

    public static function getRelations(): array
    {
        return [
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSessions::route('/'),
            'create' => Pages\CreateSession::route('/create'),
            'edit' => Pages\EditSession::route('/{record}/edit'),
        ];
    }
}
