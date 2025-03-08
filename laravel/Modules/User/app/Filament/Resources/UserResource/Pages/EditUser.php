<?php

/**
 * @see https://github.com/ryangjchandler/filament-user-resource/blob/main/src/resources/UserResource/Pages/EditUser.php
 */

declare(strict_types=1);

namespace Modules\User\Filament\Resources\UserResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
use Modules\User\Filament\Resources\UserResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditUser extends XotBaseEditRecord
<<<<<<< HEAD
=======
=======
use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\UserResource;

class EditUser extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
{
    // //
    protected static string $resource = UserResource::class;

    /* --- dovrebbe fare il mutator da controllare
    public function beforeSave(): void
    {
        Assert::isArray($this->data);
        if (! array_key_exists('new_password', $this->data) || ! filled($this->data['new_password'])) {
            return;
        }

        $this->record->password = Hash::make($this->data['new_password']);
    }
    */
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
