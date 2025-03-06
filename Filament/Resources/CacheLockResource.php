<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages;
use Modules\Xot\Models\CacheLock;
use Filament\Forms;

class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Get the form schema for the resource.
     *
     * @return array<Forms\Components\Component>
     */
    public function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('key')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('owner')
                ->required()
                ->maxLength(255),
            Forms\Components\DateTimePicker::make('expiration')
                ->required(),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            ])
            ->filters([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCacheLocks::route('/'),
            'create' => Pages\CreateCacheLock::route('/create'),
            'edit' => Pages\EditCacheLock::route('/{record}/edit'),
        ];
    }
}
