<?php
/**
 * --.
 */

declare(strict_types=1);

namespace Modules\Activity\Filament\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Modules\Activity\Models\Activity;
use Filament\Resources\Pages\PageRegistration;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Activity\Filament\Resources\ActivityResource\Pages;

class ActivityResource extends XotBaseResource
{
    protected static ?string $model = Activity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                [
                ]
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
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivities::route('/'),
            'create' => Pages\CreateActivity::route('/create'),
            'edit' => Pages\EditActivity::route('/{record}/edit'),
        ];
    }
}
