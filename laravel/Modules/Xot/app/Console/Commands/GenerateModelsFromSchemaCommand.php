<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
use Safe\Exceptions\DatetimeException;
use Safe\Exceptions\JsonException;
use Safe\Exceptions\PcreException;
use function Safe\date;
use function Safe\json_decode;
use function Safe\preg_match;
use function Safe\preg_replace;

/**
 * Class GenerateModelsFromSchemaCommand.
 */
=======

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
class GenerateModelsFromSchemaCommand extends Command
{
    /**
     * Il nome e la firma del comando console.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $signature = 'db:models:generate {--schema=database/schema.json} {--output=app/Models} {--namespace=App\\Models}';
=======
    protected $signature = 'xot:generate-models-from-schema 
                            {schema_file : Percorso del file schema JSON} 
                            {namespace : Namespace dei modelli (es. Modules\\Brain\\Models)} 
                            {model_path : Percorso dove salvare i modelli} 
                            {migration_path? : Percorso dove salvare le migrazioni}';
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

    /**
     * La descrizione del comando console.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $description = 'Generate Eloquent models from database schema';
=======
    protected $description = 'Genera modelli Laravel dalle informazioni dello schema del database';
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

    /**
     * Tipi di dati SQL e loro corrispondenze in PHP/Laravel.
     *
     * @var array<string, string>
     */
    protected $typeMappings = [
        'int' => 'integer',
        'tinyint' => 'boolean',
        'smallint' => 'integer',
        'mediumint' => 'integer',
        'bigint' => 'integer',
        'float' => 'float',
        'double' => 'double',
        'decimal' => 'decimal',
        'char' => 'string',
        'varchar' => 'string',
        'tinytext' => 'string',
        'text' => 'string',
        'mediumtext' => 'string',
        'longtext' => 'string',
        'json' => 'json',
        'binary' => 'binary',
        'varbinary' => 'binary',
        'blob' => 'binary',
        'tinyblob' => 'binary',
        'mediumblob' => 'binary',
        'longblob' => 'binary',
        'date' => 'date',
        'datetime' => 'datetime',
        'timestamp' => 'timestamp',
        'time' => 'time',
        'year' => 'integer',
        'enum' => 'string',
        'set' => 'string',
        'bit' => 'boolean',
    ];

    /**
     * Esegui il comando console.
<<<<<<< HEAD
     *
     * @throws JsonException
     * @throws PcreException
     * @throws DatetimeException
     */
    public function handle(): void
    {
        $schemaPath = $this->option('schema');
        $outputPath = $this->option('output');
        $namespace = $this->option('namespace');

        if (! File::exists($schemaPath)) {
            $this->error("Schema file not found: {$schemaPath}");

            return;
        }

        $schema = json_decode(File::get($schemaPath), true);

        if (! File::exists($outputPath)) {
            File::makeDirectory($outputPath, 0755, true);
        }

        foreach ($schema['tables'] as $tableName => $table) {
            $this->generateModel($tableName, $table, $outputPath, $namespace);
        }

        $this->info('Models generated successfully!');
    }

    /**
     * Generate a model class from table schema.
     *
     * @param array<string, mixed> $table
     * @throws PcreException
     * @throws DatetimeException
     */
    protected function generateModel(string $tableName, array $table, string $outputPath, string $namespace): void
    {
        $modelName = $this->getModelName($tableName);
        $fillable = $this->getFillableFields($table['columns']);
        $casts = $this->getCasts($table['columns']);
        $relations = $this->getRelations($table['foreign_keys'] ?? []);

        $template = $this->getModelTemplate(
            $modelName,
            $namespace,
            $tableName,
            $fillable,
            $casts,
            $relations
        );

        $filePath = $outputPath.'/'.$modelName.'.php';
        File::put($filePath, $template);

        $this->info("Generated model: {$modelName}");
    }

    /**
     * Get the model class name from table name.
     */
    protected function getModelName(string $tableName): string
    {
        return Str::studly(Str::singular($tableName));
    }

    /**
     * Get fillable fields from columns.
     *
     * @param array<string, array<string, mixed>> $columns
     * @return array<int, string>
     */
    protected function getFillableFields(array $columns): array
    {
        $fillable = [];
        foreach ($columns as $name => $column) {
            if (! in_array($name, ['id', 'created_at', 'updated_at', 'deleted_at'], true)) {
                $fillable[] = $name;
            }
        }

        return $fillable;
    }

