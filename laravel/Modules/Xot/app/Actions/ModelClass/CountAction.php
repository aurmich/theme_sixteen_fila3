<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\ModelClass;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Webmozart\Assert\Assert;

/**
 * Class CountAction
 * 
 * Conta i record di un modello.
 */
class CountAction
{
    /**
     * Conta i record di un modello.
     *
     * @param class-string<Model> $modelClass Nome della classe modello
     * @return int Numero di record
     * @throws \InvalidArgumentException Se la classe modello non è valida
     */
    public static function execute(string $modelClass): int
    {
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);

        /** @var Model $model */
        $model = new $modelClass();
        
        return $model->query()->count();
=======
use Modules\Xot\Models\InformationSchemaTable;
use Spatie\QueueableAction\QueueableAction;

/**
 * Counts records for a given model class using optimized table information.
 */
class CountAction
{
    use QueueableAction;

    /**
     * Execute the count action for the given model class.
     *
     * @param class-string<Model> $modelClass The fully qualified model class name
     *
     * @throws \InvalidArgumentException If model class is invalid or not found
     *
     * @return int The total count of records
     */
    public function execute(string $modelClass): int
    {
        return InformationSchemaTable::getModelCount($modelClass);
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    }
}
