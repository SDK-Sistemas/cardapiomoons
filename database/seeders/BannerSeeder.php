<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

/**
 *
 */
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @noinspection PhpMethodNamingConventionInspection
     */
    public function run(): void
    {
        $arr_banner = [
            'Nossa orbita quer surpreender seu paladar',
            'Um prato mais irresistível que o outro',
            'Nossa cozinha Fusion mistura cores e sabores, venha experimentar.'
        ];

        foreach ($arr_banner as $banner_text) {
            $banner = Banner::create();

            $banner->translations()->create([
                'locale' => 'pt_BR',
                'translation' => [
                    'text' => $banner_text
                ]
            ]);
        }
    }
}
