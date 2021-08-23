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
        $arrBanner = [
            'Nossa orbita quer surpreender seu paladar',
            'Um prato mais irresistível que o outro',
            'Nossa cozinha Fusion mistura cores e sabores, venha experimentar.'
        ];

        foreach ($arrBanner as $item) {
            $banner = Banner::create();

            $banner->translations()->create([
                'locale' => 'pt_BR',
                'translation' => [
                    'title' => $item
                ]
            ]);
        }

        // Banner::factory()
        //     ->times(5)
        //     ->for(Image::factory()->forBanner())
        //     ->hasTranslations(3)
        //     ->create();
    }
}
