<?php

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Modules\Activity\Models\StoredEvent;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\StoredEventResource\Pages;

class StoredEventResource extends XotBaseResource
{
    protected static ?string $model = StoredEvent::class;

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
            'index' => Pages\ListStoredEvents::route('/'),
            'create' => Pages\CreateStoredEvent::route('/create'),
            'edit' => Pages\EditStoredEvent::route('/{record}/edit'),
        ];
    }
}
