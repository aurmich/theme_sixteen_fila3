<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\User;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration 
{
>>>>>>> 8149186 (up)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->tableCreate(
            static function (Blueprint $table): void {
                $table->id();
                $table->nullableMorphs('model');
                $table->integer('credits')->nullable();
                $table->foreignIdFor(User::class, 'user_id')->nullable();
                $table->text('note')->nullable();
                $table->datetimetz('date')->nullable();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('rating_id')) {
                //     $table->integer('rating_id')->after('article_id');
                // }

                // $table->char('description')->change();

                if ($this->hasColumn('credits')) {
                    $table->decimal('credits')->change();
                }

                $this->updateTimestamps(table: $table, hasSoftDeletes: true);
            }
        );
    }
};
