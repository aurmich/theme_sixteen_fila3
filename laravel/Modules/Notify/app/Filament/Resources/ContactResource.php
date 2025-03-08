<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

// use Modules\Notify\Filament\Resources\ContactResource\RelationManagers;
// use Filament\Forms;
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends XotBaseResource
{
    protected static ?string $model = Contact::class;

    public static function getFormSchema(): array
    {
        return
                [
                ]
        ;
    }
}
