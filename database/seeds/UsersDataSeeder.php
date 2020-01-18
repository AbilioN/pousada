<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email'=> 'usuario@gmail.com',
                'password' => Hash::make('user123'),
                
            ]
        ]);
        DB::table('users_data')->insert([
            [
                'user_id'=> 1,
                'nome' => 'garantido',
                'rg' => '002497357',
                'cpf' => '10068673418',
                'telefone' => '84996530353',
                'sexo' => 'M',
                'data_nascimento' => '1992-02-04',

            ],
        ]);

    }
}
