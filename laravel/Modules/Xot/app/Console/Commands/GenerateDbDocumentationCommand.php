<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD

=======
<<<<<<< HEAD
use Safe\Exceptions\JsonException;
use function Safe\json_decode;
use function Safe\json_encode;

/**
 * Class GenerateDbDocumentationCommand.
 */
=======

>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
class GenerateDbDocumentationCommand extends Command
{
    /**
     * Il nome e la firma del comando console.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $signature = 'xot:generate-db-documentation {schema_file : Percorso del file schema JSON} {output_dir? : Directory di output per i file markdown}';
=======
<<<<<<< HEAD
    protected $signature = 'db:docs:generate {--schema=database/schema.json} {--output=docs/database.md}';
=======
    protected $signature = 'xot:generate-db-documentation {schema_file : Percorso del file schema JSON} {output_dir? : Directory di output per i file markdown}';
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master

    /**
     * La descrizione del comando console.
     *
     * @var string
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    protected $description = 'Generate database documentation from schema file';

    /**
     * Execute the console command.
     *
     * @throws JsonException
     */
    public function handle(): void
    {
        $schemaPath = $this->option('schema');
        $outputPath = $this->option('output');

        if (! File::exists($schemaPath)) {
            $this->error("Schema file not found: {$schemaPath}");

            return;
        }

        $schema = json_decode(File::get($schemaPath), true);
        $documentation = $this->generateDocumentation($schema);

        File::put($outputPath, $documentation);
        $this->info("Documentation generated at: {$outputPath}");
    }

    /**
     * Generate documentation from schema.
     *
     * @param array<string, mixed> $schema
     */
    protected function generateDocumentation(array $schema): string
    {
        $doc = "# Database Documentation\n\n";
        $doc .= "Generated on: ".now()->format('Y-m-d H:i:s')."\n\n";

        foreach ($schema['tables'] as $tableName => $table) {
            $doc .= $this->generateTableDocumentation($tableName, $table);
        }

        if (isset($schema['relationships']) && ! empty($schema['relationships'])) {
            $doc .= "\n## Relationships\n\n";
            foreach ($schema['relationships'] as $relationship) {
                $doc .= $this->generateRelationshipDocumentation($relationship);
            }
        }

        return $doc;
    }

    /**
     * Generate documentation for a table.
     *
     * @param array<string, mixed> $table
     */
    protected function generateTableDocumentation(string $tableName, array $table): string
    {
        $doc = "## Table: `{$tableName}`\n\n";

        if (isset($table['comment']) && ! empty($table['comment'])) {
            $doc .= "{$table['comment']}\n\n";
        }

        $doc .= "### Columns\n\n";
        $doc .= "| Column | Type | Nullable | Default | Comment |\n";
        $doc .= "|--------|------|----------|---------|----------|\n";

        foreach ($table['columns'] as $columnName => $column) {
            $doc .= sprintf(
                "| `%s` | %s | %s | %s | %s |\n",
                $columnName,
                $column['type'],
                $column['nullable'] ? 'Yes' : 'No',
                $column['default'] ?? 'NULL',
                $column['comment'] ?? ''
            );
        }

        if (isset($table['indices']) && ! empty($table['indices'])) {
            $doc .= "\n### Indices\n\n";
            $doc .= "| Name | Columns | Type | Unique |\n";
            $doc .= "|------|---------|------|--------|\n";

            foreach ($table['indices'] as $index) {
                $columns = implode(', ', array_column($index['columns'], 'name'));
                $doc .= sprintf(
                    "| `%s` | %s | %s | %s |\n",
                    $index['name'],
                    $columns,
                    $index['type'],
                    $index['unique'] ? 'Yes' : 'No'
                );
            }
        }

        if (isset($table['foreign_keys']) && ! empty($table['foreign_keys'])) {
            $doc .= "\n### Foreign Keys\n\n";
            $doc .= "| Column | References |\n";
            $doc .= "|--------|------------|\n";

            foreach ($table['foreign_keys'] as $fk) {
                $doc .= sprintf(
                    "| `%s` | `%s`.`%s` |\n",
                    $fk['column'],
                    $fk['references_table'],
                    $fk['references_column']
                );
            }
        }

        return $doc."\n";
    }

