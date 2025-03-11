<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

    protected static ?string $recordTitleAttribute = 'id';

<<<<<<< HEAD
    public function getFormSchema(): array
    {
        return  [
=======
    public function form(Form $form): Form
    {
        return $form
            ->schema(
                [
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                    TextInput::make('id')
                        ->required()
                        ->maxLength(255),
                ]
<<<<<<< HEAD
            ;
=======
            );
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    }
}
