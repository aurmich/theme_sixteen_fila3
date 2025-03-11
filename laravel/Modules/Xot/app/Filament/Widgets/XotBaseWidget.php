<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

<<<<<<< HEAD
use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Actions\View\GetViewByClassAction;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
=======
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\Widget as FilamentWidget;
use Modules\Xot\Actions\View\GetViewByClassAction;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

/**
 * @property bool $shouldRender
 */
<<<<<<< HEAD
abstract class XotBaseWidget extends Widget implements HasForms
{
    use InteractsWithPageFilters;
    use InteractsWithForms;

=======
abstract class XotBaseWidget extends FilamentWidget
{
    use InteractsWithPageFilters;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)

    public string $title = '';

    public string $icon = '';

<<<<<<< HEAD
    /** @var view-string */
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    protected static string $view = 'ui::empty';

    public function __construct()
    {
<<<<<<< HEAD
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
=======
        // parent::__construct();//Cannot call constructor
        $view = app(GetViewByClassAction::class)->execute(static::class);
        static::$view = $view;
    }
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
}
