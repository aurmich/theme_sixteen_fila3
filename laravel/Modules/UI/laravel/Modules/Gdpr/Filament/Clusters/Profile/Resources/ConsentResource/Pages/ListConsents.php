<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListConsents extends XotBaseListRecords
{
    protected static string $resource = ConsentResource::class;


}
