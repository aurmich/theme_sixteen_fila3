<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Attributes\Validation\ArrayType;
use Spatie\LaravelData\Data;

<<<<<<< HEAD
/**
 * Class HasManyUpdateData
 * 
 * Gestisce l'aggiornamento di una relazione hasMany.
 * 
 * @property string $foreignKey La chiave esterna della relazione
 * @property int|string $parentKey La chiave primaria del modello padre
 * @property array<int|string> $ids Gli ID dei modelli correlati
 */
class HasManyUpdateData extends Data
{
    /**
     * @param array<int|string> $ids Gli ID dei modelli correlati
     */
    public function __construct(
        public string $foreignKey,
        public int|string $parentKey,
=======
class HasManyUpdateData extends Data
{
    /**
     * @param array<int|string> $ids
     */
    public function __construct(
        public string $foreignKey,
        public mixed $parentKey,
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        #[ArrayType]
        public array $ids = [],
    ) {
    }
}
