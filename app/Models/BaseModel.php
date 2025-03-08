<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Models;

// use Laravel\Scout\Searchable;
// ---------- traits
=======
namespace Modules\Media\Models;

>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
namespace Modules\Lang\Models;

// use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// use Laravel\Scout\Searchable;
// ---------- traits
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\Setting\Models;

// ---------- traits
=======
namespace Modules\Gdpr\Models;

>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
namespace Modules\Job\Models;
=======
namespace Modules\Notify\Models;
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
namespace Modules\Tenant\Models;
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
use Modules\Xot\Traits\Updater;
=======
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
use Modules\Xot\Traits\Updater;
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
use Modules\Xot\Traits\Updater;
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
namespace Modules\Blog\Models;
=======
namespace Modules\Cms\Models;
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Factories\Factory;
// ---------- traits
<<<<<<< HEAD
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Modules\Xot\Traits\Updater;
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
namespace Modules\Rating\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
use Modules\Xot\Traits\Updater;
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
namespace Modules\Geo\Models;

// use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// //use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
abstract class BaseModel extends Model implements HasMedia
{
    // use Searchable;
    use HasFactory;
    use InteractsWithMedia;
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
abstract class BaseModel extends Model
{
    use HasFactory;
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
abstract class BaseModel extends Model
{
    // use Searchable;
    // //use Cachable;
    use HasFactory;
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
abstract class BaseModel extends Model implements HasMedia
{
=======
abstract class BaseModel extends Model
{
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
abstract class BaseModel extends Model
{
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
    use HasFactory;

    // use Searchable;
    // use Cachable;
<<<<<<< HEAD
<<<<<<< HEAD
    use InteractsWithMedia;
    use SoftDeletes;
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
abstract class BaseModel extends Model
{
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
abstract class BaseModel extends Model
{
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
     * @see  https://laravel-news.com/6-eloquent-secrets
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
     * @see  https://laravel-news.com/6-eloquent-secrets
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
     *
     * @var bool
     */
    public static $snakeAttributes = true;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

<<<<<<< HEAD
    /** @var string */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
    protected $connection = 'setting';

    /** @var list<string> */
    protected $appends = [];
<<<<<<< HEAD
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
=======
    protected $connection = 'notify';

    /** @var list<string> */
    protected $appends = [];
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
    protected $connection = 'user';

    /** @var list<string> */
    protected $appends = [];
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
    protected $connection = 'blog';
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    protected $connection = 'rating';

    /** @var list<string> */
    protected $fillable = ['id'];
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
    protected $connection = 'lang';

    /** @var list<string> */
    protected $fillable = ['id'];
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
    // use Searchable;
    // use Cachable;

    /** @var list<string> */
    protected $fillable = ['id'];

    /** @var array<string, string> */
    protected $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)

    /** @var string */
    protected $primaryKey = 'id';

<<<<<<< HEAD
    /** @var string */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
    protected $keyType = 'string';
=======
    protected $keyType = 'string';
    /** @var string */
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    protected $connection = 'cms';

    /** @var string */
    protected $primaryKey = 'id';
    /** @var string */
    protected $keyType = 'string';
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
    protected $keyType = 'string';
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
    protected $keyType = 'string';
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)

=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
     */
    protected static function newFactory()
    {
        return app(GetFactoryAction::class)->execute(static::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
    }

    /** @return array<string, string> */
    protected function casts(): array
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
    }

    /** @return array<string, string> */
    public function casts(): array
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
    /** @return array<string, string> */
    public function casts(): array
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
<<<<<<< HEAD
<<<<<<< HEAD
            'published_at' => 'datetime',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            'verified_at' => 'datetime',

>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======

            'verified_at' => 'datetime',
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======

            'verified_at' => 'datetime',

>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======

            'verified_at' => 'datetime',
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
            'published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime',
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
            // 'published_at' => 'datetime:Y-m-d', // da verificare
            'published_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
        ];
=======
    }

    /**
     * @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string', 'published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
    }
=======
    protected $connection = 'geo';
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
}
