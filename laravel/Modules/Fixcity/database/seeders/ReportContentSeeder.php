<?php

declare(strict_types=1);

namespace Modules\Fixcity\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Fixcity\Enums\ReportStatusEnum;

class ReportContentSeeder extends Seeder
{
    private array $realReports = [
        [
            'title' => 'Buca in via Solferino',
            'description' => 'Presenza di una buca pericolosa sul manto stradale che necessita intervento urgente',
            'category' => 'strade',
            'address' => 'Via Solferino 24, Milano',
            'location' => ['lat' => 45.4781, 'lng' => 9.1875],
            'status' => ReportStatusEnum::PENDING->value,
<<<<<<< HEAD
            'priority' => 'alta',
=======
            'priority' => 'alta'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ],
        [
            'title' => 'Panchina danneggiata al parco',
            'description' => 'La panchina risulta instabile e potenzialmente pericolosa per gli utenti del parco',
            'category' => 'arredo_urbano',
            'address' => 'Parco Sempione, Milano',
            'location' => ['lat' => 45.4725, 'lng' => 9.1779],
            'status' => 'verified',
<<<<<<< HEAD
            'priority' => 'media',
=======
            'priority' => 'media'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ],
        [
            'title' => 'Lampione non funzionante',
            'description' => 'Il lampione dell\'illuminazione pubblica è spento da diversi giorni',
            'category' => 'illuminazione',
            'address' => 'Via Dante 15, Milano',
            'location' => ['lat' => 45.4647, 'lng' => 9.1866],
            'status' => 'in_progress',
<<<<<<< HEAD
            'priority' => 'media',
=======
            'priority' => 'media'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ],
        [
            'title' => 'Cestino rifiuti stracolmo',
            'description' => 'Il cestino dei rifiuti non viene svuotato da giorni e sta creando problemi di igiene',
            'category' => 'rifiuti',
            'address' => 'Corso Buenos Aires 45, Milano',
            'location' => ['lat' => 45.4781, 'lng' => 9.2107],
            'status' => 'pending',
<<<<<<< HEAD
            'priority' => 'bassa',
=======
            'priority' => 'bassa'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        ],
        [
            'title' => 'Albero pericolante',
            'description' => 'Un albero sembra instabile e potrebbe cadere sul marciapiede',
            'category' => 'verde_pubblico',
            'address' => 'Viale Monza 12, Milano',
            'location' => ['lat' => 45.4897, 'lng' => 9.2175],
            'status' => 'verified',
<<<<<<< HEAD
            'priority' => 'alta',
        ],
=======
            'priority' => 'alta'
        ]
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    ];

    public function run(): void
    {
        foreach ($this->realReports as $report) {
            DB::table('reports')->insert([
                'title' => $report['title'],
                'description' => $report['description'],
                'location' => json_encode($report['location']),
                'address' => $report['address'],
                'category' => $report['category'],
                'status' => $report['status'],
                'metadata' => json_encode([
                    'priority' => $report['priority'],
<<<<<<< HEAD
                    'created_at' => now()->subDays(rand(1, 30))->format('Y-m-d H:i:s'),
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
=======
                    'created_at' => now()->subDays(rand(1, 30))->format('Y-m-d H:i:s')
                ]),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
