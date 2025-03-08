<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Blog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

=======
namespace Modules\Cms\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Cms\Models\Menu;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Cms\Models\Menu>
 */
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
<<<<<<< HEAD
     */
    protected $model = \Modules\Blog\Models\Menu::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
=======
     *
     * @var class-string<Menu>
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => fake()->name,
            'items' => fake()->text,
        ];
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
    }
}
