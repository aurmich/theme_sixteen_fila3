<?php

declare(strict_types=1);

<<<<<<< HEAD
use Rector\Config\RectorConfig;
<<<<<<< HEAD
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/',
    ])
    ->withSkip([
        __DIR__.'/vendor',
    ])
    // uncomment to reach your current PHP version
    ->withPhpSets()
    ->withRules([
        // AddVoidReturnTypeWhereNoReturnRector::class,
    ]);
=======
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
=======
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Rector\MethodCall\RedirectRouteToToRouteHelperRector;
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths(
        [
<<<<<<< HEAD
            __DIR__.'/Modules',
            __DIR__.'/app',
            __DIR__.'/bootstrap',
            __DIR__.'/config',
            __DIR__.'/lang',
            __DIR__.'/resources',
            __DIR__.'/routes',
            __DIR__.'/tests',
=======
            __DIR__.'',
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
        ]
    );

    $rectorConfig->skip(
        [
<<<<<<< HEAD
            __DIR__.'/Modules/*/docs',
            __DIR__.'/Modules/*/vendor',
            '*/docs',
            '*/vendor',
            './vendor/',
=======
            __DIR__.'/vendor',
            __DIR__.'/docs',
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
        ]
    );

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
<<<<<<< HEAD
    // $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);
=======
    $rectorConfig->rule(RedirectRouteToToRouteHelperRector::class);
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)

    // define sets of rules
    $rectorConfig->sets(
        [
            PHPUnitLevelSetList::UP_TO_PHPUNIT_100,
<<<<<<< HEAD
            // SetList::DEAD_CODE,
            // SetList::CODE_QUALITY,
=======
            SetList::DEAD_CODE,
            SetList::CODE_QUALITY,
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
            LevelSetList::UP_TO_PHP_81,
            LaravelSetList::LARAVEL_100,

            // SetList::NAMING, //problemi con injuction
<<<<<<< HEAD
            SetList::TYPE_DECLARATION,
=======
            // SetList::TYPE_DECLARATION,
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
            // SetList::CODING_STYLE,
            // SetList::PRIVATIZATION,//problemi con final
            // SetList::EARLY_RETURN,
            // SetList::INSTANCEOF,
        ]
    );

    $rectorConfig->importNames();
};
<<<<<<< HEAD
>>>>>>> f755e5bcec (Squashed 'laravel/Modules/Xot/' content from commit 5d7fb5a1)
=======
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
