<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
         
            'name'=>'admin',
            'email'=>'safiq@gmail.com',
            'password'=>bcrypt('123456'),
        ]);

    }
}
