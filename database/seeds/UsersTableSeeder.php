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
        factory(\App\User::class,1)->states('admin')->create([
            'email' => 'admin@user.com',
            'cpf' => '05157660383',
            'phone' => '86995442268'
        ]);
        factory(\App\User::class,1)->states('user')->create([
            'email' => 'user@user.com'
        ]);
        factory(\App\User::class,3)->states('user');

    }
}
