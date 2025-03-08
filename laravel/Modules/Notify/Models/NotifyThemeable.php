<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
use Illuminate\Support\Carbon;

/**
 * Modules\Notify\Models\NotifyThemeable.
 *
 * @property int         $id
 * @property string|null $model_type
 * @property int|null    $model_id
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property int|null    $notify_theme_id
<<<<<<< HEAD
 *
=======
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereNotifyThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedBy($value)
<<<<<<< HEAD
 *
=======
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property Carbon|null                                 $deleted_at
 * @property string|null                                 $deleted_by
<<<<<<< HEAD
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedBy($value)
 *
=======
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
<<<<<<< HEAD
    // ...
=======
<<<<<<< HEAD
    // ...
=======
>>>>>>> 72c474773 (.)
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
}
