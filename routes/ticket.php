<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Fixcity\Ticket\Http\Controllers\TicketController;

Route::middleware(['web', 'auth'])->prefix('ticket')->group(function () {
    Route::get('/', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/create', [TicketController::class, 'create'])->name('ticket.create');
    Route::post('/', [TicketController::class, 'store'])->name('ticket.store');
    Route::get('/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
    Route::get('/{ticket}/edit', [TicketController::class, 'edit'])->name('ticket.edit');
    Route::put('/{ticket}', [TicketController::class, 'update'])->name('ticket.update');
    Route::delete('/{ticket}', [TicketController::class, 'destroy'])->name('ticket.destroy');
    
    // Routes per i commenti
    Route::post('/{ticket}/comments', [TicketController::class, 'storeComment'])->name('ticket.comments.store');
    
    // Routes per le attività
    Route::get('/{ticket}/activities', [TicketController::class, 'activities'])->name('ticket.activities');
    
    // Routes per le assegnazioni
    Route::post('/{ticket}/assign', [TicketController::class, 'assign'])->name('ticket.assign');
}); 