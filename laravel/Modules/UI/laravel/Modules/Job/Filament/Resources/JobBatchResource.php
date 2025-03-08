<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/Resources/JobBatchesResource.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources;

use Modules\Job\Filament\Resources\JobBatchResource\Pages\ListJobBatches;
use Modules\Job\Models\JobBatch;
use Modules\Xot\Filament\Resources\XotBaseResource;

class JobBatchResource extends XotBaseResource
{
    // //

    // protected static ?string $model = JobBatch::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function getPages(): array
    {
        return [
            'index' => ListJobBatches::route('/'),
        ];
    }
}
