<?php

declare(strict_types=1);

namespace Modules\Predict\Models;

use Modules\Blog\Models\Category as BaseCategory;

class Category extends BaseCategory
{
    /** @var string */
    protected $connection = 'predict'; // this will use the specified database connection
}
