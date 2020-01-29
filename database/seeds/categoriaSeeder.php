<?php

use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            [
                'setor_id' => 1,
                'categoria' => 'atendente',

            ],
            [
                'setor_id' => 1,
                'categoria' => 'Pousada Driver',


            ],
            [
                'setor_id' => 1,
                'categoria' => 'Guia Turistico',


            ],
            [
                'setor_id' => 1,
                'categoria' => 'Bem estar',


            ],

            [
                'setor_id' => 2,
                'categoria' => 'Bicicletas',
            ],

            [
                'setor_id' => 2,
                'categoria' => 'Carros',
            ],

            [
                'setor_id' => 2,
                'categoria' => 'Veículos Marítimos',
            ],

            [
                'setor_id' => 2,
                'categoria' => 'Utilitários para camping',
            ],

            [
                'setor_id' => 3,
                'categoria' => 'Pratos prontos',
            ],

            [
                'setor_id' => 3,
                'categoria' => 'Massas',
            ],

            [
                'setor_id' => 3,
                'categoria' => 'Culinaria Nordestina',
            ],

            [
                'setor_id' => 3,
                'categoria' => 'Frutos do Mar',
            ],

            [
                'setor_id' => 3,
                'categoria' => 'Sobremesas',
            ],

            [
                'setor_id' => 4,
                'categoria' => 'Evento',
            ],
        ]);
    }
}
