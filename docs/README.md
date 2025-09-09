<<<<<<< HEAD
<<<<<<< HEAD
# Tema Sixteen - Documentazione Completa

## Panoramica

Il tema Sixteen è un tema moderno per Laravel che implementa le **Linee Guida di Design per i Servizi Digitali della Pubblica Amministrazione** utilizzando **Tailwind CSS** invece di Bootstrap Italia. Il tema è progettato per garantire accessibilità, usabilità e coerenza visiva in conformità con gli standard italiani, fornendo una migrazione completa da Bootstrap Italia a Tailwind CSS.

## 🚀 Bootstrap Italia to Tailwind Migration

Questa documentazione include una **guida completa alla migrazione** da Bootstrap Italia a Tailwind CSS, con esempi pratici e implementazioni conformi alle linee guida PA:

- **[Guida alla Migrazione Bootstrap Italia → Tailwind](bootstrap-italia-to-tailwind.md)** - Mappatura completa dei componenti
- **[Esempi Pratici Bootstrap Italia](bootstrap-italia-examples.md)** - Implementazioni reali con codice
- **[Componenti Form](components/form-components.md)** - Input, validazione, accessibilità
- **[Componenti Navigazione](components/navigation-components.md)** - Header, breadcrumb, sidebar, footer
- **[Componenti Layout](components/layout-components.md)** - Grid, card, hero, modal, alert

## Caratteristiche Principali

### 🎨 Design System Compliant
- Conformità alle **Linee Guida di Design** della PA italiana
- Implementazione con **Tailwind CSS** per massima flessibilità
- Palette colori semantica e accessibile
- Tipografia ottimizzata per la leggibilità

### 🔧 Tecnologie
- **Tailwind CSS** per lo styling
- **DaisyUI** per componenti avanzati
- **Inter** come font principale
- **Heroicons** per le icone
- **Alpine.js** per interazioni dinamiche

### 📱 Responsive Design
- Mobile-first approach
- Breakpoint ottimizzati per dispositivi PA
- Touch-friendly per tablet e smartphone
- Accessibilità WCAG 2.1 AA

## Struttura del Tema

```
Themes/Sixteen/
├── docs/                    # Documentazione
├── lang/                    # Traduzioni
├── resources/
│   ├── views/              # Template Blade
│   │   ├── auth/           # Pagine autenticazione
│   │   ├── components/     # Componenti riutilizzabili
│   │   ├── filament/       # Componenti Filament
│   │   ├── layouts/        # Layout principali
│   │   └── pages/          # Pagine specifiche
│   ├── css/                # Stili personalizzati
│   └── js/                 # Script JavaScript
├── tailwind.config.js      # Configurazione Tailwind
├── vite.config.js          # Configurazione build
└── theme.json              # Metadati tema
```

## Configurazione Tailwind

Il tema utilizza una configurazione Tailwind avanzata con:

### Colori Semantici
```javascript
colors: {
    primary: colors.blue,      // Azioni principali
    secondary: colors.gray,    // Elementi secondari
    success: colors.green,     // Operazioni positive
    warning: colors.yellow,    // Avvisi
    danger: colors.red,        // Errori e pericoli
    info: colors.blue,         // Informazioni
}
```

### Font System
```javascript
fontFamily: {
    sans: ['Inter var', ...defaultTheme.fontFamily.sans],
}
```

### Dark Mode
```javascript
darkMode: 'class', // Abilitazione dark mode
```

## Componenti Principali

### 1. Layout Base
```blade
<x-sixteen::layout.app>
    <x-slot name="header">
        <!-- Header content -->
    </x-slot>
    
    <x-slot name="sidebar">
        <!-- Sidebar content -->
    </x-slot>
    
    <!-- Main content -->
</x-sixteen::layout.app>
```

### 2. Form Components
```blade
<x-sixteen::form.input
    name="email"
    type="email"
    label="Indirizzo Email"
    placeholder="Inserisci la tua email"
    required
/>

<x-sixteen::form.select
    name="provincia"
    label="Provincia"
    :options="$province"
    placeholder="Seleziona una provincia"
/>
```

### 3. Alert Components
```blade
<x-sixteen::alert.success>
    Operazione completata con successo
</x-sixteen::alert.success>

<x-sixteen::alert.warning>
    Attenzione: alcuni dati potrebbero essere incompleti
</x-sixteen::alert.warning>

<x-sixteen::alert.error>
    Si è verificato un errore durante l'operazione
</x-sixteen::alert.error>
```

### 4. Button Components
```blade
<x-sixteen::button.primary>
    Conferma Operazione
</x-sixteen::button.primary>

<x-sixteen::button.secondary>
    Annulla
</x-sixteen::button.secondary>

<x-sixteen::button.danger>
    Elimina
</x-sixteen::button.danger>
```

