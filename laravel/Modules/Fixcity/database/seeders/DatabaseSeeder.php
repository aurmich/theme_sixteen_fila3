<?php

declare(strict_types=1);

namespace Modules\Fixcity\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Categorie
        DB::table('categories')->insert([
            [
                'id' => 'strade',
                'name' => 'Strade',
                'description' => 'Problemi relativi a strade e marciapiedi',
<<<<<<< HEAD
                'icon' => 'road',
=======
                'icon' => 'road'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            ],
            [
                'id' => 'illuminazione',
                'name' => 'Illuminazione',
                'description' => 'Problemi di illuminazione pubblica',
<<<<<<< HEAD
                'icon' => 'lightbulb',
=======
                'icon' => 'lightbulb'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            ],
            // ... altre categorie
        ]);

        // Reports
        $this->call([
<<<<<<< HEAD
            ReportContentSeeder::class,
        ]);
    }
}
=======
            ReportContentSeeder::class
        ]);
    }
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
