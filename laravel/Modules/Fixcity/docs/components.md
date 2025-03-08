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
<<<<<<< HEAD
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
   - Mantenuta la funzionalità di geolocalizzazione dell'utente
   - Preservata la visualizzazione dei marker sulla mappa

3. `app/Filament/Widgets/CreateTicketWidget.php`
   - Risolti conflitti nelle funzionalità di creazione ticket
   - Mantenuta l'estensione corretta della classe base `BaseWidget` con l'implementazione dell'interfaccia `HasForms`
   - Preservato il sistema di validazione dei form

4. `database/factories/TicketSubscriberFactory.php` e `database/factories/TicketHourFactory.php`
   - Risolti conflitti nei factory per garantire la corretta associazione con i modelli
   - Corretti i namespace e le classi di riferimento

5. `database/migrations/2023_01_01_000000_create_ticket_subscribers_table.php` e `database/migrations/2023_01_01_000000_create_ticket_hours_table.php`
   - Risolti conflitti nelle migrazioni per garantire la coerenza del database
   - Mantenute le relazioni corrette tra le tabelle

6. `app/Models/BaseModel.php`
   - Risolti conflitti nel modello base
   - Mantenuto il namespace corretto `Modules\Fixcity\Models`
   - Preservate le proprietà specifiche per il modulo Fixcity

7. `README.md`
   - Combinato il contenuto delle due versioni in conflitto
   - Integrata la documentazione di installazione con la descrizione del modulo

### Strategie di Risoluzione
Per risolvere i conflitti git sono state adottate le seguenti strategie:

1. **Analisi del contesto**: Prima di risolvere ogni conflitto, è stata analizzata la funzionalità del codice per comprendere lo scopo delle modifiche.

2. **Preservazione delle funzionalità**: Sono state mantenute tutte le funzionalità importanti come:
   - Filtri per stato dei ticket
   - Geolocalizzazione dell'utente
   - Visualizzazione dei ticket sulla mappa
   - Sistema di creazione ticket

3. **Coerenza del database**: Le migrazioni e i factory sono stati allineati per garantire la coerenza del database.

4. **Documentazione**: Ogni risoluzione è stata documentata per facilitare la comprensione delle modifiche apportate.

### Verifica Post-Risoluzione
Dopo la risoluzione dei conflitti, è stata effettuata una verifica per assicurarsi che:
- Non ci siano più marker di conflitto git nel codice
- Le funzionalità principali siano preservate
- La documentazione sia aggiornata
- I namespace e le relazioni tra i modelli siano corretti 
=======
- Rimossa l'estensione errata `BaseAgid` in favore di `Component` 
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
