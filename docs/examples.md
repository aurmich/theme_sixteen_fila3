# Esempi di Utilizzo - Tema Sixteen

## Panoramica

Questa documentazione fornisce esempi pratici di utilizzo di tutti i componenti del tema Sixteen convertiti da Bootstrap Italia a Tailwind CSS. Ogni esempio include il codice completo e le varianti disponibili.

## Alert e Notifiche

### Alert Base con Varianti

```blade
<!-- Alert Informazione -->
<<<<<<< HEAD
<x-pub_theme::blocks.alerts.alert variant="info" title="Informazione">
<<<<<<< HEAD
<x-sixteen::blocks.alerts.alert variant="info" title="Informazione">
    Questo è un messaggio informativo per l'utente.
</x-sixteen::blocks.alerts.alert>

<!-- Alert Successo -->
<x-sixteen::blocks.alerts.alert variant="success" title="Operazione completata">
    L'operazione è stata completata con successo.
</x-sixteen::blocks.alerts.alert>

<!-- Alert Warning -->
<x-sixteen::blocks.alerts.alert variant="warning" title="Attenzione">
    Attenzione: questa azione non può essere annullata.
</x-sixteen::blocks.alerts.alert>

<!-- Alert Errore -->
<x-sixteen::blocks.alerts.alert variant="danger" title="Errore">
    Si è verificato un errore durante l'operazione.
</x-sixteen::blocks.alerts.alert>
=======
=======
<x-pub_theme::alerts.alert variant="info" title="Informazione">
>>>>>>> c979680 (.)
    Questo è un messaggio informativo per l'utente.
</x-pub_theme::alerts.alert>

<!-- Alert Successo -->
<x-pub_theme::alerts.alert variant="success" title="Operazione completata">
    L'operazione è stata completata con successo.
</x-pub_theme::alerts.alert>

<!-- Alert Warning -->
<x-pub_theme::alerts.alert variant="warning" title="Attenzione">
    Attenzione: questa azione non può essere annullata.
</x-pub_theme::alerts.alert>

<!-- Alert Errore -->
<x-pub_theme::alerts.alert variant="danger" title="Errore">
    Si è verificato un errore durante l'operazione.
<<<<<<< HEAD
</x-pub_theme::blocks.alerts.alert>
>>>>>>> 109edea (.)
=======
</x-pub_theme::alerts.alert>
>>>>>>> c979680 (.)
```

### Alert Dismissible

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.alerts.alert 
<<<<<<< HEAD
<x-sixteen::blocks.alerts.alert 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::alerts.alert 
>>>>>>> c979680 (.)
    variant="info" 
    dismissible="true"
    title="Messaggio importante"
>
    Questo alert può essere chiuso dall'utente.
<<<<<<< HEAD
</x-pub_theme::blocks.alerts.alert>
<<<<<<< HEAD
</x-sixteen::blocks.alerts.alert>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::alerts.alert>
>>>>>>> c979680 (.)
```

### Alert con Link

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.alerts.alert-link 
<<<<<<< HEAD
<x-sixteen::blocks.alerts.alert-link 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::alerts.alert-link 
>>>>>>> c979680 (.)
    variant="success"
    href="/dettagli-operazione"
    link-text="Visualizza dettagli"
>
    Operazione completata. Clicca per vedere i dettagli.
<<<<<<< HEAD
</x-pub_theme::blocks.alerts.alert-link>
<<<<<<< HEAD
</x-sixteen::blocks.alerts.alert-link>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::alerts.alert-link>
>>>>>>> c979680 (.)
```

### Toast Notifications

```blade
<!-- Toast di successo -->
<<<<<<< HEAD
<x-pub_theme::blocks.alerts.toast 
<<<<<<< HEAD
<x-sixteen::blocks.alerts.toast 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::alerts.toast 
>>>>>>> c979680 (.)
    variant="success"
    position="top-right"
    duration="5000"
>
    Messaggio salvato con successo!
</x-pub_theme::alerts.toast>

<!-- Toast di errore -->
<<<<<<< HEAD
<x-pub_theme::blocks.alerts.toast 
<<<<<<< HEAD
</x-sixteen::blocks.alerts.toast>

<!-- Toast di errore -->
<x-sixteen::blocks.alerts.toast 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::alerts.toast 
>>>>>>> c979680 (.)
    variant="danger"
    position="top-center"
    duration="8000"
>
    Errore durante il salvataggio.
<<<<<<< HEAD
</x-pub_theme::blocks.alerts.toast>
<<<<<<< HEAD
</x-sixteen::blocks.alerts.toast>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::alerts.toast>
>>>>>>> c979680 (.)
```

## Pulsanti e Azioni

### Pulsanti Base

