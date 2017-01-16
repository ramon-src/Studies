<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Joao do Teste',
            'email' => 'teste@gmail.com',
            'password' => bcrypt('123456'),
        ], [
            'name' => 'Joao do Teste2',
            'email' => 'teste2@gmail.com',
            'password' => bcrypt('123456'),
        ]]);
    }
}
