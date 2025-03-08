<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

declare(strict_types=1);
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
=======
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ->setRules(array(
=======
    ->setRules([
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
    ->setRules(array(
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
=======
    ->setRules(array(
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
    ->setRules(array(
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    ->setRules(array(
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
    ->setRules(array(
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
    ->setRules(array(
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
    ->setRules(array(
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
=======
        'braces' => [
            'position_after_functions_and_oop_constructs' => 'same',
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
        'braces'=>[
            'position_after_functions_and_oop_constructs'=>'same',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
        ],
        'function_declaration' => true,
        'blank_line_after_namespace' => true,
        'class_definition' => true,
        'elseif' => true,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ))
=======
    ])
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
=======
    ))
>>>>>>> 9e0c38567c (Squashed 'laravel/Modules/UI/' content from commit 2a434597e)
=======
    ))
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
    ))
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    ))
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
    ))
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
    ))
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
    ))
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    ->setFinder($finder)
;
