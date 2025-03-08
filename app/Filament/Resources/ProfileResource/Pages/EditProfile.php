<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\User\Filament\Resources\ProfileResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Modules\User\Filament\Resources\ProfileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditProfile extends XotBaseEditRecord
=======
namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

use Modules\Gdpr\Filament\Resources\ProfileResource;

class EditProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
{
    protected static string $resource = ProfileResource::class;
=======
namespace Modules\Blog\Filament\Resources\ProfileResource\Pages;

use Filament\Actions;
use Modules\Blog\Filament\Resources\ProfileResource;
use Modules\User\Filament\Resources\BaseProfileResource\Pages\EditProfile as UserEditProfile;

class EditProfile extends UserEditProfile
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
}