```blade
<!-- Pulsante Primario -->
<<<<<<< HEAD
<x-pub_theme::blocks.buttons.button variant="primary" size="md">
<<<<<<< HEAD
<x-sixteen::blocks.buttons.button variant="primary" size="md">
    Conferma Azione
</x-sixteen::blocks.buttons.button>

<!-- Pulsante Secondario -->
<x-sixteen::blocks.buttons.button variant="secondary" size="md">
    Annulla
</x-sixteen::blocks.buttons.button>

<!-- Pulsante Outline -->
<x-sixteen::blocks.buttons.button variant="outline" size="md">
    Modifica
</x-sixteen::blocks.buttons.button>

<!-- Pulsante Ghost -->
<x-sixteen::blocks.buttons.button variant="ghost" size="md">
    Visualizza
</x-sixteen::blocks.buttons.button>

<!-- Pulsante Pericolo -->
<x-sixteen::blocks.buttons.button variant="danger" size="md">
    Elimina
</x-sixteen::blocks.buttons.button>
=======
=======
<x-pub_theme::buttons.button variant="primary" size="md">
>>>>>>> c979680 (.)
    Conferma Azione
</x-pub_theme::buttons.button>

<!-- Pulsante Secondario -->
<x-pub_theme::buttons.button variant="secondary" size="md">
    Annulla
</x-pub_theme::buttons.button>

<!-- Pulsante Outline -->
<x-pub_theme::buttons.button variant="outline" size="md">
    Modifica
</x-pub_theme::buttons.button>

<!-- Pulsante Ghost -->
<x-pub_theme::buttons.button variant="ghost" size="md">
    Visualizza
</x-pub_theme::buttons.button>

<!-- Pulsante Pericolo -->
<x-pub_theme::buttons.button variant="danger" size="md">
    Elimina
<<<<<<< HEAD
</x-pub_theme::blocks.buttons.button>
>>>>>>> 109edea (.)
=======
</x-pub_theme::buttons.button>
>>>>>>> c979680 (.)
```

### Pulsanti con Icone

```blade
<!-- Pulsante con icona a sinistra -->
<<<<<<< HEAD
<x-pub_theme::blocks.buttons.button 
<<<<<<< HEAD
<x-sixteen::blocks.buttons.button 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::buttons.button 
>>>>>>> c979680 (.)
    variant="primary" 
    icon="heroicon-o-plus"
    icon-position="left"
>
    Aggiungi Elemento
</x-pub_theme::buttons.button>

<!-- Pulsante con icona a destra -->
<<<<<<< HEAD
<x-pub_theme::blocks.buttons.button 
<<<<<<< HEAD
</x-sixteen::blocks.buttons.button>

<!-- Pulsante con icona a destra -->
<x-sixteen::blocks.buttons.button 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::buttons.button 
>>>>>>> c979680 (.)
    variant="outline" 
    icon="heroicon-o-arrow-right"
    icon-position="right"
>
    Avanti
<<<<<<< HEAD
</x-pub_theme::blocks.buttons.button>
<<<<<<< HEAD
</x-sixteen::blocks.buttons.button>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::buttons.button>
>>>>>>> c979680 (.)
```

### Gruppi di Pulsanti

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.buttons.button-group>
    <x-pub_theme::blocks.buttons.button-group-item variant="outline">
<<<<<<< HEAD
<x-sixteen::blocks.buttons.button-group>
    <x-sixteen::blocks.buttons.button-group-item variant="outline">
        <x-heroicon-o-chevron-left class="h-4 w-4" />
        Precedente
    </x-sixteen::blocks.buttons.button-group-item>
    
    <x-sixteen::blocks.buttons.button-group-item variant="primary">
        Pagina 1
    </x-sixteen::blocks.buttons.button-group-item>
    
    <x-sixteen::blocks.buttons.button-group-item variant="outline">
        Successivo
        <x-heroicon-o-chevron-right class="h-4 w-4" />
    </x-sixteen::blocks.buttons.button-group-item>
</x-sixteen::blocks.buttons.button-group>
=======
=======
<x-pub_theme::buttons.button-group>
    <x-pub_theme::buttons.button-group-item variant="outline">
>>>>>>> c979680 (.)
        <x-heroicon-o-chevron-left class="h-4 w-4" />
        Precedente
    </x-pub_theme::buttons.button-group-item>
    
    <x-pub_theme::buttons.button-group-item variant="primary">
        Pagina 1
    </x-pub_theme::buttons.button-group-item>
    
    <x-pub_theme::buttons.button-group-item variant="outline">
        Successivo
        <x-heroicon-o-chevron-right class="h-4 w-4" />
<<<<<<< HEAD
    </x-pub_theme::blocks.buttons.button-group-item>
</x-pub_theme::blocks.buttons.button-group>
>>>>>>> 109edea (.)
=======
    </x-pub_theme::buttons.button-group-item>
</x-pub_theme::buttons.button-group>
>>>>>>> c979680 (.)
```

## Card e Contenitori

### Card Base

```blade
<x-pub_theme::cards.card>
    <p class="text-gray-600">
        Questa è una card semplice con contenuto di testo.
    </p>
<<<<<<< HEAD
</x-pub_theme::blocks.cards.card>
<<<<<<< HEAD
<x-sixteen::blocks.cards.card>
    <p class="text-gray-600">
        Questa è una card semplice con contenuto di testo.
    </p>
</x-sixteen::blocks.cards.card>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::cards.card>
>>>>>>> c979680 (.)
```

### Card con Header e Footer

```blade
<x-pub_theme::cards.card with-header="true" with-footer="true">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Titolo Card</h3>
<<<<<<< HEAD
            <x-pub_theme::blocks.utilities.badge variant="success">Nuovo</x-pub_theme::blocks.utilities.badge>
