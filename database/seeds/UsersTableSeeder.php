<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pedro Henrique',
            'email' => 'pedro@hotmail.com',
            'password' => bcrypt('123456'),
            'cpf' => '48100938830',
            'id_empresa' => '1',
            'id_nivel_usuario' => '1',
            'telefone' => '123456789',
            'imagem' => 'img/gim'
        ]);
    }
}
