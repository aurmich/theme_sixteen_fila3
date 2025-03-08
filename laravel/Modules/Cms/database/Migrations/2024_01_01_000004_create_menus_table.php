<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/*
 * Class .
 */
<<<<<<< HEAD
return new class extends XotBaseMigration
{
=======
return new class extends XotBaseMigration {
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // -- CREATE --
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();

                $table->string('name');
                $table->text('items')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('items')) {
                    $table->text('items')->nullable();
                }

                if (! $this->hasColumn('parent_id')) {
                    $table->unsignedBigInteger('parent_id')->nullable();
                }
                if ($this->hasColumn('name')) {
                    $table->renameColumn('name', 'title');
                }

<<<<<<< HEAD
                // if (! $this->hasColumn('order_column')) {
                //    $table->integer('order_column')->nullable();
                // }
=======
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
    }
};
