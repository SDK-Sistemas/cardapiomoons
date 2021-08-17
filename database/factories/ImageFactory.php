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
            'path' => $this->faker->image(\storage_path(), 1200, 1600, 'food', true),
            'alt'   => $this->faker->word(4)
        ];
    }

    public function forBanner()
    {
        return $this->state([
            'path' => 'banners/' . $this->faker->image(\storage_path() . '\app\public\banners', 1600, 1200, 'food', false, true, false, false),
        ]);
    }
}
