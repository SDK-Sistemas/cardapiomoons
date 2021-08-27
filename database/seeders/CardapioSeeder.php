<?php
/** @noinspection ALL */
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Prato;
use App\Models\Banner;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

/**
 *
 */
class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @noinspection UntrustedInclusionInspection */
        $arr_categorias = include '_dadosCardapio.php';

        foreach ($arr_categorias as $categoria) {

            $cat = Categoria::create();

            foreach ($categoria['traducoes'] as $key => $value){
                $cat->translations()->create([
                    'locale'      => $key,
                    'translation' => ['name' => $value]
                ]);
            }

            foreach ($categoria['pratos'] as $prato) {

                $dish = Prato::create([
                    'categoria_id' => $cat->id,
                    'price'        => $prato['price']
                ]);

                foreach ($prato['traducoes'] as $key => $value){
                    $dish->translations()->create([
                        'locale'      => $key,
                        'translation' => $value
                    ]);
                }
            }
        }
    }
}
