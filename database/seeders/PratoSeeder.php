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
        Prato::factory()
            ->times(5)
            ->has(Image::factory()->count(3)->forPrato())
            ->for(Categoria::factory())
            ->hasTranslations(3)
            ->create();
    }
}
