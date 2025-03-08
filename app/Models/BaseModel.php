<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Models;

// use Laravel\Scout\Searchable;
// ---------- traits
=======
namespace Modules\Media\Models;

>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
<<<<<<< HEAD
=======
namespace Modules\Setting\Models;

// ---------- traits
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
    use HasFactory;

    // use Searchable;
    // //use Cachable;
<<<<<<< HEAD
<<<<<<< HEAD
=======
    // use Searchable;
    // use Cachable;
    use HasFactory;
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
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
<<<<<<< HEAD
    public $incrementing = true;

    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'xot';

    /** @var list<string> */
    protected $fillable = ['id'];

    protected $primaryKey = 'id';

=======
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
<<<<<<< HEAD
<<<<<<< HEAD
    protected $connection = 'setting';

    /** @var list<string> */
    protected $appends = [];
=======
    protected $connection = 'job';

    /** @var string|null */
    protected $prefix;

    /** @var list<string> */
    protected $fillable = ['id'];
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
    protected $connection = 'media';

    /** @var list<string> */
    protected $fillable = [
        'id',
    ];
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Create a new factory instance for the model.
     *
<<<<<<< HEAD
     * @return Factory<static>
     */
    protected static function newFactory(): Factory
    {
        // return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
        return app(GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, class-string|string> */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
=======
     * @return Factory
=======
    public function __construct(array $attributes = [])
    {
        if (isset($this->prefix)) {
            $this->table = $this->prefix.$this->table;
        }

        parent::__construct($attributes);
    }

=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
    /**
     * ----
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
<<<<<<< HEAD
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
=======
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
    }

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD

            'verified_at' => 'datetime',

>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
