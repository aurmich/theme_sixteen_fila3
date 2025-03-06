<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema as SchemaFacade;
use Illuminate\Support\Str;
use Safe\Exceptions\FilesystemException;
use Safe\Exceptions\JsonException;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\json_decode;
use function Safe\json_encode;

/**
 * Class DatabaseSchemaExportCommand.
 */
class DatabaseSchemaExportCommand extends Command
{
    protected $signature = 'db:schema:export {table?} {--module=}';

    protected $description = 'Export database schema into JSON files';

    /**
     * Execute the console command.
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
     * Export a table schema to JSON.
     *
     * @throws FilesystemException
     * @throws JsonException
     */
    protected function exportTable(string $table, ?string $module = null): void
    {
        $schema = SchemaFacade::getConnection()->getDoctrineSchemaManager();
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

        $this->info("Schema exported for table [{$table}]");
    }

    /**
     * Format columns for JSON export.
     *
     * @param array<string, mixed> $columns
     * @return array<string, array<string, mixed>>
     */
    protected function formatColumns(array $columns): array
    {
        $formatted = [];
        foreach ($columns as $column) {
            $formatted[$column->getName()] = [
                'type' => $column->getType()->getName(),
                'length' => $column->getLength(),
                'nullable' => ! $column->getNotnull(),
                'default' => $column->getDefault(),
            ];
        }

        return $formatted;
    }

    /**
     * Format indexes for JSON export.
     *
     * @param array<string, mixed> $indexes
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
            ];
        }

        return $formatted;
    }

    /**
     * Format foreign keys for JSON export.
     *
     * @param array<string, mixed> $foreignKeys
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
                'onDelete' => $foreignKey->getOptions()['onDelete'] ?? null,
                'onUpdate' => $foreignKey->getOptions()['onUpdate'] ?? null,
            ];
        }

        return $formatted;
    }

    /**
     * Get the export path for a table schema.
     */
    protected function getExportPath(string $table, ?string $module = null): string
    {
        $filename = Str::snake($table).'.json';
        $basePath = base_path('database/schema');

        if (null !== $module) {
            $basePath = base_path("Modules/{$module}/database/schema");
        }

        if (! is_dir($basePath)) {
            mkdir($basePath, 0755, true);
        }

        return $basePath.'/'.$filename;
    }
}
