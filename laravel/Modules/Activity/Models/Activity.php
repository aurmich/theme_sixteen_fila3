<?php

declare(strict_types=1);

namespace Modules\Activity\Models;

use Spatie\Activitylog\Models\Activity as SpatieActivity;

/**
 * Class Activity.
 *
 * This class extends the Spatie Activity model to represent activities in the application.
 * @mixin \Eloquent
 */
class Activity extends SpatieActivity
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'log_name',
        'description',
        'subject_type',
        'event',
        'subject_id',
        'causer_type',
        'causer_id',
        'properties',
        'batch_uuid',
        'created_at',
        'updated_at',
    ];

    /*
    @var array<string, mixed>
    protected $attributes = [
        'field_name', // Consider adding real field names as needed
    ];
    */
    /** @var string */
    protected $connection = 'activity';

    // Additional methods or relationships can be defined here as needed
}