<<<<<<< HEAD
<x-sixteen::blocks.cards.card with-header="true" with-footer="true">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Titolo Card</h3>
            <x-sixteen::blocks.utilities.badge variant="success">Nuovo</x-sixteen::blocks.utilities.badge>
=======
>>>>>>> 109edea (.)
=======
            <x-pub_theme::utilities.badge variant="success">Nuovo</x-pub_theme::utilities.badge>
>>>>>>> c979680 (.)
        </div>
    </x-slot>
    
    <div class="space-y-4">
        <p class="text-gray-600">
            Contenuto principale della card con più elementi.
        </p>
        <div class="flex items-center space-x-2">
            <x-heroicon-o-calendar class="h-4 w-4 text-gray-400" />
            <span class="text-sm text-gray-500">15 Dicembre 2024</span>
        </div>
    </div>
    
    <x-slot name="footer">
        <div class="flex justify-end space-x-2">
<<<<<<< HEAD
            <x-pub_theme::blocks.buttons.button variant="outline" size="sm">
<<<<<<< HEAD
            <x-sixteen::blocks.buttons.button variant="outline" size="sm">
                Annulla
            </x-sixteen::blocks.buttons.button>
            <x-sixteen::blocks.buttons.button variant="primary" size="sm">
                Salva
            </x-sixteen::blocks.buttons.button>
        </div>
    </x-slot>
</x-sixteen::blocks.cards.card>
=======
=======
            <x-pub_theme::buttons.button variant="outline" size="sm">
>>>>>>> c979680 (.)
                Annulla
            </x-pub_theme::buttons.button>
            <x-pub_theme::buttons.button variant="primary" size="sm">
                Salva
            </x-pub_theme::buttons.button>
        </div>
    </x-slot>
<<<<<<< HEAD
</x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
</x-pub_theme::cards.card>
>>>>>>> c979680 (.)
```

### Card con Overlay

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.cards.card-overlay 
<<<<<<< HEAD
<x-sixteen::blocks.cards.card-overlay 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::cards.card-overlay 
>>>>>>> c979680 (.)
    image-src="/images/hero-bg.jpg"
    overlay-title="Servizi Digitali"
    overlay-subtitle="Soluzioni innovative per la PA"
    overlay-position="bottom"
    overlay-variant="dark"
>
    <div class="space-y-2">
        <p class="text-white opacity-90">
            Scopri le nostre soluzioni digitali per la pubblica amministrazione.
        </p>
<<<<<<< HEAD
        <x-pub_theme::blocks.buttons.button variant="primary" size="sm">
<<<<<<< HEAD
        <x-sixteen::blocks.buttons.button variant="primary" size="sm">
            Scopri di più
        </x-sixteen::blocks.buttons.button>
    </div>
</x-sixteen::blocks.cards.card-overlay>
=======
=======
        <x-pub_theme::buttons.button variant="primary" size="sm">
>>>>>>> c979680 (.)
            Scopri di più
        </x-pub_theme::buttons.button>
    </div>
<<<<<<< HEAD
</x-pub_theme::blocks.cards.card-overlay>
>>>>>>> 109edea (.)
=======
</x-pub_theme::cards.card-overlay>
>>>>>>> c979680 (.)
```

## Form e Input

### Form Completo

