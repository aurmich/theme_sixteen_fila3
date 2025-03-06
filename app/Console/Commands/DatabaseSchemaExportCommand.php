<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use function Safe\json_encode;
use function Safe\preg_match_all;

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
    public function handle(): int
    {
        $connection = $this->argument('connection') ?: $this->ask('Inserisci il nome della connessione database');
        $outputPath = $this->option('output');

        // Assicurati che il percorso sia assoluto
        if (! Str::startsWith($outputPath, '/')) {
            $outputPath = base_path($outputPath);
        }

        $this->info("Estrazione schema dal database usando la connessione: {$connection}");

        $schema = [
            'database' => '',
            'connection' => $connection,
            'tables' => [],
            'relationships' => [],
            'generated_at' => now()->toIso8601String(),
        ];

        try {
            // Imposta la connessione database
            DB::setDefaultConnection($connection);
            $databaseName = DB::connection()->getDatabaseName();
            $schema['database'] = $databaseName;

            $this->info("Connesso al database: {$databaseName}");

            // Ottieni tutte le tabelle
            $tables = DB::select('SHOW TABLES');
            $tablesKey = 'Tables_in_'.$databaseName;

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
                preg_match_all(
                    '/CONSTRAINT\s+`([^`]+)`\s+FOREIGN\s+KEY\s+\(`([^`]+)`\)\s+REFERENCES\s+`([^`]+)`\s+\(`([^`]+)`\)/i',
                    $createTableSql,
                    $foreignKeys,
                    PREG_SET_ORDER
                );

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
            $jsonContent = json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            File::put($outputPath, $jsonContent);

            $this->info("Schema del database esportato con successo in: {$outputPath}");

            // Genera un report riassuntivo
            $this->generateReport($schema);

            return 0;
        } catch (\Safe\Exceptions\JsonException $e) {
            $this->error("Errore durante la codifica JSON: " . $e->getMessage());
            return 1;
        } catch (\Safe\Exceptions\PcreException $e) {
            $this->error("Errore durante l'analisi delle foreign keys: " . $e->getMessage());
            return 1;
        } catch (\Exception $e) {
            $this->error("Errore durante l'estrazione dello schema: " . $e->getMessage());
            return 1;
        }
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
     *
     * @param array{
     *     database: string,
     *     connection: string,
     *     tables: array<string, array{
     *         name: string,
     *         columns: array,
     *         indices: array,
     *         foreign_keys: array,
     *         primary_key: ?string,
     *         model_name: string,
     *         migration_name: string
     *     }>,
     *     relationships: array<array{
     *         type: string,
     *         local_table: string,
     *         local_column: string,
     *         foreign_table: string,
     *         foreign_column: string,
     *         constraint_name: string
     *     }>,
     *     generated_at: string
     * } $schema
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
            ->map(function (array $table, string $tableName) use ($schema) {
                $relationCount = collect($schema['relationships'])
                    ->filter(function (array $rel) use ($tableName) {
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
            ->take(5);

        foreach ($relevantTables as $table) {
            $this->info(sprintf(
                '- %s (Colonne: %d, Relazioni: %d, Modello: %s)',
                $table['name'],
                $table['columns'],
                $table['relations'],
                $table['model']
            ));
        }
    }

    protected function extractTableNames(string $sql): array
    {
        preg_match_all('/CREATE TABLE `([^`]+)`/', $sql, $matches);
        return $matches[1] ?? [];
    }

    protected function exportSchema(): array
    {
        // ... existing code ...
        return json_encode($schema, JSON_PRETTY_PRINT);
    }
}
