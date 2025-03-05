<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\FeatureResource\Pages;

<<<<<<< HEAD
use Modules\User\Filament\Resources\FeatureResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditFeature extends XotBaseEditRecord
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\FeatureResource;

class EditFeature extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> 8501391d (up)
{
    protected static string $resource = FeatureResource::class;
}
