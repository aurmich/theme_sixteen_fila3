<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Gdpr\Filament\Resources\EventResource\Pages;
use Modules\Gdpr\Models\Event;
use Modules\Xot\Filament\Resources\XotBaseResource;

class EventResource extends XotBaseResource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                    Forms\Components\TextInput::make('treatment_id')
                        ->maxLength(36)
                        ->default(null),
                    Forms\Components\Select::make('consent_id')
                        ->relationship('consent', 'id'),
                    Forms\Components\TextInput::make('subject_id')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('ip')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('action')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\Textarea::make('payload')
                        ->required()
                        ->columnSpanFull(),
                ]
            );
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns(
    //             [
    //                 Tables\Columns\TextColumn::make('id')
    //
    //                     ->searchable(),
    //                 Tables\Columns\TextColumn::make('treatment_id')
    //                     ->searchable(),
    //                 Tables\Columns\TextColumn::make('consent.id')
    //                     ->searchable(),
    //                 Tables\Columns\TextColumn::make('subject_id')
    //                     ->searchable(),
    //                 Tables\Columns\TextColumn::make('ip')
    //                     ->searchable(),
    //                 Tables\Columns\TextColumn::make('action')
    //                     ->searchable(),
    //                 Tables\Columns\TextColumn::make('created_at')
    //                     ->dateTime()
    //                     ->sortable()
    //                     ->toggleable(isToggledHiddenByDefault: true),
    //                 Tables\Columns\TextColumn::make('updated_at')
    //                     ->dateTime()
    //                     ->sortable()
    //                     ->toggleable(isToggledHiddenByDefault: true),
    //             ]
    //         )
    //         ->filters([
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //         ])
    //         ->emptyStateActions([
    //         ]);
    // }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
