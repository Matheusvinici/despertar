<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'name'=> 'Admin',
            'email'=> 'teste@gmail.com',
            'cpf'=> '103.456.964-92',

            'ativo' => 1,
            'admin' => 1,
            'password' => bcrypt('123123'),
        ]);
    }
}
