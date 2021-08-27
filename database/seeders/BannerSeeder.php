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
            [
                'title' => 'Atmosfera',
                'text' => 'Novo ambiente para surpreender seu paladar'
            ],
            [
                'title' => 'Fusion',
                'text' => 'Culinária Fusion que mistura ingredientes e sabores'
            ],
            [
                'title' => 'Sincronia',
                'text' => 'Sons, cores e texturas em perfeita harmonia'
            ],
            [
                'title' => 'Descoberta',
                'text' => 'Descubra novos gostos e viva momentos inesquecíveis'
            ],
        ];

        foreach ($arr_banner as $banner_trans) {
            $banner = Banner::create();

            $banner->translations()->create([
                'locale' => 'pt_BR',
                'translation' => $banner_trans
            ]);
        }
    }
}
