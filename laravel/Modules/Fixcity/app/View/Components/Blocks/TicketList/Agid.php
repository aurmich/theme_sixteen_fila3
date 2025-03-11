<?php

declare(strict_types=1);

namespace Modules\Fixcity\View\Components\Blocks\TicketList;

<<<<<<< HEAD
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\Fixcity\Enums\ReportStatusEnum;
use Modules\Fixcity\View\Components\Blocks\TicketList\Agid as BaseAgid;
=======
use Modules\Fixcity\View\Components\Blocks\TicketList\Agid as BaseAgid;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Modules\Fixcity\Enums\ReportStatusEnum;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

class Agid extends BaseAgid
{
    public function getReports(): Collection
    {
        return DB::table('reports')
            ->select([
                'id',
                'title',
                'description',
                'location',
                'address',
                'category',
                'status',
                'metadata',
<<<<<<< HEAD
                'created_at',
=======
                'created_at'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            ])
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($report) {
                return [
                    'id' => $report->id,
                    'title' => $report->title,
                    'description' => $report->description,
                    'location' => json_decode($report->location, true),
                    'address' => $report->address,
                    'category' => $report->category,
                    'status' => ReportStatusEnum::from($report->status),
                    'metadata' => json_decode($report->metadata, true),
<<<<<<< HEAD
                    'created_at' => $report->created_at,
=======
                    'created_at' => $report->created_at
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                ];
            });
    }

    public function getCategories(): Collection
    {
        return DB::table('categories')
            ->select([
                'id',
                'name',
                'description',
<<<<<<< HEAD
                'icon',
=======
                'icon'
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
            ])
            ->get()
            ->mapWithKeys(function ($category) {
                return [
                    $category->id => [
                        'name' => $category->name,
                        'description' => $category->description,
<<<<<<< HEAD
                        'icon' => $category->icon,
                    ],
=======
                        'icon' => $category->icon
                    ]
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
                ];
            });
    }

    public function render()
    {
        return view('fixcity::components.blocks.ticket_list.agid', [
            'reports' => $this->getReports(),
<<<<<<< HEAD
            'categories' => $this->getCategories(),
        ]);
    }
}
=======
            'categories' => $this->getCategories()
        ]);
    }
} 
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
