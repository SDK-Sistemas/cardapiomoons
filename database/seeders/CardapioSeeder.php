<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Prato;
use App\Models\Banner;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrCategorias = include '_dadosCardapio.php';

        foreach ($arrCategorias as $categoria) {
            $cat = Categoria::create();

            $cat->translations()->create([
                'locale'      => 'pt_BR',
                'translation' => [
                    'title' => $categoria['title']
                ]
            ]);

            foreach ($categoria['pratos'] as $prato) {
                $dish = Prato::create([
                    'categoria_id' => $cat->id,
                    'price'        => 0
                ]);

                $dish->translations()->create([
                    'locale'      => 'pt_BR',
                    'translation' => $prato
                ]);
            }
        }
    }
}
