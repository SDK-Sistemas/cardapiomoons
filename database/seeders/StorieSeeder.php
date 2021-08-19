<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Storie;
use Illuminate\Database\Seeder;

class StorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storie::factory()
            ->times(5)
            ->for(Image::factory()->forStorie())
            ->hasTranslations(3)
            ->create();
    }
}
