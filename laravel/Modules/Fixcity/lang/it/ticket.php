<?php 
return array (
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
      'placeholder' => 'Inserisci ID',
    ),
    'title' => 
    array (
      'label' => 'Titolo',
      'placeholder' => 'Inserisci il titolo',
      'help' => 'Inserisci un titolo descrittivo',
    ),
    'category' => 
    array (
      'name' => 
      array (
        'label' => 'Categoria',
        'placeholder' => 'Seleziona categoria',
      ),
      'label' => 'Categoria',
      'placeholder' => 'Filtra per categoria',
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'placeholder' => 'Seleziona stato',
      'options' => 
      array (
        'open' => 'Aperto',
        'in_progress' => 'In Lavorazione',
        'resolved' => 'Risolto',
        'closed' => 'Chiuso',
      ),
    ),
    'priority' => 
    array (
      'label' => 'Priorità',
      'placeholder' => 'Seleziona la priorità',
      'help' => 'Indica l\'urgenza del ticket',
      'options' => 
      array (
        'low' => 'Bassa',
        'medium' => 'Media',
        'high' => 'Alta',
        'urgent' => 'Urgente',
      ),
    ),
    'content' => 
    array (
      'label' => 'Contenuto',
      'placeholder' => 'Descrivi il problema...',
      'help' => 'Fornisci una descrizione dettagliata',
    ),
    'created_at' => 
    array (
      'label' => 'Data Creazione',
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima Modifica',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'value' => 
    array (
      'label' => 'value',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'count' => 
    array (
      'label' => 'count',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Inserisci un nome identificativo',
    ),
    'slug' => 
    array (
      'label' => 'Slug',
      'placeholder' => 'Inserisci lo slug',
      'help' => 'URL-friendly versione del nome',
    ),
    'type' => [
        'label' => 'Tipo',
        'placeholder' => 'Seleziona tipo',
        'options' => [
            'road_maintenance' => 'Manutenzione Stradale',
            'public_lighting' => 'Illuminazione Pubblica',
            'waste_collection' => 'Raccolta Rifiuti',
            'parks_and_gardens' => 'Aree Verdi e Parchi',
            'sewage_and_drainage' => 'Fognature e Drenaggi',
            'public_buildings' => 'Edifici Pubblici',
            'environmental_reports' => 'Segnalazioni Ambientali',
            'public_transport' => 'Trasporti Pubblici',
            'urban_furniture' => 'Arredo Urbano',
            'public_safety' => 'Sicurezza Pubblica',
            'complaint' => 'Reclamo',
            'suggestion' => 'Suggerimento',
            'report' => 'Segnalazione',
            'request' => 'Richiesta',
            'other' => 'Altro'
        ]
    ],
    'images' => 
    array (
      'label' => 'Immagini',
      'placeholder' => 'Carica immagini',
      'help' => 'Allega immagini al ticket',
    ),
    'search' => [
        'label' => 'Cerca',
        'placeholder' => 'Cerca nei ticket...',
    ],
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Crea Ticket',
    ),
    'edit' => 'Modifica Ticket',
    'delete' => 'Elimina Ticket',
    'view' => 'Visualizza Ticket',
    'generateTickets' => 
    array (
      'label' => 'generateTickets',
    ),
  ),
  'messages' => 
  array (
    'created' => 'Ticket creato con successo',
    'updated' => 'Ticket aggiornato con successo',
    'deleted' => 'Ticket eliminato con successo',
    'no_tickets' => 'Nessun ticket trovato.',
  ),
  'navigation' => 
  array (
    'label' => 'ticket.navigation',
    'sort' => 89,
  ),
  'model' => 
  array (
    'label' => 'ticket.model',
  ),
);
