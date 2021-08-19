<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::factory()
            ->times(6)
            ->for(Image::factory()->forCategoria())
            ->hasTranslations(3)
            ->create();
    }
}
