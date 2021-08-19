<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Prato;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class PratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Categoria::all() as $categoria) {
            Prato::factory()
                ->times(3)
                ->has(Image::factory()->count(3)->forPrato())
                ->hasTranslations(3)
                ->create([
                    'categoria_id' => $categoria->id
                ]);
        }
    }
}
