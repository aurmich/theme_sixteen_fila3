# Componenti View di Fixcity

## TicketList

### Agid Component
Il componente `Agid` è un componente view Laravel che gestisce la visualizzazione della lista dei ticket secondo le linee guida AGID.

#### Struttura
- Estende: `Illuminate\View\Component`
- Namespace: `Modules\Fixcity\View\Components\Blocks\TicketList`
- View Template: `fixcity::components.blocks.ticket_list.agid`

#### Metodi Principali

##### `getReports(): Collection`
Recupera la lista dei report dal database con le seguenti informazioni:
- id
- titolo
- descrizione
- localizzazione (formato JSON)
- indirizzo
- categoria
- stato
- metadata (formato JSON)
- data di creazione

I dati vengono ordinati per data di creazione in ordine decrescente.

##### `getCategories(): Collection`
Recupera la lista delle categorie dal database con:
- id
- nome
- descrizione
- icona

#### Note Tecniche
- Il componente utilizza query dirette al database tramite `DB::table()`
- Gli stati dei report sono gestiti tramite l'enum `ReportStatusEnum`
- I campi JSON (location e metadata) vengono decodificati automaticamente

#### Correzioni Recenti
- Risolto un problema di riferimento circolare nella definizione della classe
- Rimossa l'estensione errata `BaseAgid` in favore di `Component` 

## Risoluzione Conflitti Git

### Conflitti Risolti
Durante lo sviluppo del modulo, sono stati identificati e risolti diversi conflitti git nei seguenti file:

1. `resources/views/components/blocks/ticket_list/agid.blade.php`
   - Risolti conflitti relativi all'importazione di `TicketStatusEnum`
   - Risolti conflitti nella query di selezione dei ticket (inclusione del campo `slug`)
   - Risolti conflitti nel metodo `mount()` per la gestione della posizione utente
   - Risolti conflitti nei filtri di visibilità dei ticket basati su stato e creatore

2. `app/Filament/Widgets/TicketsMapWidget.php`
   - Risolti conflitti relativi alla gestione della posizione utente
   - Risolti conflitti nei filtri di visualizzazione dei ticket sulla mappa

3. `app/Filament/Widgets/CreateTicketWidget.php`
   - Risolti conflitti nelle funzionalità di creazione ticket

4. `database/factories` e `database/migrations`
   - Risolti conflitti nei factory e nelle migrazioni per garantire la coerenza del database

### Linee Guida per la Risoluzione dei Conflitti
- Mantenere la funzionalità di filtro per stato dei ticket
- Preservare la funzionalità di geolocalizzazione dell'utente
- Garantire che i ticket siano visualizzati correttamente sia in elenco che sulla mappa
- Assicurare che le migrazioni del database siano coerenti con il modello dati attuale 