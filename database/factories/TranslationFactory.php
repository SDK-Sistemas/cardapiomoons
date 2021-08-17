<?php

namespace Database\Factories;

use App\Models\Translation;
use Illuminate\Database\Eloquent\Factories\Factory;

class TranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Translation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'locale'      => 'pt_BR',
            'translation' => [
                'title' => $this->faker->word(2),
                'subtitle' => $this->faker->word(3),
                'description' => $this->faker->word(6),
            ]
        ];
    }
}
