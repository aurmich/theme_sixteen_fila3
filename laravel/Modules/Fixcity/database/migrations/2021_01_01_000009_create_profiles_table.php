<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
<<<<<<< HEAD
=======
use Modules\Blog\Models\Profile;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class CreateProfilesTable.
 */
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class extends XotBaseMigration {
    

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    /**
     * db up.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->increments('id');
                $table->integer('user_id')->nullable()->index();
                $table->string('first_name')->nullable();
                $table->string('last_name')->nullable();
                $table->string('email')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                /*
                if ($this->hasColumn('auth_user_id')) {
                    $table->dropColumn('user_id');
                    $table->renameColumn('auth_user_id', 'user_id');
                }
                */
                if ($this->hasColumn('user_id')) {
                    $table->string('user_id')->change();
                }

                if (! $this->hasColumn('credits')) {
                    $table->decimal('credits')->default(0);
                }

                if (! $this->hasColumn('slug')) {
                    $table->string('slug')->nullable();
                }

                if (! $this->hasColumn('extra')) {
                    $table->schemalessAttributes('extra');
                }

                if ($this->hasColumn('credits')) {
                    $table->decimal('credits')->change();
                }
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
    }
};
