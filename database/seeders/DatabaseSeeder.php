<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'dev',
            'email' => 'dev@dev.com',
            'password' => bcrypt('dev')
        ]);

        $this->call([
            CardapioSeeder::class,
            BannerSeeder::class,
        ]);
    }
}
