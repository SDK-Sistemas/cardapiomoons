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
            ->for(Image::factory()->forBanner())
            ->hasTranslations(3)
            ->create();
    }
}
