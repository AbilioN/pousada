<?php

use Illuminate\Database\Seeder;

class ServicesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'serviceSector'=> 'Atendente de Hospedagem',
             
                
            ],
            [
                'serviceSector'=> 'Pousada Driver',
             
            ],
            [
                'serviceSector'=> 'Guia Turistico',
             
            ],
            [
                'serviceSector'=> 'Bem estar',
             
            ]
        ]);

       
    }
}
