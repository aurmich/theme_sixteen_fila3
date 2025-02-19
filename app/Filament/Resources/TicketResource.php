<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Modules\Fixcity\Models\Ticket;
use Modules\Fixcity\Enums\TicketTypeEnum;
use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Enums\TicketPriorityEnum;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Fixcity\Filament\Resources\TicketResource\Pages;

class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),

            Forms\Components\RichEditor::make('content')
                ->required()
                ->maxLength(65535),

            Forms\Components\Select::make('type')
                ->enum(TicketTypeEnum::class)
                ->required(),

            Forms\Components\Select::make('status')
                ->enum(TicketStatusEnum::class)
                ->required(),

            Forms\Components\Select::make('priority')
                ->enum(TicketPriorityEnum::class)
                ->required(),

            Forms\Components\TextInput::make('latitude')
                ->numeric()
                ->maxLength(255),

            Forms\Components\TextInput::make('longitude')
                ->numeric()
                ->maxLength(255),

            Forms\Components\FileUpload::make('media')
                ->multiple()
                ->directory('tickets')
                ->acceptedFileTypes(['image/*', 'application/pdf'])
                ->maxSize(5120)
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
            'view' => Pages\ViewTicket::route('/{record}'),
        ];
    }
}
