<?php

declare(strict_types=1);

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
        /**
         * @var array $tableNames
         */
        $tableNames = config('permission.table_names');
        /**
         * @var array $columnNames
         */
        $columnNames = config('permission.column_names');
        /**
         * @var array $teams
         */
        $teams = config('permission.teams');

        if (empty($tableNames)) {
            throw new Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        if ($teams && empty($columnNames['team_foreign_key'] ?? null)) {
            throw new Exception('Error: team_foreign_key on config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        /**
         * @var string|null $cache_store
         */
        $cache_store = config('permission.cache.store');

        /**
         * @var string $cache_key
         */
        $cache_key = config('permission.cache.key');

        try {
            app('cache')
<<<<<<< HEAD
                ->store('default' !== $cache_store ? $cache_store : null)
=======
<<<<<<< HEAD
                ->store('default' !== $cache_store ? $cache_store : null)
=======
                ->store($cache_store !== 'default' ? $cache_store : null)
>>>>>>> c544fb4580 (Merge commit '18b8a43387ec0e43ffbd378b65d7fcd266562aab' as 'laravel/Themes/Sixteen')
>>>>>>> origin/master
                ->forget($cache_key);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /* -- is in xotbasemigration
    public function down(): void
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
    */
};
