# Componenti del Tema Sixteen

## Panoramica

I componenti del tema Sixteen sono progettati per implementare le **Linee Guida di Design per i Servizi Digitali della Pubblica Amministrazione** utilizzando **Tailwind CSS**. Ogni componente è ottimizzato per accessibilità, usabilità e conformità agli standard italiani.

## Layout Components

### App Layout
Layout principale per le applicazioni web della PA.

```blade
<<<<<<< HEAD
<x-sixteen::layout.app>
    <x-slot name="header">
        <x-sixteen::header.main>
            <x-slot name="logo">
                <x-sixteen::logo />
            </x-slot>
            <x-slot name="navigation">
                <x-sixteen::navigation.main />
            </x-slot>
        </x-sixteen::header.main>
    </x-slot>
    
    <x-slot name="sidebar">
        <x-sixteen::sidebar.main />
    </x-slot>
    
    <x-slot name="footer">
        <x-sixteen::footer.main />
=======
<x-pub_theme::layout.app>
    <x-slot name="header">
        <x-pub_theme::header.main>
            <x-slot name="logo">
                <x-pub_theme::logo />
            </x-slot>
            <x-slot name="navigation">
                <x-pub_theme::navigation.main />
            </x-slot>
        </x-pub_theme::header.main>
    </x-slot>
    
    <x-slot name="sidebar">
        <x-pub_theme::sidebar.main />
    </x-slot>
    
    <x-slot name="footer">
        <x-pub_theme::footer.main />
>>>>>>> 109edea (.)
    </x-slot>
    
    <!-- Main content -->
    <main class="flex-1">
        {{ $slot }}
    </main>
<<<<<<< HEAD
</x-sixteen::layout.app>
=======
</x-pub_theme::layout.app>
>>>>>>> 109edea (.)
```

**Proprietà:**
- `sidebar-collapsed`: Controlla lo stato della sidebar
- `header-fixed`: Fissa l'header in cima
- `sidebar-fixed`: Fissa la sidebar

### Container Layout
Container responsive per contenuti centrati.

```blade
<<<<<<< HEAD
<x-sixteen::layout.container size="lg">
    <div class="prose prose-lg max-w-none">
        {{ $slot }}
    </div>
</x-sixteen::layout.container>
=======
<x-pub_theme::layout.container size="lg">
    <div class="prose prose-lg max-w-none">
        {{ $slot }}
    </div>
</x-pub_theme::layout.container>
>>>>>>> 109edea (.)
```

**Sizes disponibili:**
- `sm`: max-width 640px
- `md`: max-width 768px
- `lg`: max-width 1024px
- `xl`: max-width 1280px
- `2xl`: max-width 1536px

## Form Components

### Input Field
Campo di input con validazione e accessibilità.

```blade
<<<<<<< HEAD
<x-sixteen::form.input
=======
<x-pub_theme::form.input
>>>>>>> 109edea (.)
    name="email"
    type="email"
    label="Indirizzo Email"
    placeholder="Inserisci la tua email"
    help="L'email verrà utilizzata per accedere al sistema"
    required
    :error="$errors->first('email')"
/>
```

**Proprietà:**
- `name`: Nome del campo (obbligatorio)
- `type`: Tipo di input (text, email, password, etc.)
- `label`: Etichetta del campo
- `placeholder`: Testo placeholder
- `help`: Testo di aiuto
- `required`: Campo obbligatorio
- `disabled`: Campo disabilitato
- `error`: Messaggio di errore

### Select Field
Campo select con opzioni dinamiche.

```blade
<<<<<<< HEAD
<x-sixteen::form.select
=======
<x-pub_theme::form.select
>>>>>>> 109edea (.)
    name="provincia"
    label="Provincia"
    :options="$province"
    placeholder="Seleziona una provincia"
    searchable
    :error="$errors->first('provincia')"
/>
```