```blade
<form class="space-y-6">
    <!-- Input Email -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.input 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.input 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.input 
>>>>>>> c979680 (.)
        name="email"
        type="email"
        label="Indirizzo email"
        placeholder="nome@esempio.it"
        help-text="Non condivideremo mai la tua email"
        required="true"
        icon-left="heroicon-o-envelope"
    />
    
    <!-- Input Password -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.input 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.input 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.input 
>>>>>>> c979680 (.)
        name="password"
        type="password"
        label="Password"
        placeholder="Inserisci la password"
        help-text="Minimo 8 caratteri"
        required="true"
        icon-left="heroicon-o-lock-closed"
        icon-right="heroicon-o-eye"
    />
    
    <!-- Select Paese -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.select 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.select 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.select 
>>>>>>> c979680 (.)
        name="country"
        label="Paese di residenza"
        placeholder="Seleziona un paese"
        :options="[
            'it' => 'Italia',
            'fr' => 'Francia',
            'de' => 'Germania',
            'es' => 'Spagna'
        ]"
        required="true"
    />
    
    <!-- Checkbox Termini -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.checkbox 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.checkbox 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.checkbox 
>>>>>>> c979680 (.)
        name="terms"
        label="Accetto i termini e condizioni"
        help-text="Devi accettare i termini per continuare"
        required="true"
    />
    
    <!-- Radio Genere -->
    <div class="space-y-2">
        <label class="block text-sm font-medium text-gray-700">Genere</label>
        <div class="space-y-2">
<<<<<<< HEAD
            <x-pub_theme::blocks.forms.radio 
<<<<<<< HEAD
            <x-sixteen::blocks.forms.radio 
=======
>>>>>>> 109edea (.)
=======
            <x-pub_theme::forms.radio 
>>>>>>> c979680 (.)
                name="gender"
                value="male"
                label="Maschio"
            />
<<<<<<< HEAD
            <x-pub_theme::blocks.forms.radio 
<<<<<<< HEAD
            <x-sixteen::blocks.forms.radio 
=======
>>>>>>> 109edea (.)
=======
            <x-pub_theme::forms.radio 
>>>>>>> c979680 (.)
                name="gender"
                value="female"
                label="Femmina"
            />
<<<<<<< HEAD
            <x-pub_theme::blocks.forms.radio 
<<<<<<< HEAD
            <x-sixteen::blocks.forms.radio 
=======
>>>>>>> 109edea (.)
=======
            <x-pub_theme::forms.radio 
>>>>>>> c979680 (.)
                name="gender"
                value="other"
                label="Altro"
            />
        </div>
    </div>
    
    <!-- Switch Notifiche -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.switch 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.switch 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.switch 
>>>>>>> c979680 (.)
        name="notifications"
        label="Ricevi notifiche"
        help-text="Riceverai notifiche via email"
    />
    
    <!-- Textarea Descrizione -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.textarea 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.textarea 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.textarea 
>>>>>>> c979680 (.)
        name="description"
        label="Descrizione"
        placeholder="Inserisci una descrizione dettagliata..."
        rows="4"
        maxlength="500"
        help-text="Massimo 500 caratteri"
    />
    
    <!-- File Upload -->
<<<<<<< HEAD
    <x-pub_theme::blocks.forms.file-upload 
<<<<<<< HEAD
    <x-sixteen::blocks.forms.file-upload 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::forms.file-upload 
>>>>>>> c979680 (.)
        name="documents"
        label="Carica documenti"
        accept=".pdf,.doc,.docx,.jpg,.png"
        multiple="true"
        preview="true"
        max-size="10MB"
        help-text="Formati supportati: PDF, DOC, DOCX, JPG, PNG"
    />
    
    <!-- Pulsanti Form -->
    <div class="flex justify-end space-x-3">
<<<<<<< HEAD
        <x-pub_theme::blocks.buttons.button variant="outline">
<<<<<<< HEAD
        <x-sixteen::blocks.buttons.button variant="outline">
            Annulla
        </x-sixteen::blocks.buttons.button>
        <x-sixteen::blocks.buttons.button variant="primary">
            Salva
        </x-sixteen::blocks.buttons.button>
=======
=======
        <x-pub_theme::buttons.button variant="outline">
>>>>>>> c979680 (.)
            Annulla
        </x-pub_theme::buttons.button>
        <x-pub_theme::buttons.button variant="primary">
            Salva
<<<<<<< HEAD
        </x-pub_theme::blocks.buttons.button>
>>>>>>> 109edea (.)
=======
        </x-pub_theme::buttons.button>
>>>>>>> c979680 (.)
    </div>
</form>
```

## Navigazione

### Navbar Completa

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.navigation.navbar 
<<<<<<< HEAD
<x-sixteen::blocks.navigation.navbar 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::navigation.navbar 
>>>>>>> c979680 (.)
    brand="Logo Azienda"
    brand-href="/"
    variant="light"
    sticky="true"
>
    <div class="flex items-center space-x-8">
        <a href="/home" class="text-gray-700 hover:text-blue-600 transition-colors">
            Home
        </a>
        <a href="/servizi" class="text-gray-700 hover:text-blue-600 transition-colors">
            Servizi
        </a>
        <a href="/chi-siamo" class="text-gray-700 hover:text-blue-600 transition-colors">
            Chi siamo
        </a>
        <a href="/contatti" class="text-gray-700 hover:text-blue-600 transition-colors">
            Contatti
        </a>
    </div>
    
    <x-slot name="mobile">
        <div class="space-y-2">
            <a href="/home" class="block px-3 py-2 text-gray-700 hover:text-blue-600">
                Home
            </a>
            <a href="/servizi" class="block px-3 py-2 text-gray-700 hover:text-blue-600">
                Servizi
            </a>
            <a href="/chi-siamo" class="block px-3 py-2 text-gray-700 hover:text-blue-600">
                Chi siamo
            </a>
            <a href="/contatti" class="block px-3 py-2 text-gray-700 hover:text-blue-600">
                Contatti
            </a>
        </div>
    </x-slot>
<<<<<<< HEAD
</x-pub_theme::blocks.navigation.navbar>
<<<<<<< HEAD
</x-sixteen::blocks.navigation.navbar>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::navigation.navbar>
>>>>>>> c979680 (.)
```

### Breadcrumb

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.navigation.breadcrumb 
<<<<<<< HEAD
<x-sixteen::blocks.navigation.breadcrumb 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::navigation.breadcrumb 
>>>>>>> c979680 (.)
    :items="[
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Servizi', 'href' => '/servizi'],
        ['label' => 'Digitalizzazione', 'href' => '/servizi/digitalizzazione'],
        ['label' => 'Piattaforma Web']
    ]"
/>
```

### Pagination

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.navigation.pagination 
<<<<<<< HEAD
<x-sixteen::blocks.navigation.pagination 
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::navigation.pagination 
>>>>>>> c979680 (.)
    :current-page="5"
    :total-pages="20"
    base-url="/prodotti"
    size="md"
    show-first-last="true"
    show-prev-next="true"
    :max-visible="7"
