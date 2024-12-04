<?php

declare(strict_types=1);

namespace Modules\Predict\Models;

use Modules\Blog\Models\Transaction as BaseTransaction;

class Transaction extends BaseTransaction
{
    /** @var string */
    protected $connection = 'predict'; // this will use the specified database connection
}
