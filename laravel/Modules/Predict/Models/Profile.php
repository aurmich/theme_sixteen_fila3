<?php

declare(strict_types=1);

namespace Modules\Predict\Models;

use Modules\Blog\Models\Profile as BaseProfile;

class Profile extends BaseProfile
{
    /** @var string */
    protected $connection = 'predict'; // this will use the specified database connection
}