/>
```

## Layout

### Container e Grid

```blade
<<<<<<< HEAD
<x-pub_theme::blocks.layout.container>
<<<<<<< HEAD
<x-sixteen::blocks.layout.container>
=======
>>>>>>> 109edea (.)
=======
<x-pub_theme::layout.container>
>>>>>>> c979680 (.)
    <div class="space-y-8">
        <!-- Header Section -->
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900">I Nostri Servizi</h1>
            <p class="mt-4 text-lg text-gray-600">
                Soluzioni innovative per la pubblica amministrazione
            </p>
        </div>
        
        <!-- Grid di Card -->
<<<<<<< HEAD
        <x-pub_theme::blocks.layout.grid cols="3" gap="lg" responsive="true">
            <x-pub_theme::blocks.cards.card>
<<<<<<< HEAD
        <x-sixteen::blocks.layout.grid cols="3" gap="lg" responsive="true">
            <x-sixteen::blocks.cards.card>
=======
>>>>>>> 109edea (.)
=======
        <x-pub_theme::layout.grid cols="3" gap="lg" responsive="true">
            <x-pub_theme::cards.card>
>>>>>>> c979680 (.)
                <div class="text-center">
                    <x-heroicon-o-computer-desktop class="h-12 w-12 text-blue-600 mx-auto mb-4" />
                    <h3 class="text-lg font-semibold mb-2">Digitalizzazione</h3>
                    <p class="text-gray-600">Processi digitali per la PA</p>
                </div>
            </x-pub_theme::cards.card>
            
<<<<<<< HEAD
            <x-pub_theme::blocks.cards.card>
<<<<<<< HEAD
            </x-sixteen::blocks.cards.card>
            
            <x-sixteen::blocks.cards.card>
=======
>>>>>>> 109edea (.)
=======
            <x-pub_theme::cards.card>
>>>>>>> c979680 (.)
                <div class="text-center">
                    <x-heroicon-o-shield-check class="h-12 w-12 text-green-600 mx-auto mb-4" />
                    <h3 class="text-lg font-semibold mb-2">Sicurezza</h3>
                    <p class="text-gray-600">Soluzioni di sicurezza avanzate</p>
                </div>
            </x-pub_theme::cards.card>
            
<<<<<<< HEAD
            <x-pub_theme::blocks.cards.card>
<<<<<<< HEAD
            </x-sixteen::blocks.cards.card>
            
            <x-sixteen::blocks.cards.card>
=======
>>>>>>> 109edea (.)
=======
            <x-pub_theme::cards.card>
>>>>>>> c979680 (.)
                <div class="text-center">
                    <x-heroicon-o-chart-bar class="h-12 w-12 text-purple-600 mx-auto mb-4" />
                    <h3 class="text-lg font-semibold mb-2">Analytics</h3>
                    <p class="text-gray-600">Analisi dati e reportistica</p>
                </div>
            </x-pub_theme::cards.card>
        </x-pub_theme::layout.grid>
    </div>
<<<<<<< HEAD
</x-pub_theme::blocks.layout.container>
<<<<<<< HEAD
            </x-sixteen::blocks.cards.card>
        </x-sixteen::blocks.layout.grid>
    </div>
</x-sixteen::blocks.layout.container>
=======
>>>>>>> 109edea (.)
=======
</x-pub_theme::layout.container>
>>>>>>> c979680 (.)
```

## Feedback

### Progress Bar

```blade
<div class="space-y-6">
    <!-- Progress Base -->
<<<<<<< HEAD
    <x-pub_theme::blocks.feedback.progress 
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.progress 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::feedback.progress 
>>>>>>> c979680 (.)
        :value="75"
        :max="100"
        variant="primary"
        label="Completamento progetto"
        show-percentage="true"
    />
    
    <!-- Progress Animato -->
<<<<<<< HEAD
    <x-pub_theme::blocks.feedback.progress 
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.progress 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::feedback.progress 
>>>>>>> c979680 (.)
        :value="60"
        :max="100"
        variant="success"
        animated="true"
        striped="true"
        label="Caricamento file"
        show-percentage="true"
    />
    
    <!-- Progress con Varianti -->
<<<<<<< HEAD
    <x-pub_theme::blocks.feedback.progress 
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.progress 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::feedback.progress 
>>>>>>> c979680 (.)
        :value="90"
        :max="100"
        variant="warning"
        size="lg"
        label="Utilizzo spazio"
        show-percentage="true"
    />
</div>
```

### Spinner

```blade
<div class="space-y-6">
    <!-- Spinner Base -->
<<<<<<< HEAD
    <x-pub_theme::blocks.feedback.spinner 
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.spinner 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::feedback.spinner 
>>>>>>> c979680 (.)
        variant="primary"
        size="md"
        label="Caricamento in corso..."
    />
    
    <!-- Spinner Grande -->
<<<<<<< HEAD
    <x-pub_theme::blocks.feedback.spinner 
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.spinner 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::feedback.spinner 
>>>>>>> c979680 (.)
        variant="success"
        size="lg"
        label="Elaborazione dati..."
    />
    
    <!-- Spinner Senza Label -->
