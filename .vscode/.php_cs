<?php
<<<<<<< HEAD
=======

declare(strict_types=1);
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
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
    ->setRules(array(
=======
    ->setRules([
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
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
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
=======
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
<<<<<<< HEAD
    ))
=======
    ])
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
    ->setFinder($finder)
;
