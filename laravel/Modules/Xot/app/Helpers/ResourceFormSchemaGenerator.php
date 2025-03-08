<?php

declare(strict_types=1);

namespace Modules\Xot\Helpers;

use Illuminate\Support\Str;
<<<<<<< HEAD
use Safe\Exceptions\FilesystemException;
use Safe\Exceptions\PcreException;
use function Safe\file_get_contents;
use function Safe\file_put_contents;
use function Safe\glob;
use function Safe\preg_match;
use function Safe\preg_replace;

class ResourceFormSchemaGenerator
{
    /**
     * Genera uno schema form per una classe Resource.
     *
     * @param string $resourceClass Il nome completo della classe Resource
     * @throws FilesystemException Se ci sono problemi di lettura/scrittura file
     * @throws PcreException Se ci sono problemi con le regex
     * @return bool True se lo schema è stato generato, False se già esistente
     */
    public static function generateFormSchema(string $resourceClass): bool
=======

class ResourceFormSchemaGenerator
{
    public static function generateFormSchema(string $resourceClass)
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    {
        try {
            $reflection = new \ReflectionClass($resourceClass);
            $filename = $reflection->getFileName();

<<<<<<< HEAD
            // Leggi il contenuto del file
            $fileContents = file_get_contents($filename);

            // Verifica se getFormSchema esiste già
=======
            // Read the file contents
            $fileContents = file_get_contents($filename);

            // Check if getFormSchema method already exists
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
            if (false !== strpos($fileContents, 'public function getFormSchema')) {
                return false;
            }

<<<<<<< HEAD
            // Genera uno schema form base sul nome della classe
            $modelName = str_replace('Resource', '', $reflection->getShortName());
            $modelVariable = Str::camel($modelName);

            $formSchemaMethod = "\n    /**\n";
            $formSchemaMethod .= "     * Get the form schema for the resource.\n";
            $formSchemaMethod .= "     *\n";
            $formSchemaMethod .= "     * @return array<string, Forms\Components\Component>\n";
            $formSchemaMethod .= "     */\n";
            $formSchemaMethod .= "    public static function getFormSchema(): array\n    {\n        return [\n";

            // Genera campi form base
            $formSchemaMethod .= "            '{$modelVariable}_name' => Forms\\Components\\TextInput::make('{$modelVariable}_name')\n";
            $formSchemaMethod .= "                ->required()\n";
            $formSchemaMethod .= "                ->maxLength(255),\n";

            $formSchemaMethod .= "        ];\n    }\n";

            // Rileva se la classe è in una directory Clusters
            $isInClustersDir = false !== strpos($filename, 'Clusters');

            // Inserisci il metodo prima dell'ultima parentesi graffa
=======
            // Generate a basic form schema based on the class name
            $modelName = str_replace('Resource', '', $reflection->getShortName());
            $modelVariable = Str::camel($modelName);

            $formSchemaMethod = "\n    public function getFormSchema(): array\n    {\n        return [\n";

            // Try to generate some basic form fields
            $formSchemaMethod .= "            Forms\\Components\\TextInput::make('{$modelVariable}_name')\n";
            $formSchemaMethod .= "                ->label('".Str::headline($modelName)." Name')\n";
            $formSchemaMethod .= "                ->required(),\n";

            $formSchemaMethod .= "        ];\n    }\n";

            // Detect if the class is in a Clusters directory
            $isInClustersDir = false !== strpos($filename, 'Clusters');

            // Insert the method before the last closing brace
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
            $modifiedContents = preg_replace(
                '/}(\s*)$/',
                $formSchemaMethod.($isInClustersDir ? '' : '}$1'),
                $fileContents
            );

<<<<<<< HEAD
            // Scrivi nel file
            file_put_contents($filename, $modifiedContents);

            return true;
        } catch (\ReflectionException $e) {
            throw new \RuntimeException("Errore di riflessione per {$resourceClass}: ".$e->getMessage());
        }
    }

    /**
     * Genera schemi form per tutte le Resource.
     *
     * @throws FilesystemException Se ci sono problemi di accesso ai file
     * @return array{updated: array<string>, skipped: array<string>}
     */
    public static function generateForAllResources(): array
=======
            // Write back to the file
            file_put_contents($filename, $modifiedContents);

            return true;
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            error_log("Error generating form schema for {$resourceClass}: ".$e->getMessage());

            return false;
        }
    }

    public static function generateForAllResources()
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    {
        $resourceFiles = glob('/var/www/html/base_techplanner_fila3/laravel/Modules/*/app/Filament/Resources/*Resource.php');

        $updatedResources = [];
        $skippedResources = [];

        foreach ($resourceFiles as $file) {
<<<<<<< HEAD
            try {
                // Ottieni il nome completo della classe
                $content = file_get_contents($file);
                preg_match('/namespace\s+([\w\\\\]+);/', $content, $namespaceMatch);
                preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch);

                if (! isset($namespaceMatch[1]) || ! isset($classMatch[1])) {
                    $skippedResources[] = $file;
                    continue;
                }

                $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];

=======
            // Get the full class name
            $content = file_get_contents($file);
            preg_match('/namespace\s+([\w\\\\]+);/', $content, $namespaceMatch);
            preg_match('/class\s+(\w+)\s+extends\s+XotBaseResource/', $content, $classMatch);

            if (! isset($namespaceMatch[1]) || ! isset($classMatch[1])) {
                $skippedResources[] = $file;

                continue;
            }

            $fullClassName = $namespaceMatch[1].'\\'.$classMatch[1];

            try {
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
                if (self::generateFormSchema($fullClassName)) {
                    $updatedResources[] = $fullClassName;
                }
            } catch (\Exception $e) {
<<<<<<< HEAD
                $skippedResources[] = $file.': '.$e->getMessage();
=======
                $skippedResources[] = $fullClassName.': '.$e->getMessage();
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
            }
        }

        return [
            'updated' => $updatedResources,
            'skipped' => $skippedResources,
        ];
    }
}
