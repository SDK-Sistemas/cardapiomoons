<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => null,
            'alt'  => $this->faker->word(4)
        ];
    }

    public function forBanner()
    {
        return $this->state([
            'path' => 'banners/' . $this->faker->image(\storage_path() . '\app\public\banners', 1600, 1200, 'food', false, true, false, false),
        ]);
    }

    public function forStorie()
    {
        return $this->state([
            'path' => 'stories/' . $this->faker->image(\storage_path() . '\app\public\stories', 1600, 1200, 'food', false, true, false, false),
        ]);
    }

    public function forCategoria()
    {
        return $this->state([
            'path' => 'categorias/' . $this->faker->image(\storage_path() . '\app\public\categorias', 1600, 1200, 'food', false, true, false, false),
        ]);
    }

    public function forPrato()
    {
        return $this->state([
            'path' => 'pratos/' . $this->faker->image(\storage_path() . '\app\public\pratos', 1600, 1200, 'food', false, true, false, false),
        ]);
    }
}