**Proprietà:**
- `options`: Array di opzioni o Collection
- `searchable`: Abilita ricerca nelle opzioni
- `multiple`: Selezione multipla
- `max-items`: Numero massimo di elementi selezionabili

### Textarea Field
Campo di testo multi-riga.

```blade
<<<<<<< HEAD
<x-sixteen::form.textarea
=======
<x-pub_theme::form.textarea
>>>>>>> 109edea (.)
    name="descrizione"
    label="Descrizione"
    placeholder="Inserisci una descrizione dettagliata"
    rows="4"
    maxlength="500"
    :error="$errors->first('descrizione')"
/>
```

### Checkbox Field
Campo checkbox con label personalizzabile.

```blade
<<<<<<< HEAD
<x-sixteen::form.checkbox
=======
<x-pub_theme::form.checkbox
>>>>>>> 109edea (.)
    name="privacy"
    label="Accetto la privacy policy"
    required
    :error="$errors->first('privacy')"
/>
```

### Radio Group
Gruppo di radio button.

```blade
<<<<<<< HEAD
<x-sixteen::form.radio-group
=======
<x-pub_theme::form.radio-group
>>>>>>> 109edea (.)
    name="tipo_utente"
    label="Tipo di utente"
    :options="[
        'admin' => 'Amministratore',
        'user' => 'Utente',
        'guest' => 'Ospite'
    ]"
    :error="$errors->first('tipo_utente')"
/>
```

## Button Components

### Primary Button
Pulsante per azioni principali.

```blade
<<<<<<< HEAD
<x-sixteen::button.primary
=======
<x-pub_theme::button.primary
>>>>>>> 109edea (.)
    type="submit"
    :disabled="$isLoading"
    wire:loading.attr="disabled"
>
<<<<<<< HEAD
    <x-sixteen::icon.spinner wire:loading />
    Conferma Operazione
</x-sixteen::button.primary>
=======
    <x-pub_theme::icon.spinner wire:loading />
    Conferma Operazione
</x-pub_theme::button.primary>
>>>>>>> 109edea (.)
```

**Varianti:**
- `primary`: Azione principale (blu)
- `secondary`: Azione secondaria (grigio)
- `success`: Azione positiva (verde)
- `warning`: Azione di avviso (giallo)
- `danger`: Azione pericolosa (rosso)
- `info`: Azione informativa (azzurro)

### Icon Button
Pulsante con icona.

```blade
<<<<<<< HEAD
<x-sixteen::button.icon
=======
<x-pub_theme::button.icon
>>>>>>> 109edea (.)
    variant="primary"
    icon="heroicon-o-plus"
    aria-label="Aggiungi elemento"
/>
```

### Button Group
Gruppo di pulsanti correlati.

```blade
<<<<<<< HEAD
<x-sixteen::button.group>
    <x-sixteen::button.secondary>
        Annulla
    </x-sixteen::button.secondary>
    <x-sixteen::button.primary>
        Salva
    </x-sixteen::button.primary>
</x-sixteen::button.group>
=======
<x-pub_theme::button.group>
    <x-pub_theme::button.secondary>
        Annulla
    </x-pub_theme::button.secondary>
    <x-pub_theme::button.primary>
        Salva
    </x-pub_theme::button.primary>
</x-pub_theme::button.group>
>>>>>>> 109edea (.)
```

## Alert Components

### Success Alert
Alert per operazioni completate con successo.

```blade
<<<<<<< HEAD
<x-sixteen::alert.success>
    <x-slot name="icon">
        <x-sixteen::icon.check-circle />
    </x-slot>
    Operazione completata con successo
</x-sixteen::alert.success>
=======
<x-pub_theme::alert.success>
    <x-slot name="icon">
        <x-pub_theme::icon.check-circle />
    </x-slot>
    Operazione completata con successo
</x-pub_theme::alert.success>
>>>>>>> 109edea (.)
```

