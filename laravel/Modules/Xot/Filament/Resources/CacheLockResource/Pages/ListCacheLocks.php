<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\CacheLockResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
=======
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Resources\Pages\ListRecords;
>>>>>>> 5a9a90183 (up)
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\CacheLockResource;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListCacheLocks extends XotBaseListRecords
{
<<<<<<< HEAD
=======
    
>>>>>>> 5a9a90183 (up)
    protected static string $resource = CacheLockResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
