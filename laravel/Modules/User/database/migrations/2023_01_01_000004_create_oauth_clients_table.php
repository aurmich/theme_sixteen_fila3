<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

<<<<<<< HEAD
return new class extends XotBaseMigration {
=======
return new class extends XotBaseMigration
{
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
    public function up(): void
    {
        $this->tableCreate(
            static function (Blueprint $table): void {
                // $table->bigIncrements('id');
                $table->uuid('id')->primary();
                // $table->unsignedBigInteger('user_id')->nullable()->index();
                $table->foreignIdFor(Modules\Xot\Datas\XotData::make()->getUserClass(), 'user_id')->nullable()->index();
                $table->string('name');
                $table->string('secret', 100)->nullable();
                $table->string('provider')->nullable();
                $table->text('redirect');
                $table->boolean('personal_access_client');
                $table->boolean('password_client');
                $table->boolean('revoked');
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
<<<<<<< HEAD
                if ('string' !== $this->getColumnType('id')) {
=======
                if ($this->getColumnType('id') !== 'string') {
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
                    $table->uuid('id')->change();  // is  just primary
                }
                $this->updateTimestamps($table, false);
                $this->updateUser($table);
            }
        );
    }
};
