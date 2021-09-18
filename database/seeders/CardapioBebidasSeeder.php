<?php
/** @noinspection ALL */
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Prato;
use App\Models\Banner;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CardapioBebidasSeeder extends Seeder
{
    /**
     * Pedido de Inclusão de apenas 3 Categorias no Meio do Projeto
     *
     * @return void
     */
    public function run()
    {
    
        /** @noinspection UntrustedInclusionInspection */
        $arr_categorias = include '_dadosCardapioBebidas.php';

        foreach ($arr_categorias as $categoria) {

            if( $categoria['categoria']['id'] == null ){

                $cat = Categoria::create();

                foreach ($categoria['categoria']['traducoes'] as $key => $value){
                    $cat->translations()->create([
                        'locale'      => $key,
                        'translation' => ['name' => $value]
                    ]);
                }

            }else{
                $cat = Categoria::findOrFail( $categoria['categoria']['id'] );
            }

            foreach ($categoria['categoria']['fotos'] as $foto){

                $img = Image::firstOrCreate(
                    ['path' => $foto['path'] ],
                    ['alt' => '']
                );

                $cat->images()->attach($img->id);
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

                foreach ($prato['fotos'] as $foto){

                    $img = Image::firstOrCreate(
                        ['path' => $foto['path'] ],
                        ['alt' => '']
                    );

                    $dish->images()->attach($img->id);
                }
            }
        }
    }
}
