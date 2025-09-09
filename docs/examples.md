# Esempi di Utilizzo - Tema Sixteen

## Panoramica

Questa documentazione fornisce esempi pratici di utilizzo di tutti i componenti del tema Sixteen convertiti da Bootstrap Italia a Tailwind CSS. Ogni esempio include il codice completo e le varianti disponibili.

## Alert e Notifiche

### Alert Base con Varianti

```blade
<!-- Alert Informazione -->
<<<<<<< HEAD
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
<x-pub_theme::blocks.alerts.alert variant="info" title="Informazione">
=======
<x-sixteen::blocks.alerts.alert variant="info" title="Informazione">
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
</x-pub_theme::blocks.alerts.alert>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.alerts.alert>
>>>>>>> 0321d33 (.)
```

### Alert Dismissible

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.alerts.alert 
=======
<x-pub_theme::blocks.alerts.alert 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.alerts.alert 
>>>>>>> 0321d33 (.)
    variant="info" 
    dismissible="true"
    title="Messaggio importante"
>
    Questo alert può essere chiuso dall'utente.
<<<<<<< HEAD
<<<<<<< HEAD
</x-sixteen::blocks.alerts.alert>
=======
</x-pub_theme::blocks.alerts.alert>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.alerts.alert>
>>>>>>> 0321d33 (.)
```

### Alert con Link

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.alerts.alert-link 
=======
<x-pub_theme::blocks.alerts.alert-link 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.alerts.alert-link 
>>>>>>> 0321d33 (.)
    variant="success"
    href="/dettagli-operazione"
    link-text="Visualizza dettagli"
>
    Operazione completata. Clicca per vedere i dettagli.
<<<<<<< HEAD
<<<<<<< HEAD
</x-sixteen::blocks.alerts.alert-link>
=======
</x-pub_theme::blocks.alerts.alert-link>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.alerts.alert-link>
>>>>>>> 0321d33 (.)
```

### Toast Notifications

```blade
<!-- Toast di successo -->
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.alerts.toast 
=======
<x-pub_theme::blocks.alerts.toast 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.alerts.toast 
>>>>>>> 0321d33 (.)
    variant="success"
    position="top-right"
    duration="5000"
>
    Messaggio salvato con successo!
<<<<<<< HEAD
<<<<<<< HEAD
</x-sixteen::blocks.alerts.toast>

<!-- Toast di errore -->
<x-sixteen::blocks.alerts.toast 
=======
</x-pub_theme::blocks.alerts.toast>

<!-- Toast di errore -->
<x-pub_theme::blocks.alerts.toast 
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.alerts.toast>

<!-- Toast di errore -->
<x-sixteen::blocks.alerts.toast 
>>>>>>> 0321d33 (.)
    variant="danger"
    position="top-center"
    duration="8000"
>
    Errore durante il salvataggio.
<<<<<<< HEAD
<<<<<<< HEAD
</x-sixteen::blocks.alerts.toast>
=======
</x-pub_theme::blocks.alerts.toast>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.alerts.toast>
>>>>>>> 0321d33 (.)
```

## Pulsanti e Azioni

### Pulsanti Base

```blade
<!-- Pulsante Primario -->
<<<<<<< HEAD
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
<x-pub_theme::blocks.buttons.button variant="primary" size="md">
=======
<x-sixteen::blocks.buttons.button variant="primary" size="md">
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
</x-pub_theme::blocks.buttons.button>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.buttons.button>
>>>>>>> 0321d33 (.)
```

### Pulsanti con Icone

