<?php

namespace Modules\Fixcity\Actions;

<<<<<<< HEAD
=======
use Filament\Forms;
use Filament\Actions\Action;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Illuminate\Support\Facades\Bus;
use Modules\Fixcity\Models\Ticket;
use Spatie\QueueableAction\QueueableAction;

class GenerateTicketsAction
{
    use QueueableAction;

    public function execute(int $count): void
    {
        $states = ['open', 'urgent', 'resolved'];

        Bus::batch(
            collect(range(1, $count))
                ->map(fn () => function () use ($states) {
                    $state = $this->faker->randomElement($states);
<<<<<<< HEAD

                    match ($state) {
=======
                    
                    match($state) {
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                        'open' => Ticket::factory()->open()->create(),
                        'urgent' => Ticket::factory()->urgent()->create(),
                        'resolved' => Ticket::factory()->resolved()->create(),
                        default => Ticket::factory()->create(),
                    };
                })
        )->dispatch();
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
