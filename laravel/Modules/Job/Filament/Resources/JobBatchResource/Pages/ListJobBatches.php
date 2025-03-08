<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/Resources/JobBatchesResource/Pages/ListJobBatches.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobBatchResource\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Resources\JobBatchResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;
use Webmozart\Assert\Assert;

class ListJobBatches extends XotBaseListRecords
{
    protected static string $resource = JobBatchResource::class;



       public function getListTableColumns(): array
    {
        Assert::string($date_format = config('app.date_format'), '['.__LINE__.']['.class_basename(__CLASS__).']');

        return [
            TextColumn::make('created_at')
                ->dateTime($date_format)
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('id')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('name')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('cancelled_at')
                ->dateTime($date_format)
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('failed_at')
                ->dateTime($date_format)
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('finished_at')
                ->dateTime($date_format)
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('total_jobs')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('pending_jobs')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('failed_jobs')
                ->sortable()
                ->searchable()
                ->toggleable(),
            TextColumn::make('failed_job_ids')
                ->sortable()
                ->searchable()
                ->toggleable(),
        ];
    }

    public function getTableActions(): array
    {
        return [
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('prune_batches')

                ->requiresConfirmation()
                ->color('danger')
                ->action(
                    static function (): void {
                        Artisan::call('queue:prune-batches');
                        Notification::make()
                            ->title('All batches have been pruned.')
                            ->success()
                            ->send();
                    }
                ),
        ];
    }
}