```blade
<!-- Pulsante con icona a sinistra -->
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.buttons.button 
=======
<x-pub_theme::blocks.buttons.button 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.buttons.button 
>>>>>>> 0321d33 (.)
    variant="primary" 
    icon="heroicon-o-plus"
    icon-position="left"
>
    Aggiungi Elemento
<<<<<<< HEAD
<<<<<<< HEAD
</x-sixteen::blocks.buttons.button>

<!-- Pulsante con icona a destra -->
<x-sixteen::blocks.buttons.button 
=======
</x-pub_theme::blocks.buttons.button>

<!-- Pulsante con icona a destra -->
<x-pub_theme::blocks.buttons.button 
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.buttons.button>

<!-- Pulsante con icona a destra -->
<x-sixteen::blocks.buttons.button 
>>>>>>> 0321d33 (.)
    variant="outline" 
    icon="heroicon-o-arrow-right"
    icon-position="right"
>
    Avanti
<<<<<<< HEAD
<<<<<<< HEAD
</x-sixteen::blocks.buttons.button>
=======
</x-pub_theme::blocks.buttons.button>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.buttons.button>
>>>>>>> 0321d33 (.)
```

### Gruppi di Pulsanti

```blade
<<<<<<< HEAD
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
<x-pub_theme::blocks.buttons.button-group>
    <x-pub_theme::blocks.buttons.button-group-item variant="outline">
=======
<x-sixteen::blocks.buttons.button-group>
    <x-sixteen::blocks.buttons.button-group-item variant="outline">
>>>>>>> 0321d33 (.)
        <x-heroicon-o-chevron-left class="h-4 w-4" />
        Precedente
    </x-sixteen::blocks.buttons.button-group-item>
    
    <x-sixteen::blocks.buttons.button-group-item variant="primary">
        Pagina 1
    </x-sixteen::blocks.buttons.button-group-item>
    
    <x-sixteen::blocks.buttons.button-group-item variant="outline">
        Successivo
        <x-heroicon-o-chevron-right class="h-4 w-4" />
<<<<<<< HEAD
    </x-pub_theme::blocks.buttons.button-group-item>
</x-pub_theme::blocks.buttons.button-group>
>>>>>>> 109edea (.)
=======
    </x-sixteen::blocks.buttons.button-group-item>
</x-sixteen::blocks.buttons.button-group>
>>>>>>> 0321d33 (.)
```

## Card e Contenitori

### Card Base

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.cards.card>
    <p class="text-gray-600">
        Questa è una card semplice con contenuto di testo.
    </p>
</x-sixteen::blocks.cards.card>
=======
<x-pub_theme::blocks.cards.card>
    <p class="text-gray-600">
        Questa è una card semplice con contenuto di testo.
    </p>
</x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.cards.card>
    <p class="text-gray-600">
        Questa è una card semplice con contenuto di testo.
    </p>
</x-sixteen::blocks.cards.card>
>>>>>>> 0321d33 (.)
```

### Card con Header e Footer

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.cards.card with-header="true" with-footer="true">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Titolo Card</h3>
            <x-sixteen::blocks.utilities.badge variant="success">Nuovo</x-sixteen::blocks.utilities.badge>
=======
<x-pub_theme::blocks.cards.card with-header="true" with-footer="true">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Titolo Card</h3>
            <x-pub_theme::blocks.utilities.badge variant="success">Nuovo</x-pub_theme::blocks.utilities.badge>
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.cards.card with-header="true" with-footer="true">
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold text-gray-900">Titolo Card</h3>
            <x-sixteen::blocks.utilities.badge variant="success">Nuovo</x-sixteen::blocks.utilities.badge>
>>>>>>> 0321d33 (.)
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
            <x-pub_theme::blocks.buttons.button variant="outline" size="sm">
=======
            <x-sixteen::blocks.buttons.button variant="outline" size="sm">
>>>>>>> 0321d33 (.)
                Annulla
            </x-sixteen::blocks.buttons.button>
            <x-sixteen::blocks.buttons.button variant="primary" size="sm">
                Salva
            </x-sixteen::blocks.buttons.button>
        </div>
    </x-slot>
<<<<<<< HEAD
</x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.cards.card>
>>>>>>> 0321d33 (.)
```

### Card con Overlay

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.cards.card-overlay 
=======
<x-pub_theme::blocks.cards.card-overlay 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.cards.card-overlay 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
        <x-sixteen::blocks.buttons.button variant="primary" size="sm">
            Scopri di più
        </x-sixteen::blocks.buttons.button>
    </div>
</x-sixteen::blocks.cards.card-overlay>
=======
        <x-pub_theme::blocks.buttons.button variant="primary" size="sm">
