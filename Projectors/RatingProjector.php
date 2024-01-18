<?php

declare(strict_types=1);

namespace Modules\Blog\Projectors;

use Modules\Blog\Events\ArticleRegistered;
use Spatie\EventSourcing\EventHandlers\Projectors\Projector;

class RatingProjector extends Projector
{
    public function onCreditAdded(RatingArticle $event): void
    {
        dddx($event);
    }
}
