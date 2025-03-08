<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\Permission;
use Modules\User\Models\Role;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateRolesTable.
 */
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->foreignIdFor(Permission::class, 'permission_id')
                    ->nullable();
                $table->foreignIdFor(Role::class, 'role_id')
                    ->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                $this->updateTimestamps($table);
            }
        );
    }
};
