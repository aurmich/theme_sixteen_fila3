<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\DeviceResource\RelationManagers;

use Modules\Xot\Filament\Resources\XotBaseResource\RelationManager\XotBaseRelationManager;

class UsersRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'users';
}