### Warning Alert
Alert per avvisi e informazioni importanti.

```blade
<<<<<<< HEAD
<x-sixteen::alert.warning>
    <x-slot name="icon">
        <x-sixteen::icon.exclamation-triangle />
    </x-slot>
    Attenzione: alcuni dati potrebbero essere incompleti
</x-sixteen::alert.warning>
=======
<x-pub_theme::alert.warning>
    <x-slot name="icon">
        <x-pub_theme::icon.exclamation-triangle />
    </x-slot>
    Attenzione: alcuni dati potrebbero essere incompleti
</x-pub_theme::alert.warning>
>>>>>>> 109edea (.)
```

### Error Alert
Alert per errori e problemi.

```blade
<<<<<<< HEAD
<x-sixteen::alert.error>
    <x-slot name="icon">
        <x-sixteen::icon.x-circle />
    </x-slot>
    Si è verificato un errore durante l'operazione
</x-sixteen::alert.error>
=======
<x-pub_theme::alert.error>
    <x-slot name="icon">
        <x-pub_theme::icon.x-circle />
    </x-slot>
    Si è verificato un errore durante l'operazione
</x-pub_theme::alert.error>
>>>>>>> 109edea (.)
```

### Info Alert
Alert per informazioni generali.

```blade
<<<<<<< HEAD
<x-sixteen::alert.info>
    <x-slot name="icon">
        <x-sixteen::icon.information-circle />
    </x-slot>
    Informazione importante per l'utente
</x-sixteen::alert.info>
=======
<x-pub_theme::alert.info>
    <x-slot name="icon">
        <x-pub_theme::icon.information-circle />
    </x-slot>
    Informazione importante per l'utente
</x-pub_theme::alert.info>
>>>>>>> 109edea (.)
```

## Card Components

### Basic Card
Card semplice per contenuti.

```blade
<<<<<<< HEAD
<x-sixteen::card>
=======
<x-pub_theme::card>
>>>>>>> 109edea (.)
    <x-slot name="header">
        <h3 class="text-lg font-semibold">Titolo Card</h3>
    </x-slot>
    
    <div class="prose">
        Contenuto della card con formattazione tipografica.
    </div>
    
    <x-slot name="footer">
<<<<<<< HEAD
        <x-sixteen::button.group>
            <x-sixteen::button.secondary>Annulla</x-sixteen::button.secondary>
            <x-sixteen::button.primary>Salva</x-sixteen::button.primary>
        </x-sixteen::button.group>
    </x-slot>
</x-sixteen::card>
=======
        <x-pub_theme::button.group>
            <x-pub_theme::button.secondary>Annulla</x-pub_theme::button.secondary>
            <x-pub_theme::button.primary>Salva</x-pub_theme::button.primary>
        </x-pub_theme::button.group>
    </x-slot>
</x-pub_theme::card>
>>>>>>> 109edea (.)
```

### Interactive Card
Card con interazioni.

```blade
<<<<<<< HEAD
<x-sixteen::card.interactive>
    <x-slot name="header">
        <h3 class="text-lg font-semibold">Card Interattiva</h3>
        <x-sixteen::button.icon
=======
<x-pub_theme::card.interactive>
    <x-slot name="header">
        <h3 class="text-lg font-semibold">Card Interattiva</h3>
        <x-pub_theme::button.icon
>>>>>>> 109edea (.)
            variant="ghost"
            icon="heroicon-o-ellipsis-vertical"
            size="sm"
        />
    </x-slot>
    
    Contenuto della card interattiva
<<<<<<< HEAD
</x-sixteen::card.interactive>
=======
</x-pub_theme::card.interactive>
>>>>>>> 109edea (.)
```

## Navigation Components

### Main Navigation
Navigazione principale dell'applicazione.

