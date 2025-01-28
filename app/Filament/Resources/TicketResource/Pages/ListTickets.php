<?php

namespace Modules\Fixcity\Filament\Resources\TicketResource\Pages;

use Filament\Tables;
use Filament\Actions;
use Filament\Forms;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Fixcity\Filament\Resources\TicketResource;
use Modules\Fixcity\Actions\GenerateTicketsAction;
use Filament\Notifications\Notification;

use Modules\Ticket\Filament\Resources\TicketResource\Pages\ListTickets as BaseListTickets;

class ListTickets extends BaseListTickets
{
    protected static string $resource = TicketResource::class;

   
} 