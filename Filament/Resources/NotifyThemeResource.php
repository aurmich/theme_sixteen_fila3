<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;
use Modules\Notify\Models\NotifyTheme;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class NotifyThemeResource extends Resource
{
    // //

    protected static ?string $model = NotifyTheme::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lang')->options(self::fieldOptions('lang')),
                Forms\Components\Select::make('type')->options(self::fieldOptions('type')),
                Forms\Components\Select::make('post_type')->options(self::fieldOptions('post_type')),
                Forms\Components\TextInput::make('post_id'),
                Forms\Components\TextInput::make('subject'),
                Forms\Components\TextInput::make('from'),
                Forms\Components\TextInput::make('from_email'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('logo_src')
                    ->enableOpen()
                    ->enableDownload()
                    ->columnSpanFull()
                    ->disk('uploads')
                    ->directory('photos')
                    ->preserveFilenames(),
                Forms\Components\TextInput::make('logo_width'),
                Forms\Components\TextInput::make('logo_height'),
                // Forms\Components\TextInput::make('theme'),
                Forms\Components\Select::make('theme')->options(
                    [
                        'empty' => 'empty',
                        'ark' => 'ark',
                        'minty' => 'minty',
                        'sunny' => 'sunny',
                        'widgets' => 'widgets',
                    ]
                )
                    ->default('empty'),
                Forms\Components\Textarea::make('body')->columnSpanFull(),
                // Forms\Components\RichEditor::make('body_html')->columnSpanFull(),
                TinyEditor::make('body_html')->columnSpanFull(),
            ]);
    }

    public static function fieldOptions(string $field): array
    {
        return NotifyTheme::select($field)
            ->where($field, '!=', null)
            ->distinct()
            ->pluck($field, $field)
            ->toArray();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                'id' => Tables\Columns\TextColumn::make('id')->sortable(),
                'lang' => Tables\Columns\TextColumn::make('lang')->sortable(),
                'type' => Tables\Columns\TextColumn::make('type')->sortable(),
                'post_id' => Tables\Columns\TextColumn::make('post_id')->sortable(),
                'post_type' => Tables\Columns\TextColumn::make('post_type')->sortable(),
                'logo_src' => Tables\Columns\TextColumn::make('logo_src')->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('lang')
                    ->options(self::fieldOptions('lang')),
                Tables\Filters\SelectFilter::make('post_type')
                    ->options(self::fieldOptions('post_type')),
                Tables\Filters\SelectFilter::make('type')
                    ->options(self::fieldOptions('type')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\LinkableRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotifyThemes::route('/'),
            'create' => Pages\CreateNotifyTheme::route('/create'),
            'edit' => Pages\EditNotifyTheme::route('/{record}/edit'),
        ];
    }
}
