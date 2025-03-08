<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

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
            function (Blueprint $table): void {
                $table->id();
                $table->string('uuid', 36)->nullable()->index();
                $table->string('email')->index();
                $table->string('token');
                // $table->timestamp('created_at')->nullable();
                $this->timestamps($table);
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                // if (! $this->hasColumn('email')) {
                //    $table->string('email')->nullable();
                // }
                // $this->updateUser($table);
<<<<<<< HEAD
                if ('uuid' === $this->getColumnType('id')) {
=======
<<<<<<< HEAD
                if ('uuid' === $this->getColumnType('id')) {
=======
                if ($this->getColumnType('id') === 'uuid') {
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
                    $table->dropColumn('id');
                }
                if (! $this->hasColumn('id')) {
                    $table->id();
                }
            }
        );
    }
};
