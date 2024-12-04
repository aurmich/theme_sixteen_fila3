<?php

declare(strict_types=1);

namespace Modules\Predict\Models;

use Modules\Blog\Models\Banner as BaseBanner;

class Banner extends BaseBanner
{
    /** @var string */
    protected $connection = 'predict'; // this will use the specified database connection
}
