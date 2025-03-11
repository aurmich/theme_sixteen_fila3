<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Widgets;

// use Symfony\Component\Console\Output\BufferedOutput;

use Filament\Widgets\Widget;

class Clock extends Widget
{
    public string $start = '';

<<<<<<< HEAD
    /**
     * @var view-string
     */
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    protected static string $view = 'xot::filament.widgets.clock';

    public function begin(): void
    {
        // while ($this->start >= 0) {
        $cond = true;
        while ($cond) {
            // Stream the current count to the browser...
            $this->stream(
                to: 'count',
                content: $this->start,
                replace: true,
            );

            // Pause for 1 second between numbers...
            // sleep(1);

            // Decrement the counter...
            // $this->start = $this->start - 1;
            $this->start = (string) now();
            if ('impossible' === $this->start) {
                $cond = false;
            }
        }
    }
<<<<<<< HEAD

    public static function canView(): bool
    {
        return true;
    }
=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
}