```blade
<<<<<<< HEAD
<x-sixteen::navigation.main>
    <x-sixteen::navigation.item
=======
<x-pub_theme::navigation.main>
    <x-pub_theme::navigation.item
>>>>>>> 109edea (.)
        href="/dashboard"
        icon="heroicon-o-home"
        :active="request()->is('dashboard*')"
    >
        Dashboard
<<<<<<< HEAD
    </x-sixteen::navigation.item>
    
    <x-sixteen::navigation.item
=======
    </x-pub_theme::navigation.item>
    
    <x-pub_theme::navigation.item
>>>>>>> 109edea (.)
        href="/users"
        icon="heroicon-o-users"
        :active="request()->is('users*')"
    >
        Utenti
<<<<<<< HEAD
    </x-sixteen::navigation.item>
</x-sixteen::navigation.main>
=======
    </x-pub_theme::navigation.item>
</x-pub_theme::navigation.main>
>>>>>>> 109edea (.)
```

### Breadcrumb
Navigazione a breadcrumb.

```blade
<<<<<<< HEAD
<x-sixteen::navigation.breadcrumb>
    <x-sixteen::navigation.breadcrumb-item href="/">
        Home
    </x-sixteen::navigation.breadcrumb-item>
    <x-sixteen::navigation.breadcrumb-item href="/users">
        Utenti
    </x-sixteen::navigation.breadcrumb-item>
    <x-sixteen::navigation.breadcrumb-item>
        Dettagli Utente
    </x-sixteen::navigation.breadcrumb-item>
</x-sixteen::navigation.breadcrumb>
=======
<x-pub_theme::navigation.breadcrumb>
    <x-pub_theme::navigation.breadcrumb-item href="/">
        Home
    </x-pub_theme::navigation.breadcrumb-item>
    <x-pub_theme::navigation.breadcrumb-item href="/users">
        Utenti
    </x-pub_theme::navigation.breadcrumb-item>
    <x-pub_theme::navigation.breadcrumb-item>
        Dettagli Utente
    </x-pub_theme::navigation.breadcrumb-item>
</x-pub_theme::navigation.breadcrumb>
>>>>>>> 109edea (.)
```

## Table Components

### Data Table
Tabella dati con ordinamento e paginazione.

```blade
<<<<<<< HEAD
<x-sixteen::table.data>
    <x-slot name="header">
        <x-sixteen::table.header-cell sortable="name">
            Nome
        </x-sixteen::table.header-cell>
        <x-sixteen::table.header-cell sortable="email">
            Email
        </x-sixteen::table.header-cell>
        <x-sixteen::table.header-cell sortable="created_at">
            Data Creazione
        </x-sixteen::table.header-cell>
        <x-sixteen::table.header-cell>
            Azioni
        </x-sixteen::table.header-cell>
    </x-slot>
    
    @foreach($users as $user)
        <x-sixteen::table.row>
            <x-sixteen::table.cell>
                {{ $user->name }}
            </x-sixteen::table.cell>
            <x-sixteen::table.cell>
                {{ $user->email }}
            </x-sixteen::table.cell>
            <x-sixteen::table.cell>
                {{ $user->created_at->format('d/m/Y') }}
            </x-sixteen::table.cell>
            <x-sixteen::table.cell>
                <x-sixteen::button.icon
=======
<x-pub_theme::table.data>
    <x-slot name="header">
        <x-pub_theme::table.header-cell sortable="name">
            Nome
        </x-pub_theme::table.header-cell>
        <x-pub_theme::table.header-cell sortable="email">
            Email
        </x-pub_theme::table.header-cell>
        <x-pub_theme::table.header-cell sortable="created_at">
            Data Creazione
        </x-pub_theme::table.header-cell>
        <x-pub_theme::table.header-cell>
            Azioni
        </x-pub_theme::table.header-cell>
    </x-slot>
    
    @foreach($users as $user)
        <x-pub_theme::table.row>
            <x-pub_theme::table.cell>
                {{ $user->name }}
            </x-pub_theme::table.cell>
            <x-pub_theme::table.cell>
                {{ $user->email }}
            </x-pub_theme::table.cell>
            <x-pub_theme::table.cell>
                {{ $user->created_at->format('d/m/Y') }}
            </x-pub_theme::table.cell>
            <x-pub_theme::table.cell>
                <x-pub_theme::button.icon
>>>>>>> 109edea (.)
                    variant="ghost"
                    icon="heroicon-o-pencil"
                    size="sm"
                />
<<<<<<< HEAD
            </x-sixteen::table.cell>
        </x-sixteen::table.row>
    @endforeach
</x-sixteen::table.data>
=======
            </x-pub_theme::table.cell>
        </x-pub_theme::table.row>
    @endforeach
</x-pub_theme::table.data>
>>>>>>> 109edea (.)
```

