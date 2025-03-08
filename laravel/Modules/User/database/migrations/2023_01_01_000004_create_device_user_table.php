<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\Device;
use Modules\Xot\Database\Migrations\XotBaseMigration;
use Modules\Xot\Datas\XotData;

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
                $user_class = XotData::make()->getUserClass();
                $table->id('id');
                $table->foreignIdFor(Device::class, 'device_id')->index();
                $table->foreignIdFor($user_class, 'user_id')->index();
                $table->dateTime('login_at')->nullable();
                $table->dateTime('logout_at')->nullable();
            }
        );
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table): void {
                if (! $this->hasColumn('push_notifications_token')) {
                    $table->string('push_notifications_token')->nullable();
                }

                if (! $this->hasColumn('push_notifications_enabled')) {
                    $table->boolean('push_notifications_enabled')->nullable();
                }
                // -- change
                if ($this->hasColumn('device_id')) {
                    $table->string('device_id', 36)->nullable()->change();
                }
                // dddx($this->getColumnType('device_id'));//varchar
<<<<<<< HEAD
                if ('uuid' == $this->getColumnType('user_id')) {
=======
<<<<<<< HEAD
                if ('uuid' == $this->getColumnType('user_id')) {
=======
                if ($this->getColumnType('user_id') == 'uuid') {
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
                    $table->string('user_id', 36)->nullable()->change();
                }

                $this->updateTimestamps($table);
            }
        );
    }
};
