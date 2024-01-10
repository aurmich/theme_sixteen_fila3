<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\Export;

// use Modules\Xot\Services\ArrayService;

use Illuminate\Pagination\LengthAwarePaginator;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Xot\Exports\CollectionExport;
use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportXlsByLengthAwarePaginator
{
    use QueueableAction;

    public function execute(
        LengthAwarePaginator $paginator
    ): BinaryFileResponse {
        dddx([
            // 'getIterator' => $paginator->getIterator(),
            // 'getCollection' => $paginator->getCollection(),
            'methods' => get_class_methods($paginator),
            // setCurrentPage does not exist
            'a' => $paginator->setCurrentPage(2, 'page'),
            // '$paginator->getCollection()' => $paginator->getCollection(),
            // 'resolveCurrentPage' => $paginator->resolveCurrentPage('page', 2),
            // '$paginator->getCollection() 2' => $paginator->getCollection(),
            // 'getPageName' => $paginator->getPageName(),
            // 'setCurrentPage' => $paginator->setCurrentPage(2),
        ]);
        /*
        $collectionExport = new CollectionExport($collection);
        $filename = 'test.xls';

        return Excel::download($collectionExport, $filename);
        */
    }
}