## Modal Components

### Basic Modal
Modal semplice per contenuti.

```blade
<<<<<<< HEAD
<x-sixteen::modal
=======
<x-pub_theme::modal
>>>>>>> 109edea (.)
    name="confirm-delete"
    title="Conferma Eliminazione"
    description="Sei sicuro di voler eliminare questo elemento? Questa azione è irreversibile."
>
    <x-slot name="footer">
<<<<<<< HEAD
        <x-sixteen::button.group>
            <x-sixteen::button.secondary wire:click="closeModal">
                Annulla
            </x-sixteen::button.secondary>
            <x-sixteen::button.danger wire:click="delete">
                Elimina
            </x-sixteen::button.danger>
        </x-sixteen::button.group>
    </x-slot>
</x-sixteen::modal>
=======
        <x-pub_theme::button.group>
            <x-pub_theme::button.secondary wire:click="closeModal">
                Annulla
            </x-pub_theme::button.secondary>
            <x-pub_theme::button.danger wire:click="delete">
                Elimina
            </x-pub_theme::button.danger>
        </x-pub_theme::button.group>
    </x-slot>
</x-pub_theme::modal>
>>>>>>> 109edea (.)
```

### Form Modal
Modal con form integrato.

```blade
<<<<<<< HEAD
<x-sixteen::modal.form
=======
<x-pub_theme::modal.form
>>>>>>> 109edea (.)
    name="edit-user"
    title="Modifica Utente"
    wire:submit="save"
>
<<<<<<< HEAD
    <x-sixteen::form.input
=======
    <x-pub_theme::form.input
>>>>>>> 109edea (.)
        name="name"
        label="Nome"
        wire:model="form.name"
    />
    
<<<<<<< HEAD
    <x-sixteen::form.input
=======
    <x-pub_theme::form.input
>>>>>>> 109edea (.)
        name="email"
        type="email"
        label="Email"
        wire:model="form.email"
    />
    
    <x-slot name="footer">
<<<<<<< HEAD
        <x-sixteen::button.group>
            <x-sixteen::button.secondary wire:click="closeModal">
                Annulla
            </x-sixteen::button.secondary>
            <x-sixteen::button.primary type="submit">
                Salva
            </x-sixteen::button.primary>
        </x-sixteen::button.group>
    </x-slot>
</x-sixteen::modal.form>
=======
        <x-pub_theme::button.group>
            <x-pub_theme::button.secondary wire:click="closeModal">
                Annulla
            </x-pub_theme::button.secondary>
            <x-pub_theme::button.primary type="submit">
                Salva
            </x-pub_theme::button.primary>
        </x-pub_theme::button.group>
    </x-slot>
</x-pub_theme::modal.form>
>>>>>>> 109edea (.)
```

## Icon Components

### Heroicons
Icone da Heroicons.

```blade
<<<<<<< HEAD
<x-sixteen::icon.home />
<x-sixteen::icon.user class="w-6 h-6" />
<x-sixteen::icon.arrow-right class="text-blue-600" />
=======
<x-pub_theme::icon.home />
<x-pub_theme::icon.user class="w-6 h-6" />
<x-pub_theme::icon.arrow-right class="text-blue-600" />
>>>>>>> 109edea (.)
```

