<?php

declare(strict_types=1);

namespace Modules\Comment\Models;

use Spatie\Comments\Models\CommentNotificationOptOut as BaseCommentNotificationOptOut;

/**
<<<<<<< HEAD
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
=======
 * 
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
 * @method static \Modules\Comment\Database\Factories\CommentNotificationOptOutFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|CommentNotificationOptOut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentNotificationOptOut newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CommentNotificationOptOut query()
<<<<<<< HEAD
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentator
 *
=======
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentator
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
 * @mixin \Eloquent
 */
class CommentNotificationOptOut extends BaseCommentNotificationOptOut
{
    /** @var string */
    protected $connection = 'comment';
}
