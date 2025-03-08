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
<<<<<<< HEAD
class ListLogs extends XotBaseListRecords
=======
class ListLogs extends \Modules\Xot\Filament\Pages\XotBaseListRecords
>>>>>>> 5a9a90183 (up)
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
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
