<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
use Filament\Forms;
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

=======
// use Modules\Notify\Filament\Resources\ContactResource\RelationManagers;
// use Filament\Forms;
use Modules\Notify\Models\Contact;
use Modules\Xot\Filament\Resources\XotBaseResource;

// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
class ContactResource extends XotBaseResource
{
    protected static ?string $model = Contact::class;

<<<<<<< HEAD
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
=======
    public static function getFormSchema(): array
    {
        return
                [
                ]
        ;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
