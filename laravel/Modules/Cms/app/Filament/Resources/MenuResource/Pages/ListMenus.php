<?php

declare(strict_types=1);

namespace Modules\Cms\Filament\Resources\MenuResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Tables;
use Modules\Cms\Filament\Resources\MenuResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

=======
use Filament\Tables;
use Filament\Actions\CreateAction;
use Modules\Cms\Filament\Resources\MenuResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;


>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
class ListMenus extends XotBaseListRecords
{
    // protected static string $resource = MenuResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    /**
     * Get list table columns.
     *
     * @return array<Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('title'),
        ];
    }
}
