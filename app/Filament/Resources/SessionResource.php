<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\SessionResource\Pages;
use Modules\Xot\Models\Session;

class SessionResource extends XotBaseResource
{
    protected static ?string $model = Session::class;

    public static function getFormSchema(): array
    {
        return [
            'id' => TextInput::make('id')
                ->required()
                ->maxLength(255)
                ->placeholder('Inserisci ID')
                ->helperText('Identificativo univoco della sessione'),

            'user_id' => TextInput::make('user_id')
                ->numeric()
                ->placeholder('ID dell\'utente')
                ->helperText('ID dell\'utente associato alla sessione'),

            'ip_address' => TextInput::make('ip_address')
                ->maxLength(45)
                ->placeholder('Indirizzo IP')
                ->helperText('Indirizzo IP dell\'utente'),

            'user_agent' => TextInput::make('user_agent')
                ->maxLength(255)
                ->placeholder('User Agent del browser')
                ->helperText('Informazioni sul browser dell\'utente'),

            'payload' => KeyValue::make('payload')
                ->columnSpanFull()
                ->helperText('Dati della sessione in formato chiave-valore'),

            'last_activity' => TextInput::make('last_activity')
                ->required()
                ->numeric()
                ->placeholder('Timestamp ultima attività')
                ->helperText('Timestamp dell\'ultima attività dell\'utente'),
        ];
    }

   
}
