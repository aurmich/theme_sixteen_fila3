<?php

namespace Modules\Fixcity\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Modules\Ticket\Models\Ticket;
use Modules\Ticket\Enums\TicketTypeEnum;
use Modules\Ticket\Enums\TicketStatusEnum;
use Modules\Ticket\Enums\TicketPriorityEnum;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Fixcity\Filament\Resources\TicketResource\Pages;
use Modules\Fixcity\Filament\Resources\TicketResource\RelationManagers;
use Modules\Ticket\Filament\Resources\TicketResource as BaseTicketResource;

class TicketResource extends BaseTicketResource
{
    protected static ?string $model = Ticket::class;

    
    
   

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