<<<<<<< HEAD
    <x-pub_theme::blocks.feedback.spinner 
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.spinner 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::feedback.spinner 
>>>>>>> c979680 (.)
        variant="primary"
        size="sm"
    />
</div>
```

## Utilità

### Badge

```blade
<div class="space-y-4">
    <!-- Badge Base -->
    <div class="flex items-center space-x-2">
<<<<<<< HEAD
        <x-pub_theme::blocks.utilities.badge variant="primary">
<<<<<<< HEAD
        <x-sixteen::blocks.utilities.badge variant="primary">
            Nuovo
        </x-sixteen::blocks.utilities.badge>
        
        <x-sixteen::blocks.utilities.badge variant="success">
            Completato
        </x-sixteen::blocks.utilities.badge>
        
        <x-sixteen::blocks.utilities.badge variant="warning">
            In attesa
        </x-sixteen::blocks.utilities.badge>
        
        <x-sixteen::blocks.utilities.badge variant="danger">
            Errore
        </x-sixteen::blocks.utilities.badge>
=======
=======
        <x-pub_theme::utilities.badge variant="primary">
>>>>>>> c979680 (.)
            Nuovo
        </x-pub_theme::utilities.badge>
        
        <x-pub_theme::utilities.badge variant="success">
            Completato
        </x-pub_theme::utilities.badge>
        
        <x-pub_theme::utilities.badge variant="warning">
            In attesa
        </x-pub_theme::utilities.badge>
        
        <x-pub_theme::utilities.badge variant="danger">
            Errore
<<<<<<< HEAD
        </x-pub_theme::blocks.utilities.badge>
>>>>>>> 109edea (.)
=======
        </x-pub_theme::utilities.badge>
>>>>>>> c979680 (.)
    </div>
    
    <!-- Badge Pill -->
    <div class="flex items-center space-x-2">
<<<<<<< HEAD
        <x-pub_theme::blocks.utilities.badge variant="primary" pill="true">
<<<<<<< HEAD
        <x-sixteen::blocks.utilities.badge variant="primary" pill="true">
            Pill Badge
        </x-sixteen::blocks.utilities.badge>
        
        <x-sixteen::blocks.utilities.badge variant="success" pill="true">
            Success Pill
        </x-sixteen::blocks.utilities.badge>
    </div>
    
    <!-- Badge Dismissible -->
    <x-sixteen::blocks.utilities.badge 
=======
=======
        <x-pub_theme::utilities.badge variant="primary" pill="true">
>>>>>>> c979680 (.)
            Pill Badge
        </x-pub_theme::utilities.badge>
        
        <x-pub_theme::utilities.badge variant="success" pill="true">
            Success Pill
        </x-pub_theme::utilities.badge>
    </div>
    
    <!-- Badge Dismissible -->
<<<<<<< HEAD
    <x-pub_theme::blocks.utilities.badge 
>>>>>>> 109edea (.)
=======
    <x-pub_theme::utilities.badge 
>>>>>>> c979680 (.)
        variant="info" 
        dismissible="true"
    >
        Badge rimovibile
<<<<<<< HEAD
    </x-pub_theme::blocks.utilities.badge>
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.badge>
=======
>>>>>>> 109edea (.)
=======
    </x-pub_theme::utilities.badge>
>>>>>>> c979680 (.)
</div>
```

### Tooltip

```blade
<div class="space-y-4">
    <!-- Tooltip Top -->
<<<<<<< HEAD
    <x-pub_theme::blocks.utilities.tooltip 
<<<<<<< HEAD
    <x-sixteen::blocks.utilities.tooltip 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::utilities.tooltip 
>>>>>>> c979680 (.)
        content="Informazioni aggiuntive"
        position="top"
        variant="dark"
    >
        <button class="px-4 py-2 bg-blue-600 text-white rounded">
            Hover me (top)
        </button>
    </x-pub_theme::utilities.tooltip>
    
    <!-- Tooltip Bottom -->
<<<<<<< HEAD
    <x-pub_theme::blocks.utilities.tooltip 
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.tooltip>
    
    <!-- Tooltip Bottom -->
    <x-sixteen::blocks.utilities.tooltip 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::utilities.tooltip 
>>>>>>> c979680 (.)
        content="Descrizione dettagliata"
        position="bottom"
        variant="light"
    >
        <button class="px-4 py-2 bg-green-600 text-white rounded">
            Hover me (bottom)
        </button>
    </x-pub_theme::utilities.tooltip>
    
    <!-- Tooltip Click -->
<<<<<<< HEAD
    <x-pub_theme::blocks.utilities.tooltip 
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.tooltip>
    
    <!-- Tooltip Click -->
    <x-sixteen::blocks.utilities.tooltip 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::utilities.tooltip 
>>>>>>> c979680 (.)
        content="Clicca per vedere il tooltip"
        position="right"
        trigger="click"
    >
        <button class="px-4 py-2 bg-purple-600 text-white rounded">
            Click me
        </button>
<<<<<<< HEAD
    </x-pub_theme::blocks.utilities.tooltip>
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.tooltip>
=======
>>>>>>> 109edea (.)
=======
    </x-pub_theme::utilities.tooltip>
