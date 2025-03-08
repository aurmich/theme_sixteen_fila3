---
title: Aggiornamenti
description: Aggiornamenti
extends: _layouts.documentation
section: content
---

# Aggiornamenti {#aggiornamenti}

Cms onsiste in un pacchetto PHP.

Quindi per aggiornare basta dare il comando in console:

<<<<<<< HEAD
composer update laraxot/module_cms
=======
composer update laraxot/module_lang
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)

Assicurarsi di cancellare la cache delle viste di Laravel dopo l'aggiornamento:

```console
php artisan view:clear
```

Infine, se si sono pubblicati il file di configurazione o i modelli Blade, assicurarsi che le personalizzazioni siano aggiornate con i valori predefiniti.

### Verifica dei pacchetti installati

È possibile utilizzare il comando Artisan incorporato per visualizzare le versioni installate dei pacchetti:

```console
<<<<<<< HEAD
php artisan module_cms:show-versions
=======
php artisan module_lang:show-versions
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
```