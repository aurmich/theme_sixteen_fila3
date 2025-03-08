<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Providers\Filament;

/**
 * Undocumented class.
 */
class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Xot';
=======
namespace Modules\Setting\Providers\Filament;
=======
namespace Modules\Job\Providers\Filament;
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)

=======
namespace Modules\Media\Providers\Filament;

use Filament\Panel;
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $module = 'Setting';
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
    protected string $module = 'Job';
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
    protected string $module = 'Media';

    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

        return $panel;
    }
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
}