>>>>>>> c979680 (.)
</div>
```

## Pagina Completa di Esempio

```blade
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esempio Tema Sixteen</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
<<<<<<< HEAD
    <x-pub_theme::blocks.navigation.navbar 
<<<<<<< HEAD
    <x-sixteen::blocks.navigation.navbar 
=======
>>>>>>> 109edea (.)
=======
    <x-pub_theme::navigation.navbar 
>>>>>>> c979680 (.)
        brand="Tema Sixteen"
        brand-href="/"
        variant="light"
        sticky="true"
    >
        <div class="flex items-center space-x-8">
            <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
            <a href="/componenti" class="text-gray-700 hover:text-blue-600">Componenti</a>
            <a href="/documentazione" class="text-gray-700 hover:text-blue-600">Documentazione</a>
        </div>
<<<<<<< HEAD
    </x-pub_theme::blocks.navigation.navbar>
<<<<<<< HEAD
    </x-sixteen::blocks.navigation.navbar>
    
    <!-- Main Content -->
    <main class="py-8">
        <x-sixteen::blocks.layout.container>
            <!-- Breadcrumb -->
            <x-sixteen::blocks.navigation.breadcrumb 
=======
=======
    </x-pub_theme::navigation.navbar>
>>>>>>> c979680 (.)
    
    <!-- Main Content -->
    <main class="py-8">
        <x-pub_theme::layout.container>
            <!-- Breadcrumb -->
<<<<<<< HEAD
            <x-pub_theme::blocks.navigation.breadcrumb 
>>>>>>> 109edea (.)
=======
            <x-pub_theme::navigation.breadcrumb 
>>>>>>> c979680 (.)
                :items="[
                    ['label' => 'Home', 'href' => '/'],
                    ['label' => 'Componenti'],
                    ['label' => 'Esempi']
                ]"
            />
            
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">
                    Esempi di Utilizzo
                </h1>
                <p class="text-lg text-gray-600">
                    Questa pagina mostra esempi pratici di utilizzo dei componenti del tema Sixteen.
                </p>
            </div>
            
            <!-- Alert Section -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Alert e Notifiche</h2>
                <div class="space-y-4">
<<<<<<< HEAD
                    <x-pub_theme::blocks.alerts.alert variant="info" title="Informazione">
<<<<<<< HEAD
                    <x-sixteen::blocks.alerts.alert variant="info" title="Informazione">
                        Questo è un esempio di alert informativo.
                    </x-sixteen::blocks.alerts.alert>
                    
                    <x-sixteen::blocks.alerts.alert variant="success" title="Successo">
                        Operazione completata con successo!
                    </x-sixteen::blocks.alerts.alert>
=======
=======
                    <x-pub_theme::alerts.alert variant="info" title="Informazione">
>>>>>>> c979680 (.)
                        Questo è un esempio di alert informativo.
                    </x-pub_theme::alerts.alert>
                    
                    <x-pub_theme::alerts.alert variant="success" title="Successo">
                        Operazione completata con successo!
<<<<<<< HEAD
                    </x-pub_theme::blocks.alerts.alert>
>>>>>>> 109edea (.)
=======
                    </x-pub_theme::alerts.alert>
>>>>>>> c979680 (.)
                </div>
            </section>
            
            <!-- Form Section -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Form di Esempio</h2>
                <x-pub_theme::cards.card>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<<<<<<< HEAD
                            <x-pub_theme::blocks.forms.input 
<<<<<<< HEAD
                <x-sixteen::blocks.cards.card>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <x-sixteen::blocks.forms.input 
=======
>>>>>>> 109edea (.)
=======
                            <x-pub_theme::forms.input 
>>>>>>> c979680 (.)
                                name="nome"
                                label="Nome"
                                placeholder="Inserisci il tuo nome"
                                required="true"
                            />
                            
<<<<<<< HEAD
                            <x-pub_theme::blocks.forms.input 
<<<<<<< HEAD
                            <x-sixteen::blocks.forms.input 
=======
>>>>>>> 109edea (.)
=======
                            <x-pub_theme::forms.input 
>>>>>>> c979680 (.)
                                name="cognome"
                                label="Cognome"
                                placeholder="Inserisci il tuo cognome"
                                required="true"
                            />
                        </div>
                        
<<<<<<< HEAD
                        <x-pub_theme::blocks.forms.input 
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.input 
=======
>>>>>>> 109edea (.)
=======
                        <x-pub_theme::forms.input 
>>>>>>> c979680 (.)
                            name="email"
                            type="email"
                            label="Email"
                            placeholder="nome@esempio.it"
                            required="true"
                            icon-left="heroicon-o-envelope"
                        />
                        
<<<<<<< HEAD
                        <x-pub_theme::blocks.forms.select 
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.select 
=======
>>>>>>> 109edea (.)
=======
                        <x-pub_theme::forms.select 
>>>>>>> c979680 (.)
                            name="categoria"
                            label="Categoria"
                            placeholder="Seleziona una categoria"
                            :options="[
                                'web' => 'Sviluppo Web',
                                'mobile' => 'Sviluppo Mobile',
                                'design' => 'Design',
                                'marketing' => 'Marketing'
                            ]"
                        />
                        
