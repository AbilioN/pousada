<?php

use Illuminate\Database\Seeder;

class setorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setors')->insert([
            [
                'setor'=> 'Servicos',
             
                
            ],
            [
                'setor'=> 'Alugueis',
             
            ],
            [
                'setor'=> 'Cozinha',
             
            ],
            [
                'setor'=> 'Eventos',
             
            ]

        ]);
    }
}
