<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======

declare(strict_types=1);
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

return PhpCsFixer\Config::create()
<<<<<<< HEAD
<<<<<<< HEAD
    ->setRules(array(
=======
    ->setRules([
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    ->setRules(array(
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
        '@Symfony' => true,
        'array_indentation' => true,
        'function_typehint_space' => true,
        'declare_equal_normalize' => true,
        'combine_consecutive_unsets' => true,
        'binary_operator_spaces' => ['align_double_arrow' => false],
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => true,
        'phpdoc_order' => true,
        'php_unit_construct' => false,
<<<<<<< HEAD
<<<<<<< HEAD
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
=======
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
<<<<<<< HEAD
<<<<<<< HEAD
    ))
=======
    ])
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    ))
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
    ->setFinder($finder)
;