## Integrazione con Filament

### Admin Panel Provider
```php
use Filament\Panel;
use Themes\Sixteen\Providers\SixteenPanelProvider;

class AdminPanelProvider extends SixteenPanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->defaultTheme('sixteen')
            ->brandName('Nome Applicazione')
            ->favicon(asset('images/favicon.ico'))
            ->navigationGroups([
                'Gestione Utenti',
                'Configurazione',
                'Report',
            ]);
=======
# Tema Sixteen - Bootstrap Italia per Laravel/Tailwind
=======
# Tema Sixteen - Documentazione Completa
>>>>>>> 0321d33 (.)

## Panoramica

Il tema Sixteen è un tema moderno per Laravel che implementa le **Linee Guida di Design per i Servizi Digitali della Pubblica Amministrazione** utilizzando **Tailwind CSS** invece di Bootstrap Italia. Il tema è progettato per garantire accessibilità, usabilità e coerenza visiva in conformità con gli standard italiani, fornendo una migrazione completa da Bootstrap Italia a Tailwind CSS.

## 🚀 Bootstrap Italia to Tailwind Migration

Questa documentazione include una **guida completa alla migrazione** da Bootstrap Italia a Tailwind CSS, con esempi pratici e implementazioni conformi alle linee guida PA:

- **[Guida alla Migrazione Bootstrap Italia → Tailwind](bootstrap-italia-to-tailwind.md)** - Mappatura completa dei componenti
- **[Esempi Pratici Bootstrap Italia](bootstrap-italia-examples.md)** - Implementazioni reali con codice
- **[Componenti Form](components/form-components.md)** - Input, validazione, accessibilità
- **[Componenti Navigazione](components/navigation-components.md)** - Header, breadcrumb, sidebar, footer
- **[Componenti Layout](components/layout-components.md)** - Grid, card, hero, modal, alert

## Caratteristiche Principali

### 🎨 Design System Compliant
- Conformità alle **Linee Guida di Design** della PA italiana
- Implementazione con **Tailwind CSS** per massima flessibilità
- Palette colori semantica e accessibile
- Tipografia ottimizzata per la leggibilità

### 🔧 Tecnologie
- **Tailwind CSS** per lo styling
- **DaisyUI** per componenti avanzati
- **Inter** come font principale
- **Heroicons** per le icone
- **Alpine.js** per interazioni dinamiche

### 📱 Responsive Design
- Mobile-first approach
- Breakpoint ottimizzati per dispositivi PA
- Touch-friendly per tablet e smartphone
- Accessibilità WCAG 2.1 AA

## Struttura del Tema

```
Themes/Sixteen/
├── docs/                    # Documentazione
├── lang/                    # Traduzioni
├── resources/
│   ├── views/              # Template Blade
│   │   ├── auth/           # Pagine autenticazione
│   │   ├── components/     # Componenti riutilizzabili
│   │   ├── filament/       # Componenti Filament
│   │   ├── layouts/        # Layout principali
│   │   └── pages/          # Pagine specifiche
│   ├── css/                # Stili personalizzati
│   └── js/                 # Script JavaScript
├── tailwind.config.js      # Configurazione Tailwind
├── vite.config.js          # Configurazione build
└── theme.json              # Metadati tema
```

## Configurazione Tailwind

Il tema utilizza una configurazione Tailwind avanzata con:

### Colori Semantici
```javascript
colors: {
<<<<<<< HEAD
    'italia-blue': {
        50: '#E3F2FD',
        500: '#0066CC',  // Primary PA blue
        900: '#003D7A'
    },
    'italia-green': {
        50: '#E8F5E8', 
        500: '#00B373', // Success green
        900: '#007A4F'
    },
    'italia-red': {
        50: '#FFEBEE',
        500: '#D9364F', // Error red  
        900: '#B71C1C'
>>>>>>> 109edea (.)
=======
    primary: colors.blue,      // Azioni principali
    secondary: colors.gray,    // Elementi secondari
    success: colors.green,     // Operazioni positive
    warning: colors.yellow,    // Avvisi
    danger: colors.red,        // Errori e pericoli
    info: colors.blue,         // Informazioni
}
```

### Font System
```javascript
fontFamily: {
    sans: ['Inter var', ...defaultTheme.fontFamily.sans],
}
```

### Dark Mode
```javascript
darkMode: 'class', // Abilitazione dark mode
```

## Componenti Principali

### 1. Layout Base
```blade
<x-sixteen::layout.app>
    <x-slot name="header">
        <!-- Header content -->
    </x-slot>
    
    <x-slot name="sidebar">
        <!-- Sidebar content -->
    </x-slot>
    
    <!-- Main content -->
</x-sixteen::layout.app>
```

### 2. Form Components
```blade
<x-sixteen::form.input
    name="email"
    type="email"
    label="Indirizzo Email"
    placeholder="Inserisci la tua email"
    required
/>

<x-sixteen::form.select
    name="provincia"
    label="Provincia"
    :options="$province"
    placeholder="Seleziona una provincia"
/>
```

### 3. Alert Components
```blade
<x-sixteen::alert.success>
    Operazione completata con successo
</x-sixteen::alert.success>

<x-sixteen::alert.warning>
    Attenzione: alcuni dati potrebbero essere incompleti
</x-sixteen::alert.warning>

<x-sixteen::alert.error>
    Si è verificato un errore durante l'operazione
</x-sixteen::alert.error>
```

### 4. Button Components
```blade
<x-sixteen::button.primary>
    Conferma Operazione
</x-sixteen::button.primary>

<x-sixteen::button.secondary>
    Annulla
</x-sixteen::button.secondary>

<x-sixteen::button.danger>
    Elimina
</x-sixteen::button.danger>
```

## Integrazione con Filament

### Admin Panel Provider
```php
use Filament\Panel;
use Themes\Sixteen\Providers\SixteenPanelProvider;

class AdminPanelProvider extends SixteenPanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->defaultTheme('sixteen')
            ->brandName('Nome Applicazione')
            ->favicon(asset('images/favicon.ico'))
            ->navigationGroups([
                'Gestione Utenti',
                'Configurazione',
                'Report',
            ]);
>>>>>>> 0321d33 (.)
    }
}
```

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0321d33 (.)
### Custom Components
```php
use Filament\Forms\Components\Section;

