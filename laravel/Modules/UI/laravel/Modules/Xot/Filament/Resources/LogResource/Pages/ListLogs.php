<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\LogResource\Pages;

use Filament\Actions;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\LogResource;

<<<<<<< HEAD
class ListLogs extends XotBaseListRecords
=======
class ListLogs extends \Modules\Xot\Filament\Pages\XotBaseListRecords
>>>>>>> 5a9a90183 (up)
{
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    protected static string $resource = LogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