    /**
     * Generate documentation for a relationship.
     *
     * @param array<string, string> $relationship
     */
    protected function generateRelationshipDocumentation(array $relationship): string
    {
        return sprintf(
            "- `%s`.`%s` %s `%s`.`%s` (Constraint: `%s`)\n",
            $relationship['local_table'],
            $relationship['local_column'],
            $this->getRelationshipArrow($relationship['type']),
            $relationship['foreign_table'],
            $relationship['foreign_column'],
            $relationship['constraint_name']
        );
    }

    /**
     * Get arrow representation for relationship type.
     */
    protected function getRelationshipArrow(string $type): string
    {
        return match ($type) {
            'belongsTo' => '→',
            'hasMany' => '←',
            'hasOne' => '⟶',
            default => '↔',
        };
=======
>>>>>>> origin/master
    protected $description = 'Genera documentazione in formato Markdown per lo schema del database';

    /**
     * Esegui il comando console.
     */
    public function handle(): int
    {
        $schemaFilePath = $this->argument('schema_file');
        $outputDir = $this->argument('output_dir') ?? base_path('docs/database');

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

        // Crea directory se non esiste
        if (! File::exists($outputDir)) {
            File::makeDirectory($outputDir, 0755, true);
        }

        // Genera il file README.md principale con l'indice
        $this->generateMainReadme($schema, $outputDir);

        // Genera file per ogni tabella
        $progressBar = $this->output->createProgressBar(count($schema['tables']));
        $progressBar->start();

        foreach ($schema['tables'] as $tableName => $tableInfo) {
            $this->generateTableDoc($tableName, $tableInfo, $schema['relationships'], $outputDir);
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine();

        $this->info("Documentazione generata con successo in: {$outputDir}");

        return 0;
    }

    /**
     * Genera il file README.md principale con l'indice.
     */
    protected function generateMainReadme(array $schema, string $outputDir): void
    {
        $database = $schema['database'];
        $tableCount = count($schema['tables']);

        $content = <<<MARKDOWN
# Documentazione Database: {$database}

## Panoramica
Questo documento fornisce una documentazione completa per il database **{$database}**.

- **Database**: {$database}
- **Connessione**: {$schema['connection']}
- **Tabelle**: {$tableCount}

## Indice delle Tabelle

| Nome Tabella | Descrizione | Numero Record |
|--------------|-------------|---------------|

MARKDOWN;

        foreach ($schema['tables'] as $tableName => $tableInfo) {
            $recordCount = $tableInfo['record_count'];
            $fileName = $tableName.'.md';
            $content .= "| [{$tableName}]({$fileName}) | | {$recordCount} |\n";
        }

        $content .= "\n\n## Diagramma ER\n\n";
        $content .= "```mermaid\nerDiagram\n";

        // Aggiungi gli ER per le relazioni
        $processedRelationships = [];
        foreach ($schema['relationships'] as $relationship) {
            if ('belongs_to' === $relationship['type']) {
                $from = $relationship['from_table'];
                $to = $relationship['to_table'];
                $key = "{$from}_{$to}";

                if (! in_array($key, $processedRelationships)) {
                    $content .= "    {$from} ||--o{ {$to} : \"\"\n";
                    $processedRelationships[] = $key;
                }
            }
        }

        $content .= "```\n";

        File::put($outputDir.'/README.md', $content);
    }

    /**
     * Genera documentazione per una singola tabella.
     */
    protected function generateTableDoc(string $tableName, array $tableInfo, array $relationships, string $outputDir): void
    {
        $columns = $tableInfo['columns'];
        $primaryKey = $tableInfo['primary_key'];
        $indexes = $tableInfo['indexes'];
        $foreignKeys = $tableInfo['foreign_keys'];
        $recordCount = $tableInfo['record_count'];

        $primaryKeyColumns = $primaryKey ? implode(', ', $primaryKey['columns']) : 'Nessuna';

        $content = <<<MARKDOWN
# Tabella: {$tableName}

## Descrizione
Tabella `{$tableName}` nel database.

- **Numero di record**: {$recordCount}
- **Chiave primaria**: {$primaryKeyColumns}

## Struttura

| Colonna | Tipo | Nullable | Default | Extra | Commento |
|---------|------|----------|---------|-------|----------|

MARKDOWN;

        foreach ($columns as $columnName => $column) {
            $type = $column['type'];
            $nullable = $column['nullable'] ? 'Sì' : 'No';
            $default = $column['default'] ?? 'NULL';
            $extra = $column['extra'] ?? '';
            $comment = $column['comment'] ?? '';

            $content .= "| {$columnName} | {$type} | {$nullable} | {$default} | {$extra} | {$comment} |\n";
        }

        if (! empty($indexes) && count($indexes) > 0) {
            $content .= "\n## Indici\n\n";
            $content .= "| Nome | Colonne | Unico |\n";
            $content .= "|------|---------|-------|\n";

            foreach ($indexes as $indexName => $index) {
                if ('PRIMARY' === $indexName) {
                    continue;
                }

                $columns = implode(', ', $index['columns']);
                $unique = $index['unique'] ? 'Sì' : 'No';

                $content .= "| {$indexName} | {$columns} | {$unique} |\n";
            }
        }

        if (! empty($foreignKeys) && count($foreignKeys) > 0) {
            $content .= "\n## Chiavi Esterne\n\n";
            $content .= "| Nome | Colonne | Tabella Riferimento | Colonne Riferimento |\n";
            $content .= "|------|---------|---------------------|--------------------|\n";

            foreach ($foreignKeys as $foreignKeyName => $foreignKey) {
                // Verifica che gli array necessari esistano e usa array vuoti se non esistono
                $localColumns = $foreignKey['local_columns'] ?? $foreignKey['columns'] ?? [];
                $refTable = $foreignKey['foreign_table'] ?? $foreignKey['references_table'] ?? 'unknown_table';
                $refColumns = $foreignKey['foreign_columns'] ?? $foreignKey['references_columns'] ?? [];

                $columns = implode(', ', $localColumns);
                $refColumnsStr = implode(', ', $refColumns);

                $content .= "| {$foreignKeyName} | {$columns} | {$refTable} | {$refColumnsStr} |\n";
            }
        }

        // Relazioni
        $tableRelationships = $this->getTableRelationships($tableName, $relationships);

        if (! empty($tableRelationships)) {
            $content .= "\n## Relazioni\n\n";

            if (! empty($tableRelationships['belongs_to'])) {
                $content .= "### Belongs To\n\n";
                $content .= "| Tabella | Chiave Esterna | Chiave Riferimento |\n";
                $content .= "|---------|---------------|-------------------|\n";

                foreach ($tableRelationships['belongs_to'] as $relation) {
                    $targetTable = $relation['to_table'];
                    $foreignKey = implode(', ', $relation['from_columns']);
                    $targetKey = implode(', ', $relation['to_columns']);

                    $content .= "| [{$targetTable}]({$targetTable}.md) | {$foreignKey} | {$targetKey} |\n";
                }
            }

            if (! empty($tableRelationships['has_many'])) {
                $content .= "\n### Has Many\n\n";
                $content .= "| Tabella | Chiave Esterna | Chiave Locale |\n";
                $content .= "|---------|---------------|-------------|\n";

                foreach ($tableRelationships['has_many'] as $relation) {
                    $targetTable = $relation['to_table'];
                    $foreignKey = implode(', ', $relation['to_columns']);
                    $localKey = implode(', ', $relation['from_columns']);

                    $content .= "| [{$targetTable}]({$targetTable}.md) | {$foreignKey} | {$localKey} |\n";
                }
            }
        }

        // Dati di esempio
        if (! empty($tableInfo['sample_data'])) {
            $content .= "\n## Dati di Esempio\n\n";
            $content .= "```json\n";
            $content .= json_encode($tableInfo['sample_data'], JSON_PRETTY_PRINT);
            $content .= "\n```\n";
        }

        File::put($outputDir.'/'.$tableName.'.md', $content);
    }

    /**
     * Ottiene le relazioni per una tabella specifica.
     */
    protected function getTableRelationships(string $tableName, array $relationships): array
    {
        $tableRelationships = [
            'belongs_to' => [],
            'has_many' => [],
        ];

        foreach ($relationships as $relationship) {
            // Verifica che tutti i campi necessari esistano
            if (! isset($relationship['from_table']) || ! isset($relationship['to_table'])
                || ! isset($relationship['type'])
                || ! isset($relationship['from_columns']) || ! isset($relationship['to_columns'])
                || empty($relationship['from_columns']) || empty($relationship['to_columns'])) {
                continue;
            }

            if ($relationship['from_table'] === $tableName && 'belongs_to' === $relationship['type']) {
                $tableRelationships['belongs_to'][] = $relationship;
            } elseif ($relationship['from_table'] === $tableName && 'has_many' === $relationship['type']) {
                $tableRelationships['has_many'][] = $relationship;
            }
        }

        return $tableRelationships;
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    }
}
