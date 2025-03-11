<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
<<<<<<< HEAD
 * Class TrendData
 * 
 * Rappresenta un trend con una data e un valore aggregato.
 * 
 * @property string $date La data del trend
 * @property int|float|string $aggregate Il valore aggregato del trend
 */
class TrendData extends Data
{
    public function __construct(
        public string $date,
        public int|float|string $aggregate
    ) {}
=======
 * Undocumented class.
 */
class TrendData extends Data
{
    public string $date;

    public mixed $aggregate;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
}
