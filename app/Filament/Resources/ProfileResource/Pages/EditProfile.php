<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\User\Filament\Resources\ProfileResource\Pages;

use Modules\User\Filament\Resources\ProfileResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;




=======
namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

use Modules\Gdpr\Filament\Resources\ProfileResource;
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)

class EditProfile extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
{
    protected static string $resource = ProfileResource::class;
}