=======
        <x-sixteen::blocks.buttons.button variant="primary" size="sm">
>>>>>>> 0321d33 (.)
            Scopri di più
        </x-sixteen::blocks.buttons.button>
    </div>
<<<<<<< HEAD
</x-pub_theme::blocks.cards.card-overlay>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.cards.card-overlay>
>>>>>>> 0321d33 (.)
```

## Form e Input

### Form Completo

```blade
<form class="space-y-6">
    <!-- Input Email -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.forms.input 
=======
    <x-pub_theme::blocks.forms.input 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.input 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    <x-sixteen::blocks.forms.input 
=======
    <x-pub_theme::blocks.forms.input 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.input 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    <x-sixteen::blocks.forms.select 
=======
    <x-pub_theme::blocks.forms.select 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.select 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    <x-sixteen::blocks.forms.checkbox 
=======
    <x-pub_theme::blocks.forms.checkbox 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.checkbox 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
            <x-sixteen::blocks.forms.radio 
=======
            <x-pub_theme::blocks.forms.radio 
>>>>>>> 109edea (.)
=======
            <x-sixteen::blocks.forms.radio 
>>>>>>> 0321d33 (.)
                name="gender"
                value="male"
                label="Maschio"
            />
<<<<<<< HEAD
<<<<<<< HEAD
            <x-sixteen::blocks.forms.radio 
=======
            <x-pub_theme::blocks.forms.radio 
>>>>>>> 109edea (.)
=======
            <x-sixteen::blocks.forms.radio 
>>>>>>> 0321d33 (.)
                name="gender"
                value="female"
                label="Femmina"
            />
<<<<<<< HEAD
<<<<<<< HEAD
            <x-sixteen::blocks.forms.radio 
=======
            <x-pub_theme::blocks.forms.radio 
>>>>>>> 109edea (.)
=======
            <x-sixteen::blocks.forms.radio 
>>>>>>> 0321d33 (.)
                name="gender"
                value="other"
                label="Altro"
            />
        </div>
    </div>
    
    <!-- Switch Notifiche -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.forms.switch 
=======
    <x-pub_theme::blocks.forms.switch 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.switch 
>>>>>>> 0321d33 (.)
        name="notifications"
        label="Ricevi notifiche"
        help-text="Riceverai notifiche via email"
    />
    
    <!-- Textarea Descrizione -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.forms.textarea 
=======
    <x-pub_theme::blocks.forms.textarea 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.textarea 
>>>>>>> 0321d33 (.)
        name="description"
        label="Descrizione"
        placeholder="Inserisci una descrizione dettagliata..."
        rows="4"
        maxlength="500"
        help-text="Massimo 500 caratteri"
    />
    
    <!-- File Upload -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.forms.file-upload 
=======
    <x-pub_theme::blocks.forms.file-upload 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.forms.file-upload 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
        <x-sixteen::blocks.buttons.button variant="outline">
            Annulla
        </x-sixteen::blocks.buttons.button>
        <x-sixteen::blocks.buttons.button variant="primary">
            Salva
        </x-sixteen::blocks.buttons.button>
=======
        <x-pub_theme::blocks.buttons.button variant="outline">
=======
        <x-sixteen::blocks.buttons.button variant="outline">
>>>>>>> 0321d33 (.)
            Annulla
        </x-sixteen::blocks.buttons.button>
        <x-sixteen::blocks.buttons.button variant="primary">
            Salva
<<<<<<< HEAD
        </x-pub_theme::blocks.buttons.button>
>>>>>>> 109edea (.)
=======
        </x-sixteen::blocks.buttons.button>
>>>>>>> 0321d33 (.)
    </div>
</form>
```

## Navigazione

### Navbar Completa

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.navigation.navbar 
=======
<x-pub_theme::blocks.navigation.navbar 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.navigation.navbar 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
</x-sixteen::blocks.navigation.navbar>
=======
</x-pub_theme::blocks.navigation.navbar>
>>>>>>> 109edea (.)
=======
</x-sixteen::blocks.navigation.navbar>
>>>>>>> 0321d33 (.)
```