Section::make('Dati Personali')
    ->schema([
        // Form fields
    ])
    ->columns(2)
    ->collapsible();
```

## Accessibilità

### WCAG 2.1 AA Compliance
- Contrasto colori ≥ 4.5:1 per testo normale
- Contrasto colori ≥ 3:1 per testo grande
- Focus visibile su tutti gli elementi interattivi
- Navigazione da tastiera completa
- Testo alternativo per immagini
- Struttura semantica corretta

### Screen Reader Support
```blade
<!-- Esempio di label accessibile -->
<label for="email" class="sr-only">
    Indirizzo Email
</label>
<input 
    id="email"
    type="email"
    aria-describedby="email-help"
    aria-required="true"
/>
<div id="email-help" class="text-sm text-gray-600">
    Inserisci un indirizzo email valido
</div>
```

## Best Practices

### 1. Naming Convention
- Utilizzare nomi descrittivi per le classi
- Seguire la convenzione BEM per CSS custom
- Mantenere coerenza nei nomi dei componenti

### 2. Performance
- Utilizzare Tailwind JIT per build ottimizzate
- Minimizzare CSS custom
- Lazy loading per componenti pesanti

### 3. Responsive Design
```blade
<!-- Mobile-first approach -->
<div class="w-full md:w-1/2 lg:w-1/3">
    <!-- Content -->
</div>

<!-- Touch-friendly buttons -->
<button class="min-h-[44px] px-4 py-2">
    <!-- Button content -->
</button>
```

### 4. Internationalization
```blade
<!-- Utilizzare sempre le traduzioni -->
<h1>{{ __('sixteen::pages.home.title') }}</h1>
<p>{{ __('sixteen::pages.home.description') }}</p>
```

## Personalizzazione

### Variabili CSS Custom
<<<<<<< HEAD
```css
:root {
    --sixteen-primary: #0066cc;
    --sixteen-secondary: #666666;
    --sixteen-success: #28a745;
    --sixteen-warning: #ffc107;
    --sixteen-danger: #dc3545;
}
```

### Override Componenti
```blade
{{-- Override di un componente --}}
@component('sixteen::components.button', ['variant' => 'custom'])
    Testo Personalizzato
@endcomponent
```

## Testing

### Test Visivi
```php
// Test per componenti del tema
public function test_button_component_renders_correctly()
{
    $this->blade('<x-sixteen::button.primary>Test</x-sixteen::button.primary>')
        ->assertSee('Test')
        ->assertSee('bg-blue-600');
}
```

### Test di Accessibilità
```php
// Test per compliance WCAG
public function test_form_has_proper_labels()
{
    $this->get('/contact')
        ->assertSee('for="email"')
        ->assertSee('aria-required="true"');
}
```

## Deployment

### Build Process
```bash
# Installazione dipendenze
npm install

# Build per produzione
npm run build

