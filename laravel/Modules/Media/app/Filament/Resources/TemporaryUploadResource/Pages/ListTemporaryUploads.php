<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\TemporaryUploadResource\Pages;

<<<<<<< HEAD
=======
use Filament\Actions\CreateAction;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Filament\Tables\Columns\TextColumn;
use Modules\Media\Filament\Resources\TemporaryUploadResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTemporaryUploads extends XotBaseListRecords
{
    protected static string $resource = TemporaryUploadResource::class;

    public function getListTableColumns(): array
    {
        return [
            'folder' => TextColumn::make('folder')
                ->searchable()
                ->sortable()
                ->wrap(),
            'filename' => TextColumn::make('filename')
                ->searchable()
                ->sortable()
                ->wrap(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
        ];
    }

<<<<<<< HEAD
    public function getTableFilters(): array
    {
        return [
            'folder' => \Filament\Tables\Filters\SelectFilter::make('folder')
                ->options(fn () => \Modules\Media\Models\TemporaryUpload::distinct()->pluck('folder', 'folder')->toArray()),
=======
    /**
     * @return CreateAction[]
     *
     * @psalm-return list{CreateAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ];
    }
}
