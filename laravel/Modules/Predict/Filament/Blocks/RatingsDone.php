<?php

declare(strict_types=1);

namespace Modules\Predict\Filament\Blocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Modules\Xot\Actions\View\GetViewsSiblingsAndSelfAction;
use Modules\Xot\Datas\XotData;

class RatingsDone
{
    public static function make(
        string $name = 'ratings_done',
        string $context = 'form',
    ): Block {
        $view = 'predict::components.blocks.ratings_done.ratings_done';
        $views = app(GetViewsSiblingsAndSelfAction::class)->execute($view);

        $primary_lang = XotData::make()->primary_lang;

        return Block::make($name)
            ->schema([
                Select::make('_tpl')
                    ->label('layout')
                    ->options($views),
            ])
            ->columns('form' === $context ? 2 : 1);
    }
}
