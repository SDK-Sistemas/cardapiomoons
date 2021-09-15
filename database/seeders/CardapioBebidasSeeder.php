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
    
        $arr_categorias = [
            /**
             * Bebidas
             */
            [
                'traducoes' => [
                    'pt_BR' => 'Bebidas',
                    'us'=>  'Drinks',
                    'es' => 'Bebidas',
                ],
                'pratos' => [
                    /**
                     * Bebidas
                     */
                    [
                        'price' => 25.00,
                        'traducoes' => [
                            'pt_BR' => [
                                'name' => 'Bebidas',
                                'description' => ''
                            ],
                            'us' => [
                                'name' => 'Drinks',
                                'description' => ''
                            ],
                            'es' => [
                                'name' => 'Bebidas',
                                'description' => ''
                            ]
                        ]

                    ]
                ]
            ],
            /**
             * Drinks
             */
            [
                'traducoes' => [
                    'pt_BR' => 'Drinks',
                    'us'=>  'Cocktails',
                    'es' => 'Drinks',
                ],
                'pratos' => [
                    /**
                     * Drinks
                     */
                    [
                        'price' => 25.00,
                        'traducoes' => [
                            'pt_BR' => [
                                'name' => 'Drinks',
                                'description' => ''
                            ],
                            'us' => [
                                'name' => 'Cocktails',
                                'description' => ''
                            ],
                            'es' => [
                                'name' => 'Drinks',
                                'description' => ''
                            ]
                        ]

                    ]
                ]
            ],
            /**
             * Vinhos
             */
            [
                'traducoes' => [
                    'pt_BR' => 'Vinhos',
                    'us'=>  'Wine',
                    'es' => 'Vinhos',
                ],
                'pratos' => [
                    /**
                     * Vinhos
                     */
                    [
                        'price' => 25.00,
                        'traducoes' => [
                            'pt_BR' => [
                                'name' => 'Vinhos',
                                'description' => ''
                            ],
                            'us' => [
                                'name' => 'Wine',
                                'description' => ''
                            ],
                            'es' => [
                                'name' => 'Vinhos',
                                'description' => ''
                            ]
                        ]

                    ]
                ]
            ]
        ];

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
