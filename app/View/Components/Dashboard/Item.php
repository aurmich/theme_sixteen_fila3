<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\View\Components\Dashboard;

use Illuminate\Contracts\Support\Renderable;
=======
namespace Modules\Rating\View\Components\Dashboard;

>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
use Illuminate\View\Component;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * Class Field.
 */
class Item extends Component
{
<<<<<<< HEAD
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'xot::components.dashboard.item';
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
=======
    public function render()
    {
        return '';
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
    }
}
