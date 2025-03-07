<<<<<<< HEAD
~~~bash
git clone --recurse-submodules https://github.com/aurmich/base_fixcity_fila3.git 
cd base_fixcity_fila3
~~~


~~~bash
git remote -v
~~~
must return 
~~~bash
origin  https://github.com/aurmich/base_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/base_fixcity_fila3.git (push)
~~~

~~~bash
git submodule foreach git remote -v
~~~
must return 
~~~bash
Entering 'bashscripts'
origin  https://github.com/aurmich/bashscripts_fila3.git (fetch)
origin  https://github.com/aurmich/bashscripts_fila3.git (push)
Entering 'laravel/Modules/AI'
origin  https://github.com/aurmich/module_ai_fila3.git (fetch)
origin  https://github.com/aurmich/module_ai_fila3.git (push)
Entering 'laravel/Modules/Activity'
origin  https://github.com/aurmich/module_activity_fila3.git (fetch)
origin  https://github.com/aurmich/module_activity_fila3.git (push)
Entering 'laravel/Modules/Blog'
origin  https://github.com/aurmich/module_blog_fila3.git (fetch)
origin  https://github.com/aurmich/module_blog_fila3.git (push)
Entering 'laravel/Modules/Cms'
origin  https://github.com/aurmich/module_cms_fila3.git (fetch)
origin  https://github.com/aurmich/module_cms_fila3.git (push)
Entering 'laravel/Modules/Comment'
origin  https://github.com/aurmich/module_comment_fila3.git (fetch)
origin  https://github.com/aurmich/module_comment_fila3.git (push)
Entering 'laravel/Modules/Fixcity'
origin  https://github.com/aurmich/module_fixcity_fila3.git (fetch)
origin  https://github.com/aurmich/module_fixcity_fila3.git (push)
Entering 'laravel/Modules/Gdpr'
origin  https://github.com/aurmich/module_gdpr_fila3.git (fetch)
origin  https://github.com/aurmich/module_gdpr_fila3.git (push)
Entering 'laravel/Modules/Geo'
origin  https://github.com/aurmich/module_geo_fila3.git (fetch)
origin  https://github.com/aurmich/module_geo_fila3.git (push)
Entering 'laravel/Modules/Job'
origin  https://github.com/aurmich/module_job_fila3.git (fetch)
origin  https://github.com/aurmich/module_job_fila3.git (push)
Entering 'laravel/Modules/Lang'
origin  https://github.com/aurmich/module_lang_fila3.git (fetch)
origin  https://github.com/aurmich/module_lang_fila3.git (push)
Entering 'laravel/Modules/Media'
origin  https://github.com/aurmich/module_media_fila3.git (fetch)
origin  https://github.com/aurmich/module_media_fila3.git (push)
Entering 'laravel/Modules/Notify'
origin  https://github.com/aurmich/module_notify_fila3.git (fetch)
origin  https://github.com/aurmich/module_notify_fila3.git (push)
Entering 'laravel/Modules/Rating'
origin  https://github.com/aurmich/module_rating_fila3.git (fetch)
origin  https://github.com/aurmich/module_rating_fila3.git (push)
Entering 'laravel/Modules/Seo'
origin  https://github.com/aurmich/module_seo_fila3.git (fetch)
origin  https://github.com/aurmich/module_seo_fila3.git (push)
Entering 'laravel/Modules/Setting'
origin  https://github.com/aurmich/module_setting_fila3.git (fetch)
origin  https://github.com/aurmich/module_setting_fila3.git (push)
Entering 'laravel/Modules/Tenant'
origin  https://github.com/aurmich/module_tenant_fila3.git (fetch)
origin  https://github.com/aurmich/module_tenant_fila3.git (push)
Entering 'laravel/Modules/Ticket'
origin  https://github.com/aurmich/module_ticket_fila3.git (fetch)
origin  https://github.com/aurmich/module_ticket_fila3.git (push)
Entering 'laravel/Modules/UI'
origin  https://github.com/aurmich/module_ui_fila3.git (fetch)
origin  https://github.com/aurmich/module_ui_fila3.git (push)
Entering 'laravel/Modules/User'
origin  https://github.com/aurmich/module_user_fila3.git (fetch)
origin  https://github.com/aurmich/module_user_fila3.git (push)
Entering 'laravel/Modules/Xot'
origin  https://github.com/aurmich/module_xot_fila3.git (fetch)
origin  https://github.com/aurmich/module_xot_fila3.git (push)
Entering 'laravel/Themes/Sixteen'
origin  https://github.com/aurmich/theme_sixteen_fila3.git (fetch)
origin  https://github.com/aurmich/theme_sixteen_fila3.git (push)
Entering 'laravel/Themes/TwentyOne'
origin  https://github.com/aurmich/theme_twentyone_fila3.git (fetch)
origin  https://github.com/aurmich/theme_twentyone_fila3.git (push)
~~~


~~~
cd laravel
cp .env.latest .env
code ..
~~~

=======
# Modulo FixCity

## Descrizione
FixCity è un modulo Laravel progettato per la gestione delle segnalazioni e dei problemi urbani. Permette ai cittadini di segnalare problematiche nella loro città e alle amministrazioni di gestirle in modo efficiente.

## Caratteristiche Principali
- Gestione segnalazioni cittadine
- Sistema di ticketing avanzato
- Gestione profili utente
- Pannello amministrativo Filament
- Supporto multilingua

## Requisiti
- PHP 8.2+
- Laravel 11.x
- Filament 3.x
- Modulo Xot installato

## Installazione
```bash
composer require modules/fixcity
php artisan module:migrate Fixcity
php artisan module:seed Fixcity
```

## Struttura
```
Modules/Fixcity/
├── app/
│   ├── Models/         # Modelli del dominio
│   ├── Providers/      # Service providers
│   └── Filament/       # Risorse Filament
├── config/            # Configurazioni
├── database/         # Migrazioni e seeders
├── resources/        # Views e assets
└── routes/           # Definizioni delle route
```

## Modelli Principali
- `Profile`: Gestione profili utente
- `User`: Gestione utenti
- `Ticket`: Gestione segnalazioni

## Integrazione con Filament
Il modulo utilizza Filament per il pannello amministrativo, offrendo:
- Dashboard personalizzata
- Gestione segnalazioni
- Gestione utenti
- Report e statistiche

## API
Il modulo espone API RESTful per:
- Creazione segnalazioni
- Aggiornamento stato
- Recupero informazioni
- Gestione profili

## Configurazione
```php
// config/fixcity.php
return [
    'notifications' => [
        'email' => true,
        'push' => false,
    ],
    'moderation' => [
        'enabled' => true,
        'auto_approve' => false,
    ]
];
```

## Testing
```bash
php artisan test --filter=Fixcity
```

## Contribuire
1. Fork il repository
2. Crea un branch (`git checkout -b feature/nome-feature`)
3. Commit le modifiche (`git commit -am 'Aggiunta feature'`)
4. Push al branch (`git push origin feature/nome-feature`)
5. Crea una Pull Request

## Licenza
MIT License
>>>>>>> aa5d01de4a938833d2568394214400a6d6cfd751
