<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
=======
<<<<<<< HEAD
use Filament\Forms;
=======
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
use Modules\Xot\Filament\Resources\SessionResource\Pages;
use Modules\Xot\Models\Session;

class SessionResource extends XotBaseResource
{
    protected static ?string $model = Session::class;

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
>>>>>>> origin/master
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
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
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