### Custom Icons
Icone personalizzate del tema.

```blade
<<<<<<< HEAD
<x-sixteen::icon.logo class="w-8 h-8" />
<x-sixteen::icon.flag-italy class="w-4 h-4" />
=======
<x-pub_theme::icon.logo class="w-8 h-8" />
<x-pub_theme::icon.flag-italy class="w-4 h-4" />
>>>>>>> 109edea (.)
```

## Utility Components

### Loading Spinner
Indicatore di caricamento.

```blade
<<<<<<< HEAD
<x-sixteen::loading.spinner />
<x-sixteen::loading.spinner size="lg" />
<x-sixteen::loading.spinner color="primary" />
=======
<x-pub_theme::loading.spinner />
<x-pub_theme::loading.spinner size="lg" />
<x-pub_theme::loading.spinner color="primary" />
>>>>>>> 109edea (.)
```

### Empty State
Stato vuoto per liste o contenuti.

```blade
<<<<<<< HEAD
<x-sixteen::empty-state
=======
<x-pub_theme::empty-state
>>>>>>> 109edea (.)
    icon="heroicon-o-document"
    title="Nessun documento trovato"
    description="Non ci sono documenti da visualizzare al momento."
>
<<<<<<< HEAD
    <x-sixteen::button.primary>
        Crea Primo Documento
    </x-sixteen::button.primary>
</x-sixteen::empty-state>
=======
    <x-pub_theme::button.primary>
        Crea Primo Documento
    </x-pub_theme::button.primary>
</x-pub_theme::empty-state>
>>>>>>> 109edea (.)
```

### Badge
Badge per etichette e stati.

```blade
<<<<<<< HEAD
<x-sixteen::badge.success>Attivo</x-sixteen::badge.success>
<x-sixteen::badge.warning>In Attesa</x-sixteen::badge.warning>
<x-sixteen::badge.error>Errore</x-sixteen::badge.error>
<x-sixteen::badge.info>Info</x-sixteen::badge.info>
=======
<x-pub_theme::badge.success>Attivo</x-pub_theme::badge.success>
<x-pub_theme::badge.warning>In Attesa</x-pub_theme::badge.warning>
<x-pub_theme::badge.error>Errore</x-pub_theme::badge.error>
<x-pub_theme::badge.info>Info</x-pub_theme::badge.info>
>>>>>>> 109edea (.)
```

## Customizzazione

### Override Componenti
Per personalizzare un componente, creare un file nella directory `resources/views/components/` del tema:

```blade
{{-- resources/views/components/sixteen/button/primary.blade.php --}}
<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2'
]) }}>
    {{ $slot }}
</button>
```

### Variabili CSS
Definire variabili CSS personalizzate:

```css
:root {
    --sixteen-primary: #0066cc;
    --sixteen-secondary: #666666;
    --sixteen-success: #28a745;
    --sixteen-warning: #ffc107;
    --sixteen-danger: #dc3545;
}
```

## Accessibilità

Tutti i componenti sono progettati per essere accessibili:

- **ARIA labels** per screen reader
- **Focus management** per navigazione da tastiera
- **Contrasto colori** conforme a WCAG 2.1 AA
- **Struttura semantica** corretta
- **Testo alternativo** per icone e immagini

## Best Practices

1. **Utilizzare sempre le traduzioni** per testi visibili
2. **Mantenere coerenza** nell'uso dei componenti
3. **Testare su diversi dispositivi** e browser
4. **Verificare accessibilità** con screen reader
5. **Ottimizzare performance** con lazy loading quando necessario

---

**Versione**: 1.0.0  
**Ultimo aggiornamento**: Gennaio 2025  
**Compatibilità**: Laravel 10+, Filament 3.x, Tailwind CSS 3.x 