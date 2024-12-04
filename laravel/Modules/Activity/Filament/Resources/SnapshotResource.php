<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Modules\Activity\Filament\Resources\SnapshotResource\Pages;
use Modules\Activity\Models\Snapshot;

class SnapshotResource extends Resource
{
    protected static ?string $model = Snapshot::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            'index' => Pages\ListSnapshots::route('/'),
            'create' => Pages\CreateSnapshot::route('/create'),
            'edit' => Pages\EditSnapshot::route('/{record}/edit'),
        ];
    }
}