# Build con ottimizzazioni
npm run build -- --minify
```

### Configurazione Server
```nginx
# Nginx configuration per asset statici
location /themes/sixteen {
    alias /path/to/themes/sixteen/public;
    expires 1y;
    add_header Cache-Control "public, immutable";
}
```

## Troubleshooting

### Problemi Comuni

1. **Stili non caricati**
   - Verificare che Vite sia configurato correttamente
   - Controllare i path degli asset

2. **Componenti non trovati**
   - Verificare il namespace del tema
   - Controllare la registrazione nel service provider

3. **Dark mode non funziona**
   - Verificare la classe 'dark' sul tag html
   - Controllare la configurazione Tailwind

### Debug
```bash
# Verificare build Tailwind
npx tailwindcss --config tailwind.config.js --input input.css --output output.css

# Analizzare bundle
npm run build -- --analyze
```

## Contribuire

### Guidelines per Contributi
1. Seguire le convenzioni di coding
2. Aggiungere test per nuove funzionalità
3. Documentare le modifiche
4. Verificare accessibilità

### Struttura Pull Request
- Descrizione chiara delle modifiche
- Screenshot per cambiamenti visivi
- Test unitari e di integrazione
- Documentazione aggiornata

## Riferimenti

- [Linee Guida Design PA](https://designers.italia.it/)
- [Bootstrap Italia](https://italia.github.io/bootstrap-italia/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [WCAG 2.1 Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)

---

**Versione**: 1.0.0  
**Ultimo aggiornamento**: Gennaio 2025  
**Compatibilità**: Laravel 10+, Filament 3.x, Tailwind CSS 3.x 
=======
### Tipografia PA Compliant
=======
>>>>>>> 0321d33 (.)
```css
:root {
    --sixteen-primary: #0066cc;
    --sixteen-secondary: #666666;
    --sixteen-success: #28a745;
    --sixteen-warning: #ffc107;
    --sixteen-danger: #dc3545;
}
```

### Override Componenti
```blade
{{-- Override di un componente --}}
@component('sixteen::components.button', ['variant' => 'custom'])
    Testo Personalizzato
@endcomponent
```

## Testing

### Test Visivi
```php
// Test per componenti del tema
public function test_button_component_renders_correctly()
{
    $this->blade('<x-sixteen::button.primary>Test</x-sixteen::button.primary>')
        ->assertSee('Test')
        ->assertSee('bg-blue-600');
}
```

### Test di Accessibilità
```php
// Test per compliance WCAG
public function test_form_has_proper_labels()
{
    $this->get('/contact')
        ->assertSee('for="email"')
        ->assertSee('aria-required="true"');
}
```

## Deployment

### Build Process
```bash
# Installazione dipendenze
npm install

# Build per produzione
npm run build

# Build con ottimizzazioni
npm run build -- --minify
```

### Configurazione Server
```nginx
# Nginx configuration per asset statici
location /themes/sixteen {
    alias /path/to/themes/sixteen/public;
    expires 1y;
    add_header Cache-Control "public, immutable";
}
```

## Troubleshooting

### Problemi Comuni

1. **Stili non caricati**
   - Verificare che Vite sia configurato correttamente
   - Controllare i path degli asset

2. **Componenti non trovati**
   - Verificare il namespace del tema
   - Controllare la registrazione nel service provider

3. **Dark mode non funziona**
   - Verificare la classe 'dark' sul tag html
   - Controllare la configurazione Tailwind

### Debug
```bash
# Verificare build Tailwind
npx tailwindcss --config tailwind.config.js --input input.css --output output.css

# Analizzare bundle
npm run build -- --analyze
```

## Contribuire

### Guidelines per Contributi
1. Seguire le convenzioni di coding
2. Aggiungere test per nuove funzionalità
3. Documentare le modifiche
4. Verificare accessibilità

### Struttura Pull Request
- Descrizione chiara delle modifiche
- Screenshot per cambiamenti visivi
- Test unitari e di integrazione
- Documentazione aggiornata

## Riferimenti

- [Linee Guida Design PA](https://designers.italia.it/)
- [Bootstrap Italia](https://italia.github.io/bootstrap-italia/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [WCAG 2.1 Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)

---

<<<<<<< HEAD
## 🏅 Status Badge

![AGID Compliance](https://img.shields.io/badge/AGID-48%25%20Compliant-yellow)
![WCAG 2.1](https://img.shields.io/badge/WCAG%202.1-AA-green)
![Laravel](https://img.shields.io/badge/Laravel-12+-red)
![Tailwind](https://img.shields.io/badge/Tailwind-3.4+-blue)

**Versione**: 2.0.0  
**Ultimo aggiornamento**: Settembre 1, 2025  
**Mantenuto da**: Team Bootstrap Italia Migration  
**Licenza**: MIT
>>>>>>> 109edea (.)
=======
**Versione**: 1.0.0  
**Ultimo aggiornamento**: Gennaio 2025  
**Compatibilità**: Laravel 10+, Filament 3.x, Tailwind CSS 3.x 
>>>>>>> 0321d33 (.)
