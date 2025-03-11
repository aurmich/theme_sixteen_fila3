<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

<<<<<<< HEAD
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\ForeignKeyConstraint;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema as SchemaFacade;
use Illuminate\Support\Str;
use Safe\Exceptions\FilesystemException;
use Safe\Exceptions\JsonException;
use function Safe\file_put_contents;
use function Safe\json_encode;
use function Safe\mkdir;

/**
 * Class DatabaseSchemaExportCommand
 * 
 * Esporta lo schema del database in file JSON.
 */
class DatabaseSchemaExportCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'db:schema:export {table?} {--module=}';

    /**
     * @var string
     */
    protected $description = 'Esporta lo schema del database in file JSON';

    /**
     * Esegue il comando.
     *
     * @throws FilesystemException
     * @throws JsonException
     */
    public function handle(): void
    {
        $module = $this->option('module');
        $table = $this->argument('table');

        if (null !== $table) {
            $this->exportTable($table, $module);
            return;
        }

        $tables = SchemaFacade::getAllTables();
        foreach ($tables as $table) {
            $this->exportTable($table->name, $module);
        }
    }

    /**
     * Esporta lo schema di una tabella in JSON.
     *
     * @param string $table Nome della tabella
     * @param string|null $module Nome del modulo
     * @throws FilesystemException
     * @throws JsonException
     */
    protected function exportTable(string $table, ?string $module = null): void
    {
        $schema = SchemaFacade::getConnection()->getDoctrineSchemaManager();
        
        if (!$schema->tablesExist([$table])) {
            $this->error("La tabella [{$table}] non esiste");
            return;
        }

        $columns = $schema->listTableColumns($table);
        $indexes = $schema->listTableIndexes($table);
        $foreignKeys = $schema->listTableForeignKeys($table);

        $data = [
            'name' => $table,
            'columns' => $this->formatColumns($columns),
            'indexes' => $this->formatIndexes($indexes),
            'foreignKeys' => $this->formatForeignKeys($foreignKeys),
        ];

        $path = $this->getExportPath($table, $module);
        $json = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($path, $json);

        $this->info("Schema esportato per la tabella [{$table}]");
    }

    /**
     * Formatta le colonne per l'esportazione JSON.
     *
     * @param Column[] $columns
     * @return array<string, array<string, mixed>>
     */
    protected function formatColumns(array $columns): array
    {
        $formatted = [];
        foreach ($columns as $column) {
            $formatted[$column->getName()] = [
                'type' => $column->getType()->getTypeName(),
                'length' => $column->getLength(),
                'nullable' => !$column->getNotnull(),
                'default' => $column->getDefault(),
                'unsigned' => $column->getUnsigned(),
                'autoincrement' => $column->getAutoincrement(),
                'comment' => $column->getComment(),
            ];
        }

        return $formatted;
    }

    /**
     * Formatta gli indici per l'esportazione JSON.
     *
     * @param Index[] $indexes
     * @return array<string, array<string, mixed>>
     */
    protected function formatIndexes(array $indexes): array
    {
        $formatted = [];
        foreach ($indexes as $index) {
            $formatted[$index->getName()] = [
                'columns' => $index->getColumns(),
                'unique' => $index->isUnique(),
                'primary' => $index->isPrimary(),
                'flags' => $index->getFlags(),
                'options' => $index->getOptions(),
            ];
        }

        return $formatted;
    }

    /**
     * Formatta le chiavi esterne per l'esportazione JSON.
     *
     * @param ForeignKeyConstraint[] $foreignKeys
     * @return array<string, array<string, mixed>>
     */
    protected function formatForeignKeys(array $foreignKeys): array
    {
        $formatted = [];
        foreach ($foreignKeys as $foreignKey) {
            $formatted[$foreignKey->getName()] = [
                'localColumns' => $foreignKey->getLocalColumns(),
                'foreignTable' => $foreignKey->getForeignTableName(),
                'foreignColumns' => $foreignKey->getForeignColumns(),
                'onDelete' => $foreignKey->onDelete(),
                'onUpdate' => $foreignKey->onUpdate(),
                'options' => $foreignKey->getOptions(),
            ];
        }

        return $formatted;
    }

    /**
     * Ottiene il percorso di esportazione per lo schema di una tabella.
     *
     * @param string $table Nome della tabella
     * @param string|null $module Nome del modulo
     * @return string Percorso completo del file
     * @throws FilesystemException
     */
    protected function getExportPath(string $table, ?string $module = null): string
    {
        $filename = Str::snake($table) . '.json';
        $basePath = base_path('database/schema');

        if (null !== $module) {
            $basePath = base_path("Modules/{$module}/database/schema");
        }

        if (!is_dir($basePath)) {
            mkdir($basePath, 0755, true);
        }

        return $basePath . '/' . $filename;
=======
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSchemaExportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'xot:schema-export {connection? : Nome della connessione database} {--output=docs/db_schema.json : Percorso file di output}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esporta lo schema del database in un file JSON completo per facilitare la creazione di modelli e migrazioni';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $connection = $this->argument('connection') ?: $this->ask('Inserisci il nome della connessione database');
        $outputPath = $this->option('output');

        // Assicurati che il percorso sia assoluto
        if (! Str::startsWith($outputPath, '/')) {
            $outputPath = base_path($outputPath);
        }

        $this->info("Estrazione schema dal database usando la connessione: {$connection}");

        try {
            // Imposta la connessione database
            DB::setDefaultConnection($connection);
            $databaseName = DB::connection()->getDatabaseName();

            $this->info("Connesso al database: {$databaseName}");

            // Ottieni tutte le tabelle
            $tables = DB::select('SHOW TABLES');
            $tablesKey = 'Tables_in_'.$databaseName;

            $schema = [
                'database' => $databaseName,
                'connection' => $connection,
                'tables' => [],
                'relationships' => [],
                'generated_at' => now()->toIso8601String(),
            ];

            $bar = $this->output->createProgressBar(count($tables));
            $bar->start();

            foreach ($tables as $table) {
                $tableName = $table->$tablesKey;
                $this->info("\nAnalyzing table: {$tableName}");

                // Ottieni la struttura della tabella
                $columns = DB::select("SHOW FULL COLUMNS FROM `{$tableName}`");
                $indices = DB::select("SHOW INDEX FROM `{$tableName}`");

                // Ottieni la DDL della tabella per poi estrarre le FK constraints
                $createTable = DB::select("SHOW CREATE TABLE `{$tableName}`");
                $createTableSql = $createTable[0]->{'Create Table'};

                // Estrai foreign keys
                preg_match_all('/CONSTRAINT\s+`([^`]+)`\s+FOREIGN\s+KEY\s+\(`([^`]+)`\)\s+REFERENCES\s+`([^`]+)`\s+\(`([^`]+)`\)/i', $createTableSql, $foreignKeys, PREG_SET_ORDER);

                $tableSchema = [
                    'name' => $tableName,
                    'columns' => [],
                    'indices' => [],
                    'foreign_keys' => [],
                    'primary_key' => null,
                    'model_name' => $this->getModelName($tableName),
                    'migration_name' => $this->getMigrationName($tableName),
                ];

                // Processa colonne
                foreach ($columns as $column) {
                    $columnSchema = [
                        'name' => $column->Field,
                        'type' => $column->Type,
                        'null' => 'YES' === $column->Null,
                        'key' => $column->Key,
                        'default' => $column->Default,
                        'extra' => $column->Extra,
                        'comment' => $column->Comment,
                    ];

                    if ('PRI' === $column->Key) {
                        $tableSchema['primary_key'] = $column->Field;
                    }

                    $tableSchema['columns'][$column->Field] = $columnSchema;
                }

                // Processa indici
                $groupedIndices = [];
                foreach ($indices as $index) {
                    $indexName = $index->Key_name;

                    if (! isset($groupedIndices[$indexName])) {
                        $groupedIndices[$indexName] = [
                            'name' => $indexName,
                            'columns' => [],
                            'unique' => ! $index->Non_unique,
                            'type' => $index->Index_type,
                        ];
                    }

                    $groupedIndices[$indexName]['columns'][] = [
                        'name' => $index->Column_name,
                        'order' => $index->Seq_in_index,
                    ];
                }

                $tableSchema['indices'] = array_values($groupedIndices);

                // Processa foreign keys
                foreach ($foreignKeys as $fk) {
                    $tableSchema['foreign_keys'][] = [
                        'name' => $fk[1],
                        'column' => $fk[2],
                        'references_table' => $fk[3],
                        'references_column' => $fk[4],
                    ];

                    // Registra anche nella sezione delle relazioni
                    $schema['relationships'][] = [
                        'type' => 'belongsTo',
                        'local_table' => $tableName,
                        'local_column' => $fk[2],
                        'foreign_table' => $fk[3],
                        'foreign_column' => $fk[4],
                        'constraint_name' => $fk[1],
                    ];
                }

                $schema['tables'][$tableName] = $tableSchema;
                $bar->advance();
            }

            $bar->finish();
            $this->newLine(2);

            // Crea directory se non esiste
            $directory = dirname($outputPath);
            if (! File::exists($directory)) {
                File::makeDirectory($directory, 0755, true);
            }

            // Salva lo schema in un file JSON
            File::put($outputPath, json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

            $this->info("Schema del database esportato con successo in: {$outputPath}");

            // Genera un report riassuntivo
            $this->generateReport($schema);
        } catch (\Exception $e) {
            $this->error("Errore durante l'estrazione dello schema: ".$e->getMessage());

            return 1;
        }

        return 0;
    }

    /**
     * Genera un nome per il modello in base al nome della tabella.
     */
    protected function getModelName(string $tableName): string
    {
        // Rimuovi eventuali prefissi comuni
        $prefixes = ['tbl_', 'anagr_'];
        foreach ($prefixes as $prefix) {
            if (Str::startsWith($tableName, $prefix)) {
                $tableName = Str::substr($tableName, strlen($prefix));
                break;
            }
        }

        // Converti da snake_case a PascalCase
        return Str::studly(Str::singular($tableName));
    }

    /**
     * Genera un nome per la migrazione in base al nome della tabella.
     */
    protected function getMigrationName(string $tableName): string
    {
        return 'create_'.$tableName.'_table';
    }

    /**
     * Genera un report riassuntivo dello schema.
     */
    protected function generateReport(array $schema): void
    {
        $this->info('Riepilogo Schema Database');
        $this->info('=============================================');
        $this->info('Database: '.$schema['database']);
        $this->info('Numero tabelle: '.count($schema['tables']));
        $this->info('Numero relazioni: '.count($schema['relationships']));

        $this->newLine();
        $this->info('Tabelle principali:');

        // Mostra le tabelle più rilevanti (con più relazioni o colonne)
        $relevantTables = collect($schema['tables'])
            ->map(function ($table, $tableName) use ($schema) {
                $relationCount = collect($schema['relationships'])
                    ->filter(function ($rel) use ($tableName) {
                        return $rel['local_table'] === $tableName || $rel['foreign_table'] === $tableName;
                    })
                    ->count();

                return [
                    'name' => $tableName,
                    'columns' => count($table['columns']),
                    'relations' => $relationCount,
                    'model' => $table['model_name'],
                ];
            })
            ->sortByDesc('relations')
            ->take(10);

        $this->table(
            ['Tabella', 'Colonne', 'Relazioni', 'Modello Suggerito'],
            $relevantTables->values()->toArray()
        );

        $this->newLine();
        $this->info('File JSON generato correttamente. Puoi usarlo per creare modelli, migrazioni, factories e seeder.');
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
