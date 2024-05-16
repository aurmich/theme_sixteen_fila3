<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources;

use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\PageRegistration;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Modules\Media\Filament\Resources\MediaResource\Pages\CreateMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\EditMedia;
use Modules\Media\Filament\Resources\MediaResource\Pages\ListMedia;
use Modules\Media\Models\Media;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Webmozart\Assert\Assert;

class MediaResource extends XotBaseResource
{
    protected static ?string $model = Media::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form, bool $asset = true): Form
    {
        return $form
            ->schema(
                static::getFormSchema($asset)
            );
    }

    /**
     * @return (Radio|TextInput|BaseFileUpload|FileUpload)[]
     *
     * @psalm-return list{BaseFileUpload&FileUpload, Radio, TextInput}
     */
    public static function getFormSchema(bool $asset = true): array
    {
        Assert::string($disk = $asset ? config('camping.asset.attachments.disk.driver') : config('camping.operation.attachments.disk.driver'));
        Assert::isArray($file_types = $asset ? config('camping.asset.attachments.allowed_file_types') : config('camping.operation.attachments.allowed_file_types'));
        Assert::integer($max_size = config('media-library.max_file_size'));

        return [
            FileUpload::make('file')
                ->label(static::trans('fields.file'))
                ->hint(static::trans('fields.file_hint'))
                ->storeFileNamesIn('original_file_name')
                ->disk(
                    $disk
                )
                ->acceptedFileTypes(
                    $file_types
                )
                ->visibility('private')
                ->maxSize(
                    $max_size
                )
                ->required()
                ->columnSpanFull(),
            /*-- usiamo enum con il casts sul modello
            Radio::make('attachment_type')
                ->hiddenLabel()
                ->options(
                    AttachmentType::descriptionsByValue($asset ? AttachmentType::cases() : AttachmentType::operationCases()),
                )
                ->default(AttachmentType::Image())
                ->columns(
                    $asset ? count(AttachmentType::cases()) : count(AttachmentType::operationCases()),
                )
                ->required()
                ->columnSpanFull(),
            */
            Radio::make('attachment_type'),
            TextInput::make('name')
                ->translateLabel()
                ->label(static::trans('fields.name.field_name'))
                ->hint(static::trans('fields.name.hint'))
                ->autocomplete(false)
                ->maxLength(255)
                ->columnSpanFull(),
        ];
    }

    public static function table(Table $table): Table
    {
        Assert::string($date_format = config('app.date_format'));

        return $table
            ->columns(
                [
                    TextColumn::make('collection_name')
                        ->label(static::trans('fields.collection_name')),

                    TextColumn::make('name')
                        ->label(static::trans('fields.filename')),

                    TextColumn::make('human_readable_size')
                        ->label(static::trans('fields.human_readable_size')),

                    TextColumn::make('creator.name')
                        ->label(static::trans('fields.creator.name'))
                        ->toggleable(),

                    TextColumn::make('created_at')
                        ->label(static::trans('fields.uploaded_at'))
                        ->dateTime($date_format)
                        ->toggleable(),
                ]
            )
            ->filters(
                [
                ]
            )
            ->actions(
                [
                    // ActionGroup::make([
                    Action::make('view_attachment')
                        ->label('')
                        ->icon('heroicon-s-eye')
                        ->color('gray')
                        ->url(
                            static fn ($record): string => $record->getUrl()
                        )->openUrlInNewTab(true),
                    DeleteAction::make()->label('')->requiresConfirmation(),
                    Action::make('download_attachment')
                        ->label('')
                        ->icon('heroicon-o-arrow-down-tray')
                        ->color('primary')
                        ->action(
                            static fn ($record) => response()->download($record->getPath(), $record->file_name)
                        ),
                    // ]),
                ]
            )
            ->bulkActions(
                [
                    DeleteBulkAction::make(),
                    // AttachmentDownloadBulkAction::make(),
                ]
            )
            ->defaultSort(
                column: 'created_at',
                direction: 'DESC',
            );
    }

    /**
     * @psalm-return array<never, never>
     */
    public static function getRelations(): array
    {
        return [
        ];
    }

    /**
     * @return PageRegistration[]
     *
     * @psalm-return array{index: PageRegistration, create: PageRegistration, edit: PageRegistration}
     */
    public static function getPages(): array
    {
        return [
            'index' => ListMedia::route('/'),
            'create' => CreateMedia::route('/create'),
            'edit' => EditMedia::route('/{record}/edit'),
        ];
    }
}
