<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

// use Modules\Notify\Filament\Resources\NotificationResource\RelationManagers;
// use Filament\Forms;
use Modules\Notify\Models\Notification;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

class NotificationResource extends XotBaseResource
{
    protected static ?string $model = Notification::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
        ]
        ;
    }
}
