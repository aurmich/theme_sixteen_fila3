<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Nwidart\Modules\Module as NModule;

use function Safe\json_encode;

use Sushi\Sushi;

/**
 * @property int         $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null   $status
 * @property int|null    $priority
 * @property string|null $path
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereStatus($value)
 *
 * @property string|null $icon
 * @property array|null  $colors
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereColors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereIcon($value)
 *
 * @mixin \Eloquent
 */
class Module extends Model
{
    use Sushi;

    protected $fillable = [
        'name',
        // 'alias',
        // 'description',
        'status',
        'priority',
        'path',
        'icon',
        'colors',
    ];

    /**
     * @return array
     */
    public function getRows()
    {
        $modules = ModuleFacade::all();
        $modules = Arr::map(
            $modules,
            function (NModule $module): array {
                $config = config('tenant::config');
                if (! is_array($config)) {
                    $config = [];
                }
                $colors = Arr::get($config, 'colors', []);

                return [
                    'name' => $module->getName(),
                    // 'alias' => $module->getAlias(),
                    'description' => $module->getDescription(),
                    'status' => $module->isEnabled(),
                    'priority' => $module->get('priority'),
                    'path' => $module->getPath(),
                    'icon' => Arr::get($config, 'icon', 'heroicon-o-question-mark-circle'),
                    'colors' => json_encode($colors),
                ];
            }
        );

        return array_values($modules);
    }

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'description' => 'string',
            'status' => 'boolean',
            'priority' => 'integer',
            'path' => 'string',
            'icon' => 'string',
            'colors' => 'array',
        ];
=======
namespace Modules\Cms\Models;

use Modules\Cms\Database\Factories\ModuleFactory;
use Modules\Xot\Contracts\ProfileContract;
use Nwidart\Modules\Facades\Module as NwModule;
use Nwidart\Modules\Laravel\Module as LaravelModule;
use Sushi\Sushi;
use Webmozart\Assert\Assert;

/**
 * Modules\Cms\Models\Module.
 *
 * @property int                  $id
 * @property string|null          $name
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @method static ModuleFactory                                factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 *
 * @mixin IdeHelperModule
 * @mixin \Eloquent
 */
class Module extends BaseModel
{
    use Sushi;

    /** @var list<string> */
    protected $fillable = [
        'id', 'name',
    ];

    public function getRows(): array
    {
        $modules = NwModule::getByStatus(1);
        $rows = [];
        $i = 1;
        foreach ($modules as $module) {
            Assert::isInstanceOf($module, LaravelModule::class);
            $tmp = [
                'id' => $i++,
                'name' => $module->getName(),
            ];
            $rows[] = $tmp;
        }

        return $rows;
    }

    /**
     * Undocumented function.
     */
    public function getRouteKeyName(): string
    {
        return 'id';
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
    }
}
