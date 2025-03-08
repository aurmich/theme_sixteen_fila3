<?php

declare(strict_types=1);

namespace Modules\Xot\Console\Commands;

use Illuminate\Console\Command;
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Safe\Exceptions\FilesystemException;
use Safe\Exceptions\PcreException;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;

/**
 * Class GenerateResourceFormSchemaCommand.
 */
class GenerateResourceFormSchemaCommand extends Command
{
    protected $signature = 'resource:generate-form-schema {--module=} {--resource=}';

    protected $description = 'Generate form schema for Filament resources';

    /**
     * Execute the console command.
     *
     * @throws FilesystemException
     * @throws PcreException
     */
    public function handle(): void
    {
        $module = $this->option('module');
        $resource = $this->option('resource');

        $pattern = $module
            ? base_path("Modules/{$module}/app/Filament/Resources/*Resource.php")
            : base_path('app/Filament/Resources/*Resource.php');

        $resourceFiles = glob($pattern);

        foreach ($resourceFiles as $file) {
            if ($resource && ! str_contains($file, $resource)) {
                continue;
            }

            $content = file_get_contents($file);
            preg_match('/namespace\s+([\w\\\\]+);/', $content, $namespaceMatch);
            preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch);

            if (! isset($namespaceMatch[1]) || ! isset($classMatch[1])) {
                $this->warn("Skipping {$file}: Invalid file format");
                continue;
            }

            $className = $classMatch[1];
            $namespace = $namespaceMatch[1];
            $fullClassName = $namespace.'\\'.$className;

            if (! $this->needsFormSchema($content)) {
                $this->info("Skipping {$className}: Form schema already exists");
                continue;
            }

            $this->generateFormSchema($file, $content, $className);
            $this->info("Generated form schema for {$className}");
        }
    }

    /**
     * Check if the resource needs a form schema.
     */
    protected function needsFormSchema(string $content): bool
    {
        return ! str_contains($content, 'public static function getFormSchema()');
    }

    /**
     * Generate form schema for a resource.
     *
     * @throws FilesystemException
     * @throws PcreException
     */
    protected function generateFormSchema(string $file, string $content, string $className): void
    {
        $modelName = str_replace('Resource', '', $className);
        $schemaMethod = $this->getFormSchemaTemplate($modelName);

        $modifiedContent = preg_replace(
            '/}(\s*)$/',
            $schemaMethod.'}$1',
            $content
        );

        file_put_contents($file, $modifiedContent);
    }

    /**
     * Get the form schema template.
     */
    protected function getFormSchemaTemplate(string $modelName): string
    {
        $variableName = lcfirst($modelName);

        return <<<PHP

    /**
     * Get the form schema for the resource.
     *
     * @return array<string, Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            '{$variableName}_name' => Forms\Components\TextInput::make('{$variableName}_name')
                ->required()
                ->maxLength(255),
            '{$variableName}_description' => Forms\Components\Textarea::make('{$variableName}_description')
                ->maxLength(65535),
            '{$variableName}_status' => Forms\Components\Toggle::make('{$variableName}_status')
                ->default(true),
        ];
    }

PHP;
=======
use Modules\Xot\Helpers\ResourceFormSchemaGenerator;

class GenerateResourceFormSchemaCommand extends Command
{
    protected $signature = 'xot:generate-resource-form-schema';

    protected $description = 'Generate getFormSchema method for XotBaseResource classes';

    public function handle()
    {
        $result = ResourceFormSchemaGenerator::generateForAllResources();

        $this->info('Resource Form Schema Generation Report:');
        $this->info('Updated Resources: '.count($result['updated']));

        if (! empty($result['updated'])) {
            $this->table(
                ['Updated Resources'],
                array_map(fn ($resource) => [$resource], $result['updated'])
            );
        }

        if (! empty($result['skipped'])) {
            $this->warn('Skipped Resources: '.count($result['skipped']));
            $this->table(
                ['Skipped Resources'],
                array_map(fn ($resource) => [$resource], $result['skipped'])
            );
        }

        // Additional handling for Clusters resources
        $clustersResources = glob('/var/www/html/base_techplanner_fila3/laravel/Modules/*/app/Filament/Clusters/*/Resources/*Resource.php');
        $clustersUpdated = 0;
        $clustersSkipped = 0;

        foreach ($clustersResources as $file) {
            try {
                // Get the full class name
                $content = file_get_contents($file);
                preg_match('/namespace\s+([\w\\\\]+);/', $content, $namespaceMatch);
                preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch);

                if (isset($namespaceMatch[1]) && isset($classMatch[1])) {
                    $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];

                    // Modify the file to add getFormSchema method
                    $modifiedContent = preg_replace(
                        '/}(\s*)$/',
                        "\n    public function getFormSchema(): array {\n        return [\n            // Basic form schema\n            Forms\\Components\\TextInput::make('name')->required(),\n        ];\n    }\n}$1",
                        $content
                    );

                    file_put_contents($file, $modifiedContent);
                    $this->info("Updated Clusters Resource: {$fullClassName}");
                    ++$clustersUpdated;
                } else {
                    $this->warn("Could not process Clusters Resource: {$file}");
                    ++$clustersSkipped;
                }
            } catch (\Exception $e) {
                $this->error("Error processing Clusters Resource {$file}: ".$e->getMessage());
                ++$clustersSkipped;
            }
        }

        $this->info("Clusters Resources Updated: {$clustersUpdated}");
        $this->warn("Clusters Resources Skipped: {$clustersSkipped}");

        return 0;
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    }
}
