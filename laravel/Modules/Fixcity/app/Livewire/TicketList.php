<?php

namespace Modules\Fixcity\Livewire;

<<<<<<< HEAD
use Livewire\Volt\Component as VoltComponent;
use Livewire\WithPagination;
use Modules\Fixcity\Models\Ticket;
=======
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Volt\Component as VoltComponent;
use Modules\Fixcity\Models\Ticket;
use Modules\Category\Models\Category;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class TicketList extends VoltComponent
{
    use WithPagination;

    public $search = '';
<<<<<<< HEAD

    public $selectedCategory = '';

    public $selectedStatus = '';

    public array $categories = [
        'Acqua, allagamenti, problemi fognari (21)',
        'Ambiente, inquinamento, protezione ambientale (14)',
        'Arredo urbano (7)',
        'Disinfestazione, derattizazione, animali randagi (208)',
        'Igiene urbana, rifiuti, pulizia e decoro (321)',
        'Manutenzione immobili, edifici pubblici, scuole, barriere architettoniche, cimiteri (302)',
        'Ordine pubblico, disturbo della quiete (302)',
        'Parchi e verde pubblico (302)',
        'Servizi del comune (302)',
        'Sicurezza, degrado urbano e sociale (302)',
        'Strade, marciapiedi, segnaletica e viabilità (302)',
=======
    public $selectedCategory = '';
    public $selectedStatus = '';
    public array $categories = [
        "Acqua, allagamenti, problemi fognari (21)",
        "Ambiente, inquinamento, protezione ambientale (14)",
        "Arredo urbano (7)",
        "Disinfestazione, derattizazione, animali randagi (208)",
        "Igiene urbana, rifiuti, pulizia e decoro (321)",
        "Manutenzione immobili, edifici pubblici, scuole, barriere architettoniche, cimiteri (302)",
        "Ordine pubblico, disturbo della quiete (302)",
        "Parchi e verde pubblico (302)",
        "Servizi del comune (302)",
        "Sicurezza, degrado urbano e sociale (302)",
        "Strade, marciapiedi, segnaletica e viabilità (302)"
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    ];

    public function getTicketsProperty()
    {
        return Ticket::query()
<<<<<<< HEAD
            ->when($this->search, fn ($q) => $q->where('title', 'like', "%{$this->search}%")
                ->orWhere('content', 'like', "%{$this->search}%")
            )
            ->when($this->selectedCategory, fn ($q) => $q->whereHas('category', fn ($q) => $q->where('name', $this->selectedCategory)
            )
            )
            ->when($this->selectedStatus, fn ($q) => $q->where('status', $this->selectedStatus)
=======
            ->when($this->search, fn($q) => 
                $q->where('title', 'like', "%{$this->search}%")
                  ->orWhere('content', 'like', "%{$this->search}%")
            )
            ->when($this->selectedCategory, fn($q) => 
                $q->whereHas('category', fn($q) => 
                    $q->where('name', $this->selectedCategory)
                )
            )
            ->when($this->selectedStatus, fn($q) => 
                $q->where('status', $this->selectedStatus)
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            )
            ->latest()
            ->paginate(10);
    }

    public function render()
    {
        return view('fixcity::components.blocks.ticket_list.agid', [
<<<<<<< HEAD
            'tickets' => $this->tickets,
        ]);
    }
}
=======
            'tickets' => $this->tickets
        ]);
    }
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
