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
=======
<<<<<<< HEAD
    public function getFormSchema(): array
    {
        return  [
=======
>>>>>>> origin/master
    public function form(Form $form): Form
    {
        return $form
            ->schema(
                [
<<<<<<< HEAD
=======
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
                    TextInput::make('id')
                        ->required()
                        ->maxLength(255),
                ]
<<<<<<< HEAD
            );
=======
<<<<<<< HEAD
            ;
=======
            );
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    }
}
