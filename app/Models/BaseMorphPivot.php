<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Models;
=======
namespace Modules\Job\Models;
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)

use Illuminate\Database\Eloquent\Relations\MorphPivot;
=======
namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Actions\Factory\GetFactoryAction;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseMorphPivot.
 */
abstract class BaseMorphPivot extends MorphPivot
{
<<<<<<< HEAD
    use Updater;

=======
    use HasFactory;
    use Updater;

    // use HasUuids;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

<<<<<<< HEAD
    /** @var bool */
    public $incrementing = true;

<<<<<<< HEAD
=======
    /** @var bool */
    public $timestamps = true;

>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
    /** @var int */
    protected $perPage = 30;

    /** @var string */
<<<<<<< HEAD
    protected $connection = 'xot';
=======
    protected $connection = 'job';
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'user';
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'related_type',
        'user_id',
        'note',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
    /**
     * Create a new factory instance for the model.
     *
     * @return Factory<static>
     */
    protected static function newFactory()
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
<<<<<<< HEAD
            'uuid' => 'string',

=======
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
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
