<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 42aa20e (.)
=======
>>>>>>> d27db1b (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
>>>>>>> 5f3f456 (up)
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
=======
=======
>>>>>>> d27db1b (.)
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
//---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
////use Laravel\Scout\Searchable;
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
>>>>>>> 3a62aee (up)
=======
>>>>>>> d27db1b (.)
=======
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
>>>>>>> b1dceab (up)
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
abstract class BaseModel extends Model
{
<<<<<<< HEAD
    // use Searchable;
    // //use Cachable;
=======
=======
=======
>>>>>>> b1dceab (up)
abstract class BaseModel extends Model {
>>>>>>> 5f3f456 (up)
    use Updater;

<<<<<<< HEAD
protected $perPage = 30;

    //use Searchable;
    //use Cachable;
>>>>>>> 9a6fed4 (up)
=======
    // use Searchable;
    // use Cachable;
>>>>>>> 5f3f456 (up)
    use HasFactory;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    // public static $snakeAttributes = true;

    protected $perPage = 30;

<<<<<<< HEAD
    use Updater;
=======
    protected $connection = 'notify';

>>>>>>> 5f3f456 (up)
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
<<<<<<< HEAD
    public static $snakeAttributes = true;
=======
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
<<<<<<< HEAD
    ];
>>>>>>> 5f3f456 (up)

    /**
     * @var bool
     */
    public $incrementing = true;
<<<<<<< HEAD

=======
=======
=======
>>>>>>> d27db1b (.)
abstract class BaseModel extends Model
{
    use Updater;
    //use Searchable;
    //use Cachable;
    use HasFactory;

    protected $connection = 'notify';


    /**
     * @var array
     */
    protected $casts = [
        //'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
<<<<<<< HEAD
>>>>>>> 42aa20e (.)
=======
>>>>>>> d27db1b (.)
    /**
     * @var array
     */
    protected $hidden = [
<<<<<<< HEAD
<<<<<<< HEAD
        // 'password'
    ];
>>>>>>> 5f3f456 (up)
=======
        //'password'
    ];
>>>>>>> 42aa20e (.)
    /**
     * @var bool
     */
    public $timestamps = true;

<<<<<<< HEAD
    protected $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    protected $appends = [];

    /**
     * @var array<string>
     */
    protected $dates = ['published_at', 'created_at', 'updated_at', 'verified_at'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];

=======
>>>>>>> 42aa20e (.)
    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected static function newFactory()
    {
        return FactoryService::newFactory(static::class);
=======
    protected static function newFactory() {
        return FactoryService::newFactory(get_called_class());
>>>>>>> 5f3f456 (up)
    }
}
=======
=======
>>>>>>> 89120cb (rebase)
=======
>>>>>>> 47d9a86 (.)
=======
>>>>>>> fe06862 (.)
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
<<<<<<< HEAD
<<<<<<< HEAD
abstract class BaseModel extends Model
{
=======
abstract class BaseModel extends Model {
>>>>>>> b3b016d (up)
=======
abstract class BaseModel extends Model
{
>>>>>>> 27d29a3 (up)
    // use Searchable;
    // //use Cachable;
    use HasFactory;

    use Updater;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
<<<<<<< HEAD
     public static $snakeAttributes = true;

    protected $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
=======
>>>>>>> b1dceab (up)
    ];

    protected $appends = [];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at', 'verified_at'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var bool
     */
    public $incrementing = true;
    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];
=======
        //'password'
    ];
>>>>>>> d27db1b (.)
    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
<<<<<<< HEAD
    protected static function newFactory() {
        return FactoryService::newFactory(get_called_class());
    }
<<<<<<< HEAD
}
<<<<<<< HEAD
=======
=======
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// ---------- traits
use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Services\FactoryService;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
=======
>>>>>>> 3a62aee (up)
abstract class BaseModel extends Model {
    use Updater;

    // use Searchable;
    // use Cachable;
    use HasFactory;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
=======
>>>>>>> fe06862 (.)
    public static $snakeAttributes = true;

    /**
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var bool
     */
    public $timestamps = true;

    protected $perPage = 30;

    protected $connection = 'notify';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    protected $appends = [];

    /**
     * @var array<string>
     */
    protected $dates = ['published_at', 'created_at', 'updated_at', 'verified_at'];

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return FactoryService::newFactory(static::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
<<<<<<< HEAD
>>>>>>> 89120cb (rebase)
>>>>>>> 9349baf (.)
=======
}
>>>>>>> 47d9a86 (.)
=======
>>>>>>> 780e17a (up)
=======
    protected static function newFactory()
    {
        return FactoryService::newFactory(get_called_class());
=======
>>>>>>> 3a62aee (up)
=======
>>>>>>> b1dceab (up)
    }
<<<<<<< HEAD
}
>>>>>>> 42aa20e (.)
=======
}
>>>>>>> b62f52c (up)
=======
}
>>>>>>> b5251e5 (up)
=======
    }
}
>>>>>>> fe06862 (.)
=======
    protected static function newFactory()
    {
        return FactoryService::newFactory(get_called_class());
    }
}
>>>>>>> d27db1b (.)
=======
}
>>>>>>> 2e16e99 (up)
=======
    protected static function newFactory()
    {
        return FactoryService::newFactory(static::class);
    }
}
>>>>>>> 27d29a3 (up)
