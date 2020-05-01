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
                'password' => Hash::make('user1234'),
                'name' => 'garantido',
                'rg' => '002497357',
                'cpf' => '10068673418',
                'phone' => '84996530353',
                'birthdate' => '04021992',
                'sex' => 'M',
                
            ]
        ]);
      

    }
}