    /**
     * Get casts from columns.
     *
     * @param array<string, array<string, mixed>> $columns
     * @return array<string, string>
     */
    protected function getCasts(array $columns): array
    {
        $casts = [];
        foreach ($columns as $name => $column) {
            $type = $column['type'];
            $cast = match ($type) {
                'integer', 'bigint', 'smallint' => 'integer',
                'decimal', 'float' => 'float',
                'boolean' => 'boolean',
                'date' => 'date',
                'datetime', 'timestamp' => 'datetime',
                'json' => 'array',
                default => null,
            };

            if (null !== $cast) {
                $casts[$name] = $cast;
            }
        }

        return $casts;
    }

    /**
     * Get relations from foreign keys.
     *
     * @param array<string, array<string, mixed>> $foreignKeys
     * @return array<string, array{type: string, model: string, key: string, foreignKey: string}>
     */
    protected function getRelations(array $foreignKeys): array
    {
        $relations = [];
        foreach ($foreignKeys as $name => $fk) {
            $relatedTable = $fk['references_table'];
            $relatedModel = $this->getModelName($relatedTable);
            $methodName = Str::camel($relatedTable);

            if (preg_match('/^(.+)_id$/', $fk['column'], $matches)) {
                $methodName = Str::camel($matches[1]);
            }

            $relations[$methodName] = [
                'type' => 'belongsTo',
                'model' => $relatedModel,
                'key' => $fk['column'],
                'foreignKey' => $fk['references_column'],
            ];
        }

        return $relations;
    }