### Breadcrumb

```blade
<<<<<<< HEAD
<<<<<<< HEAD
<x-sixteen::blocks.navigation.breadcrumb 
=======
<x-pub_theme::blocks.navigation.breadcrumb 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.navigation.breadcrumb 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
<x-sixteen::blocks.navigation.pagination 
=======
<x-pub_theme::blocks.navigation.pagination 
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.navigation.pagination 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
<x-sixteen::blocks.layout.container>
=======
<x-pub_theme::blocks.layout.container>
>>>>>>> 109edea (.)
=======
<x-sixteen::blocks.layout.container>
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
        <x-sixteen::blocks.layout.grid cols="3" gap="lg" responsive="true">
            <x-sixteen::blocks.cards.card>
=======
        <x-pub_theme::blocks.layout.grid cols="3" gap="lg" responsive="true">
            <x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
        <x-sixteen::blocks.layout.grid cols="3" gap="lg" responsive="true">
            <x-sixteen::blocks.cards.card>
>>>>>>> 0321d33 (.)
                <div class="text-center">
                    <x-heroicon-o-computer-desktop class="h-12 w-12 text-blue-600 mx-auto mb-4" />
                    <h3 class="text-lg font-semibold mb-2">Digitalizzazione</h3>
                    <p class="text-gray-600">Processi digitali per la PA</p>
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
            </x-sixteen::blocks.cards.card>
            
            <x-sixteen::blocks.cards.card>
=======
            </x-pub_theme::blocks.cards.card>
            
            <x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
            </x-sixteen::blocks.cards.card>
            
            <x-sixteen::blocks.cards.card>
>>>>>>> 0321d33 (.)
                <div class="text-center">
                    <x-heroicon-o-shield-check class="h-12 w-12 text-green-600 mx-auto mb-4" />
                    <h3 class="text-lg font-semibold mb-2">Sicurezza</h3>
                    <p class="text-gray-600">Soluzioni di sicurezza avanzate</p>
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
            </x-sixteen::blocks.cards.card>
            
            <x-sixteen::blocks.cards.card>
=======
            </x-pub_theme::blocks.cards.card>
            
            <x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
            </x-sixteen::blocks.cards.card>
            
            <x-sixteen::blocks.cards.card>
>>>>>>> 0321d33 (.)
                <div class="text-center">
                    <x-heroicon-o-chart-bar class="h-12 w-12 text-purple-600 mx-auto mb-4" />
                    <h3 class="text-lg font-semibold mb-2">Analytics</h3>
                    <p class="text-gray-600">Analisi dati e reportistica</p>
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
            </x-sixteen::blocks.cards.card>
        </x-sixteen::blocks.layout.grid>
    </div>
</x-sixteen::blocks.layout.container>
=======
            </x-pub_theme::blocks.cards.card>
        </x-pub_theme::blocks.layout.grid>
    </div>
</x-pub_theme::blocks.layout.container>
>>>>>>> 109edea (.)
=======
            </x-sixteen::blocks.cards.card>
        </x-sixteen::blocks.layout.grid>
    </div>
</x-sixteen::blocks.layout.container>
>>>>>>> 0321d33 (.)
```

## Feedback

### Progress Bar

```blade
<div class="space-y-6">
    <!-- Progress Base -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.progress 
=======
    <x-pub_theme::blocks.feedback.progress 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.feedback.progress 
>>>>>>> 0321d33 (.)
        :value="75"
        :max="100"
        variant="primary"
        label="Completamento progetto"
        show-percentage="true"
    />
    
    <!-- Progress Animato -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.progress 
=======
    <x-pub_theme::blocks.feedback.progress 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.feedback.progress 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.progress 
=======
    <x-pub_theme::blocks.feedback.progress 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.feedback.progress 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.spinner 
=======
    <x-pub_theme::blocks.feedback.spinner 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.feedback.spinner 
>>>>>>> 0321d33 (.)
        variant="primary"
        size="md"
        label="Caricamento in corso..."
    />
    
    <!-- Spinner Grande -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.spinner 
=======
    <x-pub_theme::blocks.feedback.spinner 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.feedback.spinner 
>>>>>>> 0321d33 (.)
        variant="success"
        size="lg"
        label="Elaborazione dati..."
    />
    
    <!-- Spinner Senza Label -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.feedback.spinner 
=======
    <x-pub_theme::blocks.feedback.spinner 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.feedback.spinner 
>>>>>>> 0321d33 (.)
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
        <x-pub_theme::blocks.utilities.badge variant="primary">
=======
        <x-sixteen::blocks.utilities.badge variant="primary">
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
        </x-pub_theme::blocks.utilities.badge>
>>>>>>> 109edea (.)
=======
        </x-sixteen::blocks.utilities.badge>
>>>>>>> 0321d33 (.)
    </div>
    
    <!-- Badge Pill -->
    <div class="flex items-center space-x-2">
<<<<<<< HEAD
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
        <x-pub_theme::blocks.utilities.badge variant="primary" pill="true">
=======
        <x-sixteen::blocks.utilities.badge variant="primary" pill="true">
>>>>>>> 0321d33 (.)
            Pill Badge
        </x-sixteen::blocks.utilities.badge>
        
        <x-sixteen::blocks.utilities.badge variant="success" pill="true">
            Success Pill
        </x-sixteen::blocks.utilities.badge>
    </div>
    
    <!-- Badge Dismissible -->
<<<<<<< HEAD
    <x-pub_theme::blocks.utilities.badge 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.utilities.badge 
>>>>>>> 0321d33 (.)
        variant="info" 
        dismissible="true"
    >
        Badge rimovibile
<<<<<<< HEAD
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.badge>
=======
    </x-pub_theme::blocks.utilities.badge>
>>>>>>> 109edea (.)
=======
    </x-sixteen::blocks.utilities.badge>
>>>>>>> 0321d33 (.)
</div>
```

### Tooltip

```blade
<div class="space-y-4">
    <!-- Tooltip Top -->
<<<<<<< HEAD
<<<<<<< HEAD
    <x-sixteen::blocks.utilities.tooltip 
=======
    <x-pub_theme::blocks.utilities.tooltip 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.utilities.tooltip 
>>>>>>> 0321d33 (.)
        content="Informazioni aggiuntive"
        position="top"
        variant="dark"
    >
        <button class="px-4 py-2 bg-blue-600 text-white rounded">
            Hover me (top)
        </button>
<<<<<<< HEAD
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.tooltip>
    
    <!-- Tooltip Bottom -->
    <x-sixteen::blocks.utilities.tooltip 
=======
    </x-pub_theme::blocks.utilities.tooltip>
    
    <!-- Tooltip Bottom -->
    <x-pub_theme::blocks.utilities.tooltip 
>>>>>>> 109edea (.)
=======
    </x-sixteen::blocks.utilities.tooltip>
    
    <!-- Tooltip Bottom -->
    <x-sixteen::blocks.utilities.tooltip 
>>>>>>> 0321d33 (.)
        content="Descrizione dettagliata"
        position="bottom"
        variant="light"
    >
        <button class="px-4 py-2 bg-green-600 text-white rounded">
            Hover me (bottom)
        </button>
<<<<<<< HEAD
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.tooltip>
    
    <!-- Tooltip Click -->
    <x-sixteen::blocks.utilities.tooltip 
=======
    </x-pub_theme::blocks.utilities.tooltip>
    
    <!-- Tooltip Click -->
    <x-pub_theme::blocks.utilities.tooltip 
>>>>>>> 109edea (.)
=======
    </x-sixteen::blocks.utilities.tooltip>
    
    <!-- Tooltip Click -->
    <x-sixteen::blocks.utilities.tooltip 
>>>>>>> 0321d33 (.)
        content="Clicca per vedere il tooltip"
        position="right"
        trigger="click"
    >
        <button class="px-4 py-2 bg-purple-600 text-white rounded">
            Click me
        </button>
<<<<<<< HEAD
<<<<<<< HEAD
    </x-sixteen::blocks.utilities.tooltip>
=======
    </x-pub_theme::blocks.utilities.tooltip>
>>>>>>> 109edea (.)
=======
    </x-sixteen::blocks.utilities.tooltip>
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    <x-sixteen::blocks.navigation.navbar 
=======
    <x-pub_theme::blocks.navigation.navbar 
>>>>>>> 109edea (.)
=======
    <x-sixteen::blocks.navigation.navbar 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
    </x-sixteen::blocks.navigation.navbar>
    
    <!-- Main Content -->
    <main class="py-8">
        <x-sixteen::blocks.layout.container>
            <!-- Breadcrumb -->
            <x-sixteen::blocks.navigation.breadcrumb 
=======
    </x-pub_theme::blocks.navigation.navbar>
=======
    </x-sixteen::blocks.navigation.navbar>
>>>>>>> 0321d33 (.)
    
    <!-- Main Content -->
    <main class="py-8">
        <x-sixteen::blocks.layout.container>
            <!-- Breadcrumb -->
<<<<<<< HEAD
            <x-pub_theme::blocks.navigation.breadcrumb 
>>>>>>> 109edea (.)
=======
            <x-sixteen::blocks.navigation.breadcrumb 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
                    <x-sixteen::blocks.alerts.alert variant="info" title="Informazione">
                        Questo è un esempio di alert informativo.
                    </x-sixteen::blocks.alerts.alert>
                    
                    <x-sixteen::blocks.alerts.alert variant="success" title="Successo">
                        Operazione completata con successo!
                    </x-sixteen::blocks.alerts.alert>
=======
                    <x-pub_theme::blocks.alerts.alert variant="info" title="Informazione">
=======
                    <x-sixteen::blocks.alerts.alert variant="info" title="Informazione">
>>>>>>> 0321d33 (.)
                        Questo è un esempio di alert informativo.
                    </x-sixteen::blocks.alerts.alert>
                    
                    <x-sixteen::blocks.alerts.alert variant="success" title="Successo">
                        Operazione completata con successo!
<<<<<<< HEAD
                    </x-pub_theme::blocks.alerts.alert>
>>>>>>> 109edea (.)
=======
                    </x-sixteen::blocks.alerts.alert>
>>>>>>> 0321d33 (.)
                </div>
            </section>
            
            <!-- Form Section -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Form di Esempio</h2>
<<<<<<< HEAD
<<<<<<< HEAD
                <x-sixteen::blocks.cards.card>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <x-sixteen::blocks.forms.input 
=======
                <x-pub_theme::blocks.cards.card>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <x-pub_theme::blocks.forms.input 
>>>>>>> 109edea (.)
=======
                <x-sixteen::blocks.cards.card>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <x-sixteen::blocks.forms.input 
>>>>>>> 0321d33 (.)
                                name="nome"
                                label="Nome"
                                placeholder="Inserisci il tuo nome"
                                required="true"
                            />
                            
<<<<<<< HEAD
<<<<<<< HEAD
                            <x-sixteen::blocks.forms.input 
=======
                            <x-pub_theme::blocks.forms.input 
>>>>>>> 109edea (.)
=======
                            <x-sixteen::blocks.forms.input 
>>>>>>> 0321d33 (.)
                                name="cognome"
                                label="Cognome"
                                placeholder="Inserisci il tuo cognome"
                                required="true"
                            />
                        </div>
                        
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.input 
=======
                        <x-pub_theme::blocks.forms.input 
>>>>>>> 109edea (.)
=======
                        <x-sixteen::blocks.forms.input 
>>>>>>> 0321d33 (.)
                            name="email"
                            type="email"
                            label="Email"
                            placeholder="nome@esempio.it"
                            required="true"
                            icon-left="heroicon-o-envelope"
                        />
                        
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.select 
=======
                        <x-pub_theme::blocks.forms.select 
>>>>>>> 109edea (.)
=======
                        <x-sixteen::blocks.forms.select 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.textarea 
=======
                        <x-pub_theme::blocks.forms.textarea 
>>>>>>> 109edea (.)
=======
                        <x-sixteen::blocks.forms.textarea 
>>>>>>> 0321d33 (.)
                            name="messaggio"
                            label="Messaggio"
                            placeholder="Inserisci il tuo messaggio..."
                            rows="4"
                        />
                        
<<<<<<< HEAD
<<<<<<< HEAD
                        <x-sixteen::blocks.forms.checkbox 
=======
                        <x-pub_theme::blocks.forms.checkbox 
>>>>>>> 109edea (.)
=======
                        <x-sixteen::blocks.forms.checkbox 
>>>>>>> 0321d33 (.)
                            name="newsletter"
                            label="Iscriviti alla newsletter"
                            help-text="Riceverai aggiornamenti sui nostri servizi"
                        />
                        
                        <div class="flex justify-end space-x-3">
<<<<<<< HEAD
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
                            <x-pub_theme::blocks.buttons.button variant="outline">
=======
                            <x-sixteen::blocks.buttons.button variant="outline">
>>>>>>> 0321d33 (.)
                                Annulla
                            </x-sixteen::blocks.buttons.button>
                            <x-sixteen::blocks.buttons.button variant="primary">
                                Invia
                            </x-sixteen::blocks.buttons.button>
                        </div>
                    </form>
<<<<<<< HEAD
                </x-pub_theme::blocks.cards.card>
>>>>>>> 109edea (.)
=======
                </x-sixteen::blocks.cards.card>
>>>>>>> 0321d33 (.)
            </section>
            
            <!-- Progress Section -->
            <section class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-6">Barre di Progresso</h2>
                <div class="space-y-4">
<<<<<<< HEAD
<<<<<<< HEAD
                    <x-sixteen::blocks.feedback.progress 
=======
                    <x-pub_theme::blocks.feedback.progress 
>>>>>>> 109edea (.)
=======
                    <x-sixteen::blocks.feedback.progress 
>>>>>>> 0321d33 (.)
                        :value="75"
                        :max="100"
                        variant="primary"
                        label="Completamento progetto"
                        show-percentage="true"
                    />
                    
<<<<<<< HEAD
<<<<<<< HEAD
                    <x-sixteen::blocks.feedback.progress 
=======
                    <x-pub_theme::blocks.feedback.progress 
>>>>>>> 109edea (.)
=======
                    <x-sixteen::blocks.feedback.progress 
>>>>>>> 0321d33 (.)
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
<<<<<<< HEAD
                <x-sixteen::blocks.navigation.pagination 
=======
                <x-pub_theme::blocks.navigation.pagination 
>>>>>>> 109edea (.)
=======
                <x-sixteen::blocks.navigation.pagination 
>>>>>>> 0321d33 (.)
                    :current-page="3"
                    :total-pages="15"
                    base-url="/esempi"
                    size="md"
                />
            </section>
<<<<<<< HEAD
<<<<<<< HEAD
        </x-sixteen::blocks.layout.container>
=======
        </x-pub_theme::blocks.layout.container>
>>>>>>> 109edea (.)
=======
        </x-sixteen::blocks.layout.container>
>>>>>>> 0321d33 (.)
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
<<<<<<< HEAD
<<<<<<< HEAD
        <x-sixteen::blocks.layout.container>
            <div class="text-center">
                <p>&copy; 2024 Tema Sixteen. Tutti i diritti riservati.</p>
            </div>
        </x-sixteen::blocks.layout.container>
=======
        <x-pub_theme::blocks.layout.container>
            <div class="text-center">
                <p>&copy; 2024 Tema Sixteen. Tutti i diritti riservati.</p>
            </div>
        </x-pub_theme::blocks.layout.container>
>>>>>>> 109edea (.)
=======
        <x-sixteen::blocks.layout.container>
            <div class="text-center">
                <p>&copy; 2024 Tema Sixteen. Tutti i diritti riservati.</p>
            </div>
        </x-sixteen::blocks.layout.container>
>>>>>>> 0321d33 (.)
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
**Compatibilità**: Tailwind CSS 3.x, Alpine.js 3.x, Laravel 10.x 