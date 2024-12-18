<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\EventSourcing\StoredEvents\Models\EloquentStoredEvent as SpatieStoredEvent;

/**
 * Class StoredEvent.
 *
 * Represents a stored event in the activity module.
 *
 * @mixin \Eloquent
 */
class StoredEvent extends SpatieStoredEvent
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'aggregate_uuid',
        'aggregate_version',
        'event_version',
        'event_class',
        'event_properties',
        'meta_data',
        'created_at',
        'updated_by',
        'created_by',
    ];

    // protected $attributes = [
    //     'field_name' => '',
    // ];

    /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'activity';
}
