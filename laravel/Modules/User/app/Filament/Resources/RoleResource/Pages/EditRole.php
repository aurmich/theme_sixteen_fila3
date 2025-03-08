<?php

declare(strict_types=1);

namespace Modules\User\Filament\Resources\RoleResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Filament\Actions\DeleteAction;
use Filament\Pages\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\User\Filament\Resources\RoleResource;
use Modules\User\Models\Role;
use Modules\User\Support\Utils;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> origin/master
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Webmozart\Assert\Assert;

class EditRole extends XotBaseEditRecord
<<<<<<< HEAD
=======
=======
use Webmozart\Assert\Assert;

class EditRole extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
{
    // //
    public Collection $permissions;

    // public Role $record;
    protected static string $resource = RoleResource::class;

    /**
     *  ---.
     */
    public function afterSave(): void
    {
        $permissionModels = collect();
        Assert::isArray($data = $this->data);
        $this->permissions->each(
            static function ($permission) use ($permissionModels, $data): void {
                $permissionModels->push(
                    Utils::getPermissionModel()::firstOrCreate(
                        [
                            'name' => $permission,
                            'guard_name' => $data['guard_name'] ?? 'web',
                        ]
                    )
                );
            }
        );
        Assert::isInstanceOf($this->record, Role::class, '['.__LINE__.']['.class_basename($this).']');
        $this->record->syncPermissions($permissionModels);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->permissions = collect($data)->filter(static fn ($permission, $key): bool => ! \in_array($key, ['name', 'guard_name', 'select_all'], false) && Str::contains($key, '_'))->keys();

        return Arr::only($data, ['name', 'guard_name']);
    }
}