<<<<<<< HEAD
                        <x-pub_theme::blocks.forms.textarea 
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.textarea 
=======
>>>>>>> 109edea (.)
=======
                        <x-pub_theme::forms.textarea 
>>>>>>> c979680 (.)
                            name="messaggio"
                            label="Messaggio"
                            placeholder="Inserisci il tuo messaggio..."
                            rows="4"
                        />
                        
<<<<<<< HEAD
                        <x-pub_theme::blocks.forms.checkbox 
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.checkbox 
=======
>>>>>>> 109edea (.)
=======
                        <x-pub_theme::forms.checkbox 
>>>>>>> c979680 (.)
                            name="newsletter"
                            label="Iscriviti alla newsletter"
                            help-text="Riceverai aggiornamenti sui nostri servizi"
                        />
                        
                        <div class="flex justify-end space-x-3">
<<<<<<< HEAD
                            <x-pub_theme::blocks.buttons.button variant="outline">
<<<<<<< HEAD
                            <x-sixteen::blocks.buttons.button variant="outline">
                                Annulla
                            </x-sixteen::blocks.buttons.button>
                            <x-sixteen::blocks.buttons.button variant="primary">
                                Invia
                            </x-sixteen::blocks.buttons.button>
                        </div>
                    </form>
                </x-sixteen::blocks.cards.card>
=======
=======
                            <x-pub_theme::buttons.button variant="outline">
>>>>>>> c979680 (.)
                                Annulla
                            </x-pub_theme::buttons.button>
                            <x-pub_theme::buttons.button variant="primary">
                                Invia
                            </x-pub_theme::buttons.button>
                        </div>
                    </form>
<<<<<<< HEAD
                </x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
                </x-pub_theme::cards.card>
>>>>>>> c979680 (.)
            </section>
            
            <!-- Progress Section -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Barre di Progresso</h2>
                <div class="space-y-4">
<<<<<<< HEAD
                    <x-pub_theme::blocks.feedback.progress 
<<<<<<< HEAD
                    <x-sixteen::blocks.feedback.progress 
=======
>>>>>>> 109edea (.)
=======
                    <x-pub_theme::feedback.progress 
>>>>>>> c979680 (.)
                        :value="75"
                        :max="100"
                        variant="primary"
                        label="Completamento progetto"
                        show-percentage="true"
                    />
                    
<<<<<<< HEAD
                    <x-pub_theme::blocks.feedback.progress 
<<<<<<< HEAD
                    <x-sixteen::blocks.feedback.progress 
=======
>>>>>>> 109edea (.)
=======
                    <x-pub_theme::feedback.progress 
>>>>>>> c979680 (.)
                        :value="45"
                        :max="100"
                        variant="success"
                        animated="true"
                        label="Caricamento file"
                        show-percentage="true"
                    />
                </div>
            </section>
            
            <!-- Pagination -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Paginazione</h2>
<<<<<<< HEAD
                <x-pub_theme::blocks.navigation.pagination 
<<<<<<< HEAD
                <x-sixteen::blocks.navigation.pagination 
=======
>>>>>>> 109edea (.)
=======
                <x-pub_theme::navigation.pagination 
>>>>>>> c979680 (.)
                    :current-page="3"
                    :total-pages="15"
                    base-url="/esempi"
                    size="md"
                />
            </section>
<<<<<<< HEAD
        </x-pub_theme::blocks.layout.container>
<<<<<<< HEAD
        </x-sixteen::blocks.layout.container>
=======
>>>>>>> 109edea (.)
=======
        </x-pub_theme::layout.container>
>>>>>>> c979680 (.)
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <x-pub_theme::layout.container>
            <div class="text-center">
                <p>&copy; 2024 Tema Sixteen. Tutti i diritti riservati.</p>
            </div>
<<<<<<< HEAD
        </x-pub_theme::blocks.layout.container>
<<<<<<< HEAD
        <x-sixteen::blocks.layout.container>
            <div class="text-center">
                <p>&copy; 2024 Tema Sixteen. Tutti i diritti riservati.</p>
            </div>
        </x-sixteen::blocks.layout.container>
=======
>>>>>>> 109edea (.)
=======
        </x-pub_theme::layout.container>
>>>>>>> c979680 (.)
    </footer>
</body>
</html>
```

## Best Practices

### 1. Accessibilità
- Utilizzare sempre label appropriate per i form
- Includere attributi ARIA quando necessario
- Testare la navigazione da tastiera

### 2. Responsive Design
- Utilizzare le classi responsive di Tailwind
- Testare su diversi dispositivi
- Considerare l'usabilità mobile

### 3. Performance
- Utilizzare componenti leggeri
- Ottimizzare le immagini
- Minimizzare il JavaScript

### 4. Consistenza
- Utilizzare le stesse varianti in tutta l'applicazione
- Mantenere coerenza nei colori e spaziature
- Seguire le convenzioni di naming

---

**Ultimo aggiornamento**: Dicembre 2024
**Versione**: 1.0
<<<<<<< HEAD
**Compatibilità**: Tailwind CSS 3.x, Alpine.js 3.x, Laravel 10.x 
=======
**Compatibilità**: Tailwind CSS 3.x, Alpine.js 3.x, Laravel 10.x 
>>>>>>> 109edea (.)
