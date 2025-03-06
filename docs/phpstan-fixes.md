# Correzioni PHPStan Livello 1

## Errori Principali e Soluzioni

### 1. Classi Resource non Astratte con Metodi Astratti

Le seguenti classi devono implementare il metodo astratto `getFormSchema()`:
- `CacheLockResource`
- `ExtraResource`
- `SessionResource`

Soluzione: Implementare il metodo in ogni classe o renderle astratte.

### 2. Funzioni Unsafe

Sostituire le seguenti funzioni con le loro versioni sicure da `thecodingmachine/safe`:

```php
use function Safe\json_decode;
use function Safe\json_encode;
use function Safe\preg_match;
use function Safe\preg_replace;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\date;
use function Safe\error_log;
```

### 3. Accesso a Proprietà non Definite

Nel modello `DatabaseConnection`:
- Definire le proprietà mancanti nel modello o usare `$fillable`/`$guarded`
- Aggiungere PHPDoc per le proprietà

### 4. Problemi nei Test

In `ExampleTest.php`:
- Estendere la classe di test corretta
- Implementare i metodi mancanti
- Definire le proprietà necessarie

### 5. Problemi di Namespace e Classi non Trovate

- Correggere i namespace delle classi
- Importare le classi mancanti
- Verificare l'autoloading dei moduli

## Best Practices per le Correzioni

1. **Resource Classes**:
   - Implementare sempre `getFormSchema()`
   - Usare le traduzioni per le label
   - Seguire la struttura standard dei form

2. **Safe Functions**:
   - Usare sempre le funzioni del pacchetto `Safe`
   - Aggiungere i use statement all'inizio del file
   - Gestire correttamente le eccezioni

3. **Model Properties**:
   - Definire tutte le proprietà nel modello
   - Usare PHPDoc per documentare le proprietà
   - Implementare i metodi accessor/mutator necessari

4. **Testing**:
   - Estendere la classe di test appropriata
   - Implementare i setup necessari
   - Documentare i test cases

## Documentazione Correlata

- [Filament Resources](./filament-resources.md)
- [Database Models](./models.md)
- [Testing Guidelines](./testing.md) 