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
        $image = Image::factory()->make();

        Banner::factory()
            ->times(5)
            ->for(Image::factory()->state([
                'path' => "banners/{$image->path}.png",
            ]))
            ->hasTranslations(3)
            ->create();
    }
}
