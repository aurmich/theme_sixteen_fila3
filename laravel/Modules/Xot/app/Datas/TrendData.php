<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Spatie\LaravelData\Data;

/**
<<<<<<< HEAD
=======
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
>>>>>>> origin/master
 * Undocumented class.
 */
class TrendData extends Data
{
    public string $date;

    public mixed $aggregate;
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
}
