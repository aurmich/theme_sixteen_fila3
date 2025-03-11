<?php

declare(strict_types=1);

namespace Modules\Fixcity\Filament\Actions;

<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\Action;
use Modules\Fixcity\Actions\ChangeStatus as ActionChangeStatus;
use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Models\Ticket;
use Webmozart\Assert\Assert;
=======
use Webmozart\Assert\Assert;
use Modules\Fixcity\Models\Ticket;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Modules\Fixcity\Enums\TicketStatusEnum;
use Modules\Fixcity\Actions\ChangeStatus as ActionChangeStatus;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class ChangeStatus extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->translateLabel()
            ->action(
                function (Ticket $record, array $data): void {
<<<<<<< HEAD

                    Assert::string($data['status']);
                    Assert::string($data['reason']);

=======
                    
                    Assert::string($data['status']);
                    Assert::string($data['reason']);
                    
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                    app(ActionChangeStatus::class)->execute($record, $data['status'], $data['reason']);
                }
            )
            ->form([
                Select::make('status')
                    ->options(TicketStatusEnum::class)
                    ->required(),
                TextInput::make('reason')
                    ->label('Per quale motivo stai modificando lo stato?')
                    ->helperText('La motivazione verrà visualizzata nel dettaglio del ticket')
                    ->required(),
            ])
            ->label('Change Status')
            ->icon('ui-status')
            ->tooltip('Change Status')
            ->modalHeading('Modifica Status')
            // ->requiresConfirmation()
            ->modalSubmitActionLabel('Modifica');
    }

    public static function getDefaultName(): ?string
    {
        return 'changeStatus';
    }
}
