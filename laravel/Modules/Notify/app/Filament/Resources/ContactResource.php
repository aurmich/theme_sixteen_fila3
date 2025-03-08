<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
// use Modules\Notify\Filament\Resources\ContactResource\RelationManagers;
// use Filament\Forms;
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

=======
use Filament\Forms;
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

>>>>>>> origin/master
class ContactResource extends XotBaseResource
{
    protected static ?string $model = Contact::class;

<<<<<<< HEAD
    public static function getFormSchema(): array
    {
        return
                [
                ]
        ;
=======
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            'name' => Forms\Components\TextInput::make('name')
                ->required(),
            'email' => Forms\Components\TextInput::make('email')
                ->email()
                ->required(),
            'phone' => Forms\Components\TextInput::make('phone')
                ->tel()
                ->nullable(),
        ];
>>>>>>> origin/master
    }
}
