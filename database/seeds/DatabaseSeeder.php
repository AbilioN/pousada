<?php

use App\Categoria;
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
        $this->call(UsersDataSeeder::class);
        $this->call(setorsSeeder::class);
        $this->call(categoriaSeeder::class);
        $this->call(produtoSeeder::class);
        $this->call(quartoSeeder::class);
    }
}
