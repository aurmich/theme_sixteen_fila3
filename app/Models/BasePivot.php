<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Notify\Models;
=======
namespace Modules\Gdpr\Models;
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
=======
namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
namespace Modules\Cms\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
namespace Modules\Geo\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
use Modules\Xot\Traits\Updater;

/**
 * Class BasePivot.
 */
abstract class BasePivot extends Pivot
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    use SoftDeletes;
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @see https://laravel-news.com/6-eloquent-secrets
=======
     * @see  https://laravel-news.com/6-eloquent-secrets
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
     * @see  https://laravel-news.com/6-eloquent-secrets
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
     * @see  https://laravel-news.com/6-eloquent-secrets
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var int */
    protected $perPage = 30;

    // use Searchable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
<<<<<<< HEAD
    protected $connection = 'notify';

    // this will use the specified database connection
=======
    protected $connection = 'user';
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======

    /** @var string */
    protected $connection = 'blog';
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======

    /** @var string */
    protected $connection = 'cms';
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)

    /** @var list<string> */
    protected $appends = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Undocumented variable.
     */
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @return array<string, string> */
    public function casts(): array
=======
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
    /**
     * Undocumented variable.
     *
     * @var string
     */
    protected $primaryKey = 'id';
<<<<<<< HEAD

    /** @return array<string, string> */
    protected function casts(): array
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    /** @var string */
    protected $keyType = 'string';

    /** @return array<string, string> */
    protected function casts(): array
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
            'uuid' => 'string',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
        ];
    }
=======

    /** @var string */
    protected $connection = 'geo';

    protected $appends = [];

    /** @var array<string, string> */
    protected $casts = [
        'id' => 'string', // must be string else primary key of related model will be typed as int
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Undocumented variable.
     */
    /** @var string */
    protected $primaryKey = 'id';
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
}
