<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;
use Modules\Xot\Actions\View\GetViewByClassAction;

/**
 * @property bool $shouldRender
 */
abstract class XotBaseWidget extends Widget implements HasForms
{
    use InteractsWithForms;
    use InteractsWithPageFilters;

    public string $title = '';

    public string $icon = '';

    /** @var view-string */
    protected static string $view = 'ui::empty';

    public function __construct()
    {
        /** @var view-string */
        $view = app(GetViewByClassAction::class)->execute(static::class);
        static::$view = $view;
    }

    public static function canView(): bool
    {
        return true;
    }

    /**
     * Get the view / contents that represent the widget.
     */
    public function render(): View
    {
        return view(static::$view, [
            'widget' => $this,
        ]);
    }
}
