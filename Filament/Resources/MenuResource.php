<?php

declare(strict_types=1);

namespace Modules\Blog\Filament\Resources;

use Filament\Forms;
<<<<<<< HEAD
=======
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
>>>>>>> 7412b571dbd0d1aeed5cc5b29b0f126002e09083
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Blog\Filament\Resources\MenuResource\Pages;
use Modules\Blog\Models\Menu;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Site';

    protected static ?string $navigationLabel = 'Navigation';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Repeater::make('items')
                ->schema([
                    Forms\Components\Grid::make(2)->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->columnSpan(1),

                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->columnSpan(1),
                    ]),

                    Forms\Components\Radio::make('type')
                        ->options([
                            'internal' => 'internal',
                            'external' => 'external',
                        ])
                        ->default('internal')
                        ->required()
                        ->inline(),
<<<<<<< HEAD
=======

                    SpatieMediaLibraryFileUpload::make('image')
                        // ->image()
                        // ->maxSize(5000)
                        // ->multiple()
                        // ->enableReordering()
                        ->openable()
                        ->downloadable()
                        ->columnSpanFull()
                        // ->collection('avatars')
                        // ->conversion('thumbnail')
                        ->disk('uploads')
                        ->directory('photos')
                        ->collection('menu')
                    // ->preserveFilenames()
                    ,
>>>>>>> 7412b571dbd0d1aeed5cc5b29b0f126002e09083
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                ]),
            ])
            ->filters([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
            // 'create' => Pages\CreateMenu::route('/create'),
        ];
    }
}
