<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Model;

use Doctrine\DBAL\Schema\AbstractSchemaManager;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;

/**
 * Class GetSchemaManagerByModelClassAction
 * 
 * Ottiene lo schema manager per una classe modello.
 */
class GetSchemaManagerByModelClassAction
{
    /**
     * Ottiene lo schema manager.
     *
     * @param class-string<Model> $modelClass Nome della classe modello
     * @return AbstractSchemaManager
     * @throws \RuntimeException Se non è possibile ottenere lo schema manager
     */
    public function execute(string $modelClass): AbstractSchemaManager
    {
        Assert::classExists($modelClass);
        Assert::subclassOf($modelClass, Model::class);

        /** @var Model $model */
        $model = new $modelClass();
        $connection = DB::connection($model->getConnectionName());
        
        $schemaManager = $connection->getDoctrineSchemaManager();
        if (null === $schemaManager) {
            throw new \RuntimeException('Impossibile ottenere lo schema manager per ' . $modelClass);
        }

        return $schemaManager;
=======
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetSchemaManagerByModelClassAction
{
    use QueueableAction;

    public function execute(string $modelClass): AbstractSchemaManager
    {
        Assert::isInstanceOf($model = app($modelClass), EloquentModel::class);
        $connection = $model->getConnection();

        return $connection->getDoctrineSchemaManager();
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
