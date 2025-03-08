<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\User\Filament\Resources\ProfileResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\User\Filament\Resources\ProfileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateProfile extends XotBaseCreateRecord
=======
namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

use Modules\Gdpr\Filament\Resources\ProfileResource;

class CreateProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
namespace Modules\Blog\Filament\Resources\ProfileResource\Pages;

use Modules\Blog\Filament\Resources\ProfileResource;
use Modules\User\Filament\Resources\BaseProfileResource\Pages\CreateProfile as UserCreateProfile;

class CreateProfile extends UserCreateProfile
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
{
    protected static string $resource = ProfileResource::class;
}
