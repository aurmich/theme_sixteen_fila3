<?php

declare(strict_types=1);

/**
 * ---.
 */

namespace Modules\Job\Filament\Resources\JobsWaitingResource\Pages;

use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Modules\Job\Filament\Resources\JobsWaitingResource;
use Modules\Job\Filament\Resources\JobsWaitingResource\Widgets\JobsWaitingOverview;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListJobsWaiting extends XotBaseListRecords
{
    public static string $resource = JobsWaitingResource::class;

    public function getHeaderActions(): array
    {
        return [];
    }

    public function getHeaderWidgets(): array
    {
        return [
            JobsWaitingOverview::class,
        ];
    }

    public function getTitle(): string
    {
        return __('jobs::translations.title');
    }



    public function getTableActions(): array
    {
        return [
            // ViewAction::make()
            //     ->label(''),
            // EditAction::make()
            //     ->label(''),
            // DeleteAction::make()
            //     ->label('')
            //     ->requiresConfirmation(),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }

    public function getGridTableColumns(): array
    {
        return [
        ];
    }

    public function getListTableColumns(): array
    {
        return [
            TextColumn::make('status')
                ->badge()
                ->sortable()
                // ->formatStateUsing(static fn (string $state): string => __("jobs::translations.{$state}"))
                ->color(
                    static fn (string $state): string => match ($state) {
                        'running' => 'primary',
                        'waiting' => 'success',
                        'failed' => 'danger',
                        default => 'secondary',
                    }
                ),
            TextColumn::make('display_name')
                ->sortable(),
            TextColumn::make('queue')
                ->sortable(),
            TextColumn::make('attempts')
                ->sortable(),
            TextColumn::make('reserved_at')
                ->since()
                ->sortable(),
            TextColumn::make('created_at')
                ->since()
                ->sortable(),
        ];
    }
}
