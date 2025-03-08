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
=======
<<<<<<< HEAD
/**
 * Class GetModelTypeByModelAction
 * 
 * Converte un'istanza di ModelContract nel suo tipo stringa corrispondente.
 */
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
class GetModelTypeByModelAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Execute the action.
=======
<<<<<<< HEAD
     * Esegue l'azione di conversione.
     * 
     * @param ModelContract $modelContract Il modello da convertire
     * @return string Il tipo del modello in formato snake_case
=======
     * Execute the action.
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
     */
    public function execute(ModelContract $modelContract): string
    {
        return Str::snake(class_basename($modelContract));
    }
}
