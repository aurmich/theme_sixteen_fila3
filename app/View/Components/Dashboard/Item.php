<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\View\Components\Dashboard;

use Illuminate\Contracts\Support\Renderable;
=======
namespace Modules\Rating\View\Components\Dashboard;

>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
namespace Modules\Geo\View\Components\Dashboard;

>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
use Illuminate\View\Component;

// use Modules\Xot\View\Components\XotBaseComponent;

/**
 * Class Field.
 */
class Item extends Component
{
<<<<<<< HEAD
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
=======
    public function render(): string
    {
        return '';
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    }
}
