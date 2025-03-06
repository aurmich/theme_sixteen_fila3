# Correzioni PHPStan

## Trait HasXotTable

### Problemi Risolti
1. Accesso a metodi non definiti
   - Aggiunto controllo `method_exists()` prima di chiamare metodi opzionali
   - Implementati metodi di fallback per funzionalità essenziali

2. Accesso statico a proprietà di istanza
   - Rimossi accessi statici non sicuri
   - Implementata gestione corretta delle proprietà di istanza

3. Gestione Errori
   - Migliorata la gestione delle eccezioni
   - Aggiunti messaggi di errore più descrittivi
   - Implementato logging appropriato

### Best Practices
1. Verifica Metodi
```php
if (method_exists($this, 'shouldShowViewAction') && $this->shouldShowViewAction()) {
    // Implementazione sicura
}
```

2. Gestione Modelli
```php
public function getModelClass(): string
{
    if (property_exists($this, 'model')) {
        return $this->model;
    }

    if (method_exists($this, 'getRelationship')) {
        $relationship = $this->getRelationship();
        if ($relationship instanceof \Illuminate\Database\Eloquent\Relations\Relation) {
            return get_class($relationship->getModel());
        }
    }

    throw new \Exception('No model found');
}
```

3. Gestione Errori
```php
try {
    $modelClass = $this->getModelClass();
    $model = app($modelClass);
    Assert::isInstanceOf($model, \Illuminate\Database\Eloquent\Model::class);
} catch (\Exception $e) {
    Notification::make()
        ->title('Error')
        ->body('Unable to determine table name: '.$e->getMessage())
        ->persistent()
        ->danger()
        ->send();
}
```

## Resource Classes

### Regole per XotBaseResource
1. Non implementare `form()` come `protected static`
   - Il metodo è già gestito dalla classe base
   - Usare `getFormSchema()` per definire i campi del form

2. Non definire `protected static ?string $navigationIcon`
   - Le icone sono gestite tramite file di traduzione
   - Usare il sistema di traduzione per personalizzare le icone

3. Implementazione corretta di `getFormSchema()`
```php
public static function getFormSchema(): array
{
    return [
        'field_name' => [
            'label' => 'Label',
            'tooltip' => 'Tooltip',
            'placeholder' => 'Placeholder',
            'icon' => 'heroicon-o-user',
            'color' => 'primary',
        ],
    ];
}
```

### Traduzioni
1. Formato Corretto
```php
'field_name' => [
    'label' => 'Label Text',
    'tooltip' => 'Tooltip Text',
    'placeholder' => 'Placeholder Text',
],
```

2. Icone di Navigazione
```php
'navigation' => [
    'icon' => 'heroicon-o-user',
    'color' => 'primary',
],
```

## Funzioni Safe

### Funzioni da Usare
1. File System
   - `Safe\file_get_contents` invece di `file_get_contents`
   - `Safe\file_put_contents` invece di `file_put_contents`
   - `Safe\unlink` invece di `unlink`

2. JSON
   - `Safe\json_decode` invece di `json_decode`
   - `Safe\json_encode` invece di `json_encode`

3. Regex
   - `Safe\preg_match` invece di `preg_match`
   - `Safe\preg_replace` invece di `preg_replace`

### Gestione Eccezioni
```php
try {
    $content = Safe\file_get_contents($file);
} catch (\Safe\Exceptions\FilesystemException $e) {
    throw new \RuntimeException("Errore lettura file: {$e->getMessage()}");
}
```

## Correzioni Effettuate

### 1. ImportCsvAction
- Corretto costruttore `ColumnData`
- Aggiunto tipo di default per le colonne
- Migliorata gestione errori

### 2. SendMailByRecordAction
- Rimossa istanziazione con parametri
- Utilizzato container Laravel per l'istanziazione
- Migliorata gestione delle dipendenze

### 3. HasXotTable
- Aggiunto controllo metodi
- Migliorata gestione errori
- Implementata gestione sicura delle proprietà
- Aggiunta documentazione completa

## Note Importanti

1. **Sicurezza**
   - Usare sempre funzioni Safe
   - Validare input utente
   - Gestire correttamente le eccezioni

2. **Performance**
   - Evitare accessi statici non necessari
   - Utilizzare il container per le dipendenze
   - Implementare caching dove appropriato

3. **Manutenibilità**
   - Documentare il codice
   - Seguire le convenzioni di naming
   - Mantenere la coerenza del codice

## Prossimi Passi

1. Verificare altre classi per problemi simili
2. Implementare test automatici
3. Aggiornare la documentazione API
4. Monitorare le performance
5. Pianificare refactoring incrementali 