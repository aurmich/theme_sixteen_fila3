<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\ScheduleResource\Pages;

use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Columns\Column;
use Filament\Tables\Table;
use Illuminate\Support\Carbon;
use Modules\Job\Filament\Columns\ActionGroup;
use Modules\Job\Filament\Columns\ScheduleArguments;
use Modules\Job\Filament\Columns\ScheduleOptions;
use Modules\Job\Filament\Resources\ScheduleResource;
use Modules\Job\Models\Schedule;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListSchedules extends XotBaseListRecords
{
    protected static string $resource = ScheduleResource::class;

    public function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('command')
                ->getStateUsing(function ($record) {
                    if ('custom' === $record->command) {
                        return $record->command_custom;
                    }

                    return $record->command;
                })
                ->searchable()
                ->sortable(),
            ScheduleArguments::make('params')
                ->searchable()
                ->sortable(),
            ScheduleOptions::make('options')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('expression')
                ->searchable()
                ->sortable(),
            Tables\Columns\TagsColumn::make('environments')
                ->separator(',')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->searchable()
                ->sortable()
                ->dateTime()
                ->wrap(),
            /*
            Tables\Columns\TextColumn::make('updated_at')
                ->getStateUsing(fn ($record) => $record->created_at == $record->updated_at ? static::trans('fields.never') : $record->updated_at)
                ->wrap()
                ->formatStateUsing(static function (Column $column, $state): ?string {
                    $format ??= config('tables.date_time_format');
                    if (blank($state) || $state == static::trans('fields.never')) {
                        return $state;
                    }

                    return Carbon::parse($state)
                        ->setTimezone($timezone ?? $column->getTimezone())
                        ->translatedFormat($format);
                })
                )
                ->searchable()
                ->sortable(),
            */
            /*
            Tables\Columns\BadgeColumn::make('status')
                              ->enum([
                                  Schedule::STATUS_INACTIVE => static::trans('status.inactive'),
                                  Schedule::STATUS_TRASHED => static::trans('status.trashed'),
                                  Schedule::STATUS_ACTIVE => static::trans('status.active'),
                              ])
                              ->icons([
                                  'heroicon-o-x',
                                  'heroicon-o-document' => Schedule::STATUS_INACTIVE,
                                  'heroicon-o-x-circle' => Schedule::STATUS_TRASHED,
                                  'heroicon-o-check-circle' => Schedule::STATUS_ACTIVE,
                              ])
                ->colors([
                    'warning' => Schedule::STATUS_INACTIVE,
                    'success' => Schedule::STATUS_ACTIVE,
                    'danger' => Schedule::STATUS_TRASHED,
                ])
                              )
                              ->searchable()
                              ->sortable(),
            */
        ];
    }

    public function getTaleFilters(): array
    {
        return [
            Tables\Filters\TrashedFilter::make(),
        ];
    }

    public function getTableActions(): array
    {
        return [
            // ActionGroup::make([
            Tables\Actions\EditAction::make()
                ->hidden(fn ($record) => $record->trashed())
                ->tooltip(__('filament-support::actions/edit.single.label')),
            Tables\Actions\RestoreAction::make()
                ->tooltip(__('filament-support::actions/restore.single.label')),
            Tables\Actions\DeleteAction::make()
                ->tooltip(__('filament-support::actions/delete.single.label')),
            Tables\Actions\ForceDeleteAction::make()
                ->tooltip(__('filament-support::actions/force-delete.single.label')),
            /*
            Tables\Actions\Action::make('toggle')
                ->disabled(fn ($record) => $record->trashed())
                ->icon(fn ($record) => Schedule::STATUS_ACTIVE == $record->status ? 'schedule-pause-fill' : 'schedule-play-fill')
                          ->color(fn ($record) => Schedule::STATUS_ACTIVE == $record->status ? 'warning' : 'success')
                          ->action(function ($record): void {
                              if (Schedule::STATUS_ACTIVE == $record->status) {
                                  $record->status = Schedule::STATUS_INACTIVE;
                              } elseif (Schedule::STATUS_INACTIVE == $record->status) {
                                  $record->status = Schedule::STATUS_ACTIVE;
                              }
                              $record->save();
                          })
                          ->tooltip(fn ($record) => Schedule::STATUS_ACTIVE == $record->status ? static::trans('buttons.inactivate') : static::trans('buttons.activate')),
            */
            Tables\Actions\ViewAction::make()
                ->icon('history')
                ->color('gray')
                ->tooltip(static::trans('buttons.history')),
            // ]),
        ];
    }

    public function getTableBulkActions(): array
    {
        return [
            Tables\Actions\DeleteBulkAction::make(),
        ];
    }



    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableRecordUrlUsing(): ?\Closure
    {
        return static fn (): ?string => null;
    }
}
