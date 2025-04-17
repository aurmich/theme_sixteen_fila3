<<<<<<< HEAD
<<<<<<< HEAD:app/Providers/CommentServiceProvider.php
=======
>>>>>>> origin/dev
<?php

declare(strict_types=1);

namespace Modules\Comment\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class CommentServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Comment';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
}
<<<<<<< HEAD
=======
<?php

declare(strict_types=1);

namespace Modules\Comment\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class CommentServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'comment'; // lower del nome

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
}
>>>>>>> ed55d1c42 (up):Providers/CommentServiceProvider.php
=======
>>>>>>> origin/dev
