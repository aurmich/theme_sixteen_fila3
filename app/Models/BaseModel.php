<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Models;

// use Laravel\Scout\Searchable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
=======
namespace Modules\Job\Models;
=======
namespace Modules\User\Models;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
use Modules\Xot\Models\Traits\RelationX;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
    use HasFactory;
<<<<<<< HEAD

    // use Searchable;
    // //use Cachable;
=======
    use RelationX;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

<<<<<<< HEAD
<<<<<<< HEAD
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'xot';
=======
=======
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
<<<<<<< HEAD
    protected $connection = 'job';

    /** @var string|null */
    protected $prefix;
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)

    /** @var list<string> */
    protected $fillable = ['id'];

<<<<<<< HEAD
    protected $primaryKey = 'id';

=======
=======
    protected $connection = 'user';

    /** @var list<string> */
    protected $appends = [];

>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
<<<<<<< HEAD
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    /**
=======
    /**
     * @see vendor/ laravel / framework / src / Illuminate / Database / Eloquent / Factories / HasFactory.php
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
<<<<<<< HEAD
    protected static function newFactory(): Factory
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, class-string|string> */
    protected function casts(): array
    {
        return [
=======
    public function __construct(array $attributes = [])
    {
        if (isset($this->prefix)) {
            $this->table = $this->prefix.$this->table;
        }

        parent::__construct($attributes);
    }

    /**
     * ----
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
=======
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
<<<<<<< HEAD
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
            'published_at' => 'datetime',
=======

            'published_at' => 'datetime',
            'verified_at' => 'datetime',

>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
