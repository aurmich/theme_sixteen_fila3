<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Modules\Gdpr\Models\Profile;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Modules\Gdpr\Filament\Clusters\Profile as ProfileCluster;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages;

class ProfileResource extends XotBaseResource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ProfileCluster::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }





    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
