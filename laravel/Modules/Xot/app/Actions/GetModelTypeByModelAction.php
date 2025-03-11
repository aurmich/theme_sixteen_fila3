<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Str;
use Modules\Xot\Contracts\ModelContract;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
/**
 * Class GetModelTypeByModelAction
 * 
 * Converte un'istanza di ModelContract nel suo tipo stringa corrispondente.
 */
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
class GetModelTypeByModelAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Esegue l'azione di conversione.
     * 
     * @param ModelContract $modelContract Il modello da convertire
     * @return string Il tipo del modello in formato snake_case
=======
     * Execute the action.
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
     */
    public function execute(ModelContract $modelContract): string
    {
        return Str::snake(class_basename($modelContract));
    }
}
