<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

<<<<<<< HEAD
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
use Exception;
use Filament\Actions\CreateAction;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Modules\Media\Filament\Actions\Table\ConvertAction;
use Modules\Media\Filament\Resources\MediaResource;
use Modules\Media\Models\Media;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class ListMedia extends XotBaseListRecords
{
    protected static string $resource = MediaResource::class;

<<<<<<< HEAD
    /**
     * @return array<string, Tables\Columns\Column>
     */
    public function getListTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable()
                ->searchable(),
            'name' => TextColumn::make('name')
                ->sortable()
                ->searchable(),
            'size' => TextColumn::make('size')
                ->formatStateUsing(fn (string $state): string => number_format((int) $state / 1024, 2).' KB'),
            'mime_type' => TextColumn::make('mime_type')
                ->sortable()
                ->searchable(),
        ];
    }

    /**
     * @return array<string, Tables\Filters\BaseFilter>
     */
    public function getTableFilters(): array
    {
        return [
            'type' => SelectFilter::make('mime_type')
                ->options([
                    'image/jpeg' => 'JPEG',
                    'image/png' => 'PNG',
                    'application/pdf' => 'PDF',
                ]),
=======
    public function getGridTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'));

        return [
            Stack::make([
                TextColumn::make('collection_name'),

                TextColumn::make('name')

                    ->searchable()
                    ->sortable(),

                TextColumn::make('mime_type')

                    ->sortable(),

                ImageColumn::make('preview')

                    ->size(60)
                    ->defaultImageUrl(fn ($record) =>
                        /*
                    $url = $record->getUrl();
                    $info = pathinfo($url);
                    if(!isset($info['dirname'])) {

                        throw new Exception('['.__LINE__.']['.class_basename($this).']');
                    }
                    $thumb = $info['dirname'].'/conversions/'.$info['filename'].'-thumb.jpg';

                    return url($thumb);
                    */
                        $record->getUrlConv('thumb')),

                TextColumn::make('human_readable_size')
                // ->sortable()
                ,

                TextColumn::make('creator.name')

                    ->toggleable(),

                TextColumn::make('created_at')

                    ->dateTime($date_format)
                    ->toggleable(),
            ]),
        ];
    }

    public function getListTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'));

        return [
            TextColumn::make('collection_name'),

            TextColumn::make('name')

                ->searchable()
                ->sortable(),

            TextColumn::make('mime_type')

                ->sortable(),

            ImageColumn::make('preview')

                ->size(60)
                ->defaultImageUrl(fn ($record) =>
                    /*
                    $url = $record->getUrl();
                    $info = pathinfo($url);
                    if(!isset($info['dirname'])) {

                        throw new Exception('['.__LINE__.']['.class_basename($this).']');
                    }
                    $thumb = $info['dirname'].'/conversions/'.$info['filename'].'-thumb.jpg';

                    return url($thumb);
                    */
                    $record->getUrlConv('thumb')),

            TextColumn::make('human_readable_size')
            // ->sortable()
            ,

            TextColumn::make('creator.name')

                ->toggleable(),

            TextColumn::make('created_at')

                ->dateTime($date_format)
                ->toggleable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
        ];
    }

    public function getTableActions(): array
    {
        return [
            // ActionGroup::make([
            ViewAction::make()
                ->label(''),
            Action::make('view_attachment')
                ->label('')
                ->icon('heroicon-s-eye')
                ->color('gray')
                ->url(
                    static fn (Media $record): string => $record->getUrl()
                )->openUrlInNewTab(true),
            DeleteAction::make()
                ->label('')
                ->requiresConfirmation(),
            Action::make('download_attachment')
                ->label('')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(
                    static fn ($record) => response()->download($record->getPath(), $record->file_name)
                ),
            // ]),
            // ConvertAction::make('convert'),
            Action::make('convert')
                ->label('')
                ->icon('convert01')
                ->color('gray')
                ->url(
                    function ($record): string {
                        Assert::string($res = static::$resource::getUrl('convert', ['record' => $record]));

                        return $res;
                    }
                )->openUrlInNewTab(true),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
            // AttachmentDownloadBulkAction::make(),
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ];
    }

    /**
<<<<<<< HEAD
     * @return array<string, Tables\Actions\Action|Tables\Actions\ActionGroup>
     */
    public function getTableActions(): array
    {
        return [
            'view' => ViewAction::make(),
            'download' => Action::make('download')
                ->url(fn ($record) => route('media.download', $record))
                ->openUrlInNewTab(),
            'delete' => DeleteAction::make(),
            'preview' => Action::make('preview')
                ->url(fn ($record) => route('media.preview', $record))
                ->openUrlInNewTab(),
            'stream' => Action::make('stream')
                ->url(fn ($record) => route('media.stream', $record))
                ->openUrlInNewTab(),
=======
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
