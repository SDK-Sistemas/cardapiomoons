<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::factory()
            ->times(5)
            ->has(Image::factory()->create(['path' => "banners/{$this->faker->word(1)}.png"]))
            ->create();
    }
}