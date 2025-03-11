<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Fixcity\Ticket\Http\Controllers\Api\TicketController;

Route::middleware(['api', 'auth:sanctum'])->prefix('api/ticket')->group(function () {
    // Lista e creazione ticket
    Route::get('/', [TicketController::class, 'index'])->name('api.ticket.index');
    Route::post('/', [TicketController::class, 'store'])->name('api.ticket.store');
<<<<<<< HEAD

=======
    
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    // Operazioni su singolo ticket
    Route::get('/{ticket}', [TicketController::class, 'show'])->name('api.ticket.show');
    Route::put('/{ticket}', [TicketController::class, 'update'])->name('api.ticket.update');
    Route::delete('/{ticket}', [TicketController::class, 'destroy'])->name('api.ticket.destroy');
<<<<<<< HEAD

    // Commenti
    Route::get('/{ticket}/comments', [TicketController::class, 'comments'])->name('api.ticket.comments.index');
    Route::post('/{ticket}/comments', [TicketController::class, 'storeComment'])->name('api.ticket.comments.store');

    // Attività
    Route::get('/{ticket}/activities', [TicketController::class, 'activities'])->name('api.ticket.activities');

    // Assegnazioni
    Route::post('/{ticket}/assign', [TicketController::class, 'assign'])->name('api.ticket.assign');

    // Statistiche
    Route::get('/stats', [TicketController::class, 'stats'])->name('api.ticket.stats');
});
=======
    
    // Commenti
    Route::get('/{ticket}/comments', [TicketController::class, 'comments'])->name('api.ticket.comments.index');
    Route::post('/{ticket}/comments', [TicketController::class, 'storeComment'])->name('api.ticket.comments.store');
    
    // Attività
    Route::get('/{ticket}/activities', [TicketController::class, 'activities'])->name('api.ticket.activities');
    
    // Assegnazioni
    Route::post('/{ticket}/assign', [TicketController::class, 'assign'])->name('api.ticket.assign');
    
    // Statistiche
    Route::get('/stats', [TicketController::class, 'stats'])->name('api.ticket.stats');
}); 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
