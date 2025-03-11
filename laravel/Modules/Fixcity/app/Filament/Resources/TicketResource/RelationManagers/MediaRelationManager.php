<?php

namespace Modules\Fixcity\Filament\Resources\TicketResource\RelationManagers;

use Filament\Forms;
<<<<<<< HEAD
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
=======
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class MediaRelationManager extends RelationManager
{
    protected static string $relationship = 'media';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('file')
                    ->required()
                    ->directory('tickets/attachments')
                    ->preserveFilenames()
                    ->acceptedFileTypes(['application/pdf', 'image/*']),
<<<<<<< HEAD

=======
                    
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),
            ]);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('filename')
                    ->label('File'),
<<<<<<< HEAD

                Tables\Columns\TextColumn::make('description')
                    ->searchable(),

=======
                    
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                    
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
