<?php

use Illuminate\Database\Seeder;

class quartoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('quartos')->insert([
            [
                'tipo' => 'Suite Casal',
                'quarto' => 101,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 102,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 103,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 104,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 201,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 202,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 203,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 204,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 301,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 302,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 303,
                'status' => true
            ],
            [
                'tipo' => 'Suite Casal',
                'quarto' => 304,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 401,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 402,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 403,
                'status' => true
            ],
            [
                'tipo' => 'Apartamento',
                'quarto' => 404,
                'status' => true
            ],
        ]);
    }
}
