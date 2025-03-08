<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\Pages;

use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord as FilamentEditRecord;

/**
 * Undocumented class.
 */
<<<<<<< HEAD
abstract class XotBaseEditRecord extends FilamentEditRecord
=======
<<<<<<< HEAD
abstract class XotBaseEditRecord extends FilamentEditRecord
=======
abstract class XotBaseEditRecord extends FilamenEditRecord
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
{
    // ...

    public function form(Form $form): Form
    {
        $schema = $this->getFormSchema();
        if (empty($schema)) {
            $resource = $this->getResource();
            $schema = $resource::getFormSchema();
        }

        return $form->schema($schema);
    }
}
