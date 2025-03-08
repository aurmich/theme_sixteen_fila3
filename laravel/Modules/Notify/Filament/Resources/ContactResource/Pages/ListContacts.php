<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

=======
use Filament\Tables\Table;
use Filament\Actions\CreateAction;
use Modules\UI\Enums\TableLayoutEnum;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Enums\ActionsPosition;
use Modules\Xot\Filament\Traits\HasXotTable;
use Filament\Tables\Actions\DeleteBulkAction;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseListRecords;
=======
>>>>>>> 72c474773 (.)
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListContacts extends XotBaseListRecords
{
<<<<<<< HEAD

=======
    use HasXotTable;
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;
>>>>>>> 72c474773 (.)

    protected static string $resource = ContactResource::class;





>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
    public function getListTableColumns(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            EditAction::make()
                ->label(''),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

<<<<<<< HEAD
=======


>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