    /**
     * Get the model class template.
     *
     * @param array<int, string> $fillable
     * @param array<string, string> $casts
     * @param array<string, array{type: string, model: string, key: string, foreignKey: string}> $relations
     * @throws DatetimeException
     */
    protected function getModelTemplate(
        string $modelName,
        string $namespace,
        string $tableName,
        array $fillable,
        array $casts,
        array $relations
    ): string {
        $fillableStr = preg_replace(
            '/^/m',
            '        ',
            var_export($fillable, true)
        );

        $castsStr = preg_replace(
            '/^/m',
            '        ',
            var_export($casts, true)
        );

        $relationsStr = '';
        foreach ($relations as $methodName => $relation) {
            $relationsStr .= $this->getRelationMethod($methodName, $relation);
        }
=======
     */
    public function handle(): int
    {
        $schemaFilePath = $this->argument('schema_file');
        $namespace = $this->argument('namespace');
        $modelPath = $this->argument('model_path');
        $migrationPath = $this->argument('migration_path');

        if (! File::exists($schemaFilePath)) {
            $this->error("Il file schema {$schemaFilePath} non esiste!");

            return 1;
        }

        $schemaContent = File::get($schemaFilePath);
        $schema = json_decode($schemaContent, true);

        if (JSON_ERROR_NONE !== json_last_error()) {
            $this->error('Errore nella decodifica del file JSON: '.json_last_error_msg());

            return 1;
        }

        $this->info("Schema caricato con successo dal file: {$schemaFilePath}");
        $this->info("Database: {$schema['database']}");
        $this->info('Numero di tabelle: '.count($schema['tables']));

        // Assicurati che la directory dei modelli esista
        if (! File::exists($modelPath)) {
            File::makeDirectory($modelPath, 0755, true);
            $this->info("Directory dei modelli creata: {$modelPath}");
        }

        // Assicurati che la directory delle migrazioni esista (se specificata)
        if ($migrationPath && ! File::exists($migrationPath)) {
            File::makeDirectory($migrationPath, 0755, true);
            $this->info("Directory delle migrazioni creata: {$migrationPath}");
        }

        $progressBar = $this->output->createProgressBar(count($schema['tables']));
        $progressBar->start();

        // Elabora ciascuna tabella e genera i modelli
        foreach ($schema['tables'] as $tableName => $tableInfo) {
            $this->generateModel($tableName, $tableInfo, $schema['relationships'], $namespace, $modelPath);

            if ($migrationPath) {
                $this->generateMigration($tableName, $tableInfo, $migrationPath);
            }

            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine();

        $this->info('Generazione dei modelli completata con successo!');

        if ($migrationPath) {
            $this->info('Generazione delle migrazioni completata con successo!');
        }

        return 0;
    }

    /**
     * Genera un modello Laravel per una tabella.
     */
    protected function generateModel(string $tableName, array $tableInfo, array $relationships, string $namespace, string $modelPath): void
    {
        $modelName = $this->getModelName($tableName);
        $primaryKey = $tableInfo['primary_key'] ? $tableInfo['primary_key']['columns'][0] : 'id';

        $fillableColumns = array_keys($tableInfo['columns']);
        $fillableColumns = array_filter($fillableColumns, function ($column) use ($primaryKey) {
            return $column !== $primaryKey && ! Str::endsWith($column, ['_at', 'created_at', 'updated_at', 'deleted_at']);
        });

        $casts = [];
        foreach ($tableInfo['columns'] as $columnName => $column) {
            $castType = $this->getCastType($column['type']);
            if ('string' !== $castType) {
                $casts[$columnName] = $castType;
            }
        }

        $modelRelationships = $this->getModelRelationships($tableName, $relationships, $tableInfo['foreign_keys']);

        $modelContent = $this->generateModelContent(
            $modelName,
            $namespace,
            $tableName,
            $primaryKey,
            $fillableColumns,
            $casts,
            $modelRelationships
        );

        $modelFilePath = $modelPath.'/'.$modelName.'.php';
        File::put($modelFilePath, $modelContent);
    }

    /**
     * Genera una migrazione Laravel per una tabella.
     */
    protected function generateMigration(string $tableName, array $tableInfo, string $migrationPath): void
    {
        $className = 'Create'.Str::studly($tableName).'Table';

        $migrationContent = $this->generateMigrationContent(
            $className,
            $tableName,
            $tableInfo['columns'],
            $tableInfo['indexes'],
            $tableInfo['primary_key'],
            $tableInfo['foreign_keys']
        );

        $timestamp = date('Y_m_d_His');
        $migrationFilePath = $migrationPath.'/'.$timestamp.'_create_'.$tableName.'_table.php';

        File::put($migrationFilePath, $migrationContent);
    }

    /**
     * Genera il contenuto del file del modello.
     */
    protected function generateModelContent(
        string $modelName,
        string $namespace,
        string $tableName,
        string $primaryKey,
        array $fillableColumns,
        array $casts,
        array $relationships,
    ): string {
        $fillableStr = "[\n        '".implode("',\n        '", $fillableColumns)."',\n    ]";

        $castsStr = empty($casts)
            ? '[]'
            : "[\n        '".implode("',\n        '", array_map(
                fn ($key, $value) => "{$key}' => '{$value}",
                array_keys($casts),
                array_values($casts)
            ))."',\n    ]";

        $relationshipsStr = implode("\n\n", array_map(
            fn ($rel) => $this->generateRelationshipMethod($rel),
            $relationships
        ));

        $relationshipImports = $this->getRelationshipImports($relationships);
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

        return <<<PHP
<?php

declare(strict_types=1);

namespace {$namespace};

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD

/**
 * Class {$modelName}
 * @package {$namespace}
 *
 * @property-read int \$id
 * @property \Carbon\Carbon \$created_at
 * @property \Carbon\Carbon \$updated_at
 * Generated on: {$this->getCurrentDate()}
 */
class {$modelName} extends Model
{
    protected \$table = '{$tableName}';

    protected \$fillable = {$fillableStr};

    protected \$casts = {$castsStr};
{$relationsStr}
}

=======
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
{$relationshipImports}

/**
 * {$modelName} Model
 *
 * @property-read int \${$primaryKey}
 */
class {$modelName} extends Model
{
    /**
     * Tabella associata al modello.
     *
     * @var string
     */
    protected \$table = '{$tableName}';

    /**
     * Connessione al database.
     *
     * @var string
     */
    protected \$connection = 'brain';

    /**
     * La chiave primaria della tabella.
     *
     * @var string
     */
    protected \$primaryKey = '{$primaryKey}';

    /**
     * Indica se il modello ha i timestamp standard di Laravel.
     *
     * @var bool
     */
    public \$timestamps = false;

    /**
     * Attributi che possono essere assegnati massivamente.
     *
     * @var array<int, string>
     */
    protected \$fillable = {$fillableStr};

    /**
     * Attributi da convertire in tipi nativi.
     *
     * @var array<string, string>
     */
    protected \$casts = {$castsStr};

    {$relationshipsStr}
}
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
PHP;
    }

    /**
<<<<<<< HEAD
     * Get the relation method template.
     *
     * @param array{type: string, model: string, key: string, foreignKey: string} $relation
     */
    protected function getRelationMethod(string $methodName, array $relation): string
    {
        return <<<PHP

    public function {$methodName}(): BelongsTo
    {
        return \$this->belongsTo({$relation['model']}::class, '{$relation['key']}', '{$relation['foreignKey']}');
    }
PHP;
    }

    /**
     * Get the current date formatted.
     *
     * @throws DatetimeException
     */
    protected function getCurrentDate(): string
    {
        return date('Y-m-d H:i:s');
=======
     * Genera il contenuto del file della migrazione.
     */
    protected function generateMigrationContent(
        string $className,
        string $tableName,
        array $columns,
        array $indexes,
        ?array $primaryKey,
        array $foreignKeys,
    ): string {
        $columnsStr = '';

        foreach ($columns as $columnName => $column) {
            $columnsStr .= $this->generateColumnCode($columnName, $column)."\n            ";
        }

        $indexesStr = '';

        foreach ($indexes as $indexName => $index) {
            if ('PRIMARY' === $indexName) {
                continue;
            }

            $indexesStr .= $this->generateIndexCode($indexName, $index)."\n            ";
        }

        $foreignKeysStr = '';

        foreach ($foreignKeys as $foreignKeyName => $foreignKey) {
            $foreignKeysStr .= $this->generateForeignKeyCode($foreignKeyName, $foreignKey)."\n            ";
        }

        return <<<PHP
<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migrazione per la tabella {$tableName}.
 * 
 * Nota: Questa migrazione è a scopo documentativo e può richiedere modifiche
 * prima di essere eseguita su un database reale.
 */
return new class extends Migration
{
    /**
     * Esegui le migrazioni.
     */
    public function up(): void
    {
        Schema::connection('brain')->create('{$tableName}', function (Blueprint \$table) {
            {$columnsStr}
            {$indexesStr}
            {$foreignKeysStr}
        });
    }

    /**
     * Esegui il rollback delle migrazioni.
     */
    public function down(): void
    {
        Schema::connection('brain')->dropIfExists('{$tableName}');
    }
};
PHP;
    }

    /**
     * Ottieni il tipo di casting Laravel appropriato dal tipo di colonna SQL.
     */
    protected function getCastType(string $sqlType): string
    {
        $baseType = strtolower(preg_replace('/\(.*\)/', '', $sqlType));

        foreach ($this->typeMappings as $sqlPattern => $laravelType) {
            if (0 === strpos($baseType, $sqlPattern)) {
                return $laravelType;
            }
        }

        return 'string';
    }

    /**
     * Genera il codice per una colonna nella migrazione.
     */
    protected function generateColumnCode(string $columnName, array $column): string
    {
        $columnType = strtolower($column['type']);
        $baseType = preg_replace('/\(.*\)/', '', $columnType);
        $length = null;

        if (preg_match('/\((\d+)\)/', $columnType, $matches)) {
            $length = (int) $matches[1];
        }

        $methodName = match ($baseType) {
            'varchar', 'char' => 'string',
            'int', 'integer', 'smallint', 'tinyint', 'mediumint' => 'integer',
            'bigint' => 'bigInteger',
            'decimal', 'numeric' => 'decimal',
            'float' => 'float',
            'double' => 'double',
            'date' => 'date',
            'datetime', 'timestamp' => 'dateTime',
            'time' => 'time',
            'text', 'tinytext' => 'text',
            'mediumtext' => 'mediumText',
            'longtext' => 'longText',
            'json' => 'json',
            'enum' => 'enum',
            'boolean', 'bool' => 'boolean',
            default => 'string',
        };

        $code = "\$table->{$methodName}('{$columnName}'";

        if ('string' === $methodName && null !== $length) {
            $code .= ", {$length}";
        } elseif ('decimal' === $methodName) {
            if (preg_match('/\((\d+),\s*(\d+)\)/', $columnType, $matches)) {
                $precision = (int) $matches[1];
                $scale = (int) $matches[2];
                $code .= ", {$precision}, {$scale}";
            }
        } elseif ('enum' === $methodName) {
            if (preg_match('/enum\(\'(.*)\'\)/', $columnType, $matches)) {
                $options = explode("','", $matches[1]);
                $optionsStr = implode("', '", $options);
                $code .= ", ['{$optionsStr}']";
            }
        }

        $code .= ')';

        if ($column['nullable']) {
            $code .= '->nullable()';
        }

        if (isset($column['default']) && null !== $column['default']) {
            $default = $column['default'];
            if (is_string($default) && ! is_numeric($default)) {
                $default = "'{$default}'";
            }
            $code .= "->default({$default})";
        }

        if (! empty($column['extra']) && false !== strpos($column['extra'], 'auto_increment')) {
            $code .= '->autoIncrement()';
        }

        if (! empty($column['comment'])) {
            $code .= "->comment('{$column['comment']}')";
        }

        $code .= ';';

        return $code;
    }

    /**
     * Genera il codice per un indice nella migrazione.
     */
    protected function generateIndexCode(string $indexName, array $index): string
    {
        $columns = "['".implode("', '", $index['columns'])."']";

        if ($index['unique']) {
            return "\$table->unique({$columns}, '{$indexName}');";
        }

        return "\$table->index({$columns}, '{$indexName}');";
    }

    /**
     * Genera il codice per una chiave esterna nella migrazione.
     */
    protected function generateForeignKeyCode(string $foreignKeyName, array $foreignKey): string
    {
        // Verifica che gli array necessari esistano, altrimenti usa array vuoti
        $localColumns = $foreignKey['local_columns'] ?? $foreignKey['columns'] ?? [];
        $foreignColumns = $foreignKey['foreign_columns'] ?? $foreignKey['references_columns'] ?? [];
        $foreignTable = $foreignKey['foreign_table'] ?? $foreignKey['references_table'] ?? 'unknown_table';

        $columns = "'".implode("', '", $localColumns)."'";
        $referencesColumns = "'".implode("', '", $foreignColumns)."'";

        return "\$table->foreign('{$columns}', '{$foreignKeyName}')
                ->references({$referencesColumns})
                ->on('{$foreignTable}')
                ->onDelete('cascade')
                ->onUpdate('cascade');";
    }

    /**
     * Estrae le relazioni per un modello specifico.
     */
    protected function getModelRelationships(string $tableName, array $relationships, array $foreignKeys): array
    {
        $modelRelationships = [];

        foreach ($relationships as $relationship) {
            // Verifica che gli array necessari esistano
            if (! isset($relationship['from_columns']) || ! isset($relationship['to_columns'])
                || empty($relationship['from_columns']) || empty($relationship['to_columns'])) {
                continue;
            }

            if ($relationship['from_table'] === $tableName && 'belongs_to' === $relationship['type']) {
                $modelRelationships[] = [
                    'type' => 'belongs_to',
                    'method' => Str::camel(Str::singular($relationship['to_table'])),
                    'model' => Str::studly(Str::singular($relationship['to_table'])),
                    'foreign_key' => $relationship['from_columns'][0],
                    'owner_key' => $relationship['to_columns'][0],
                ];
            } elseif ($relationship['to_table'] === $tableName && 'has_many' === $relationship['type']) {
                $modelRelationships[] = [
                    'type' => 'has_many',
                    'method' => Str::camel(Str::plural($relationship['from_table'])),
                    'model' => Str::studly(Str::singular($relationship['from_table'])),
                    'foreign_key' => $relationship['to_columns'][0],
                    'local_key' => $relationship['from_columns'][0],
                ];
            }
        }

        return $modelRelationships;
    }

    /**
     * Genera il metodo di relazione per il modello.
     */
    protected function generateRelationshipMethod(array $relationship): string
    {
        $methodName = $relationship['method'];
        $modelName = $relationship['model'];

        if ('belongs_to' === $relationship['type']) {
            return <<<PHP
    /**
     * Relazione: {$methodName}.
     */
    public function {$methodName}(): BelongsTo
    {
        return \$this->belongsTo({$modelName}::class, '{$relationship['foreign_key']}', '{$relationship['owner_key']}');
    }
PHP;
        } elseif ('has_many' === $relationship['type']) {
            return <<<PHP
    /**
     * Relazione: {$methodName}.
     */
    public function {$methodName}(): HasMany
    {
        return \$this->hasMany({$modelName}::class, '{$relationship['foreign_key']}', '{$relationship['local_key']}');
    }
PHP;
        }

        return '';
    }

    /**
     * Ottiene le importazioni necessarie per le relazioni.
     */
    protected function getRelationshipImports(array $relationships): string
    {
        $imports = [];

        foreach ($relationships as $relationship) {
            $modelName = $relationship['model'];
            $imports[] = "use App\\Models\\{$modelName};";
        }

        return empty($imports) ? '' : implode("\n", array_unique($imports));
    }

    /**
     * Ottiene il nome del modello dalla tabella.
     */
    protected function getModelName(string $tableName): string
    {
        return Str::studly(Str::singular($tableName));
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
