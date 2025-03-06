# Funzioni Safe nel Modulo Xot

## Panoramica

Il modulo Xot utilizza il pacchetto `thecodingmachine/safe` per garantire che le funzioni PHP potenzialmente pericolose lancino eccezioni invece di restituire `false` in caso di errore.

## Funzioni da Utilizzare

### Manipolazione JSON
```php
use function Safe\json_decode;
use function Safe\json_encode;
```

### Espressioni Regolari
```php
use function Safe\preg_match;
use function Safe\preg_match_all;
use function Safe\preg_replace;
```

### File System
```php
use function Safe\glob;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
```

### Date e Logging
```php
use function Safe\date;
use function Safe\error_log;
```

## Implementazione

### 1. Import delle Funzioni
All'inizio di ogni file che utilizza queste funzioni, importare le versioni Safe:

```php
declare(strict_types=1);

namespace Modules\Xot\Commands;

use function Safe\json_decode;
use function Safe\preg_match;
// altri import necessari
```

### 2. Gestione delle Eccezioni
Le funzioni Safe lanciano `\Safe\Exceptions\SafeException` in caso di errore:

```php
try {
    $data = json_decode($input, true);
} catch (\Safe\Exceptions\JsonException $e) {
    // Gestione dell'errore
}
```

## Files da Aggiornare

1. Console Commands:
   - `DatabaseSchemaExportCommand.php`
   - `DatabaseSchemaExporterCommand.php`
   - `GenerateDbDocumentationCommand.php`
   - `GenerateModelsFromSchemaCommand.php`
   - `GenerateResourceFormSchemaCommand.php`

2. Helpers:
   - `ResourceFormSchemaGenerator.php`

## Best Practices

1. **Sempre Usare Safe**:
   - Non utilizzare mai le funzioni PHP native per operazioni critiche
   - Importare sempre le funzioni Safe necessarie
   - Gestire le eccezioni in modo appropriato

2. **Gestione Errori**:
   - Catturare le eccezioni specifiche quando possibile
   - Fornire messaggi di errore chiari
   - Loggare gli errori in modo appropriato

3. **Documentazione**:
   - Commentare l'uso delle funzioni Safe
   - Specificare il tipo di eccezioni che possono essere lanciate
   - Mantenere aggiornata la documentazione

## Note sulla Migrazione

Quando si migrano le funzioni da PHP native a Safe:
1. Identificare tutte le occorrenze delle funzioni unsafe
2. Aggiungere gli import necessari
3. Aggiornare la gestione degli errori
4. Testare il nuovo comportamento
5. Aggiornare la documentazione 