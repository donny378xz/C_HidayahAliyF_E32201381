<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //memasukan data user
        User::insert([
            'name' => 'hidayah',
            'email' => 'doonay@gmail.com',
            'password' => bcrypt(25101973),
        ]);    	
    }
}
