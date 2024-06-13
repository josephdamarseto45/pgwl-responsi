<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends seeder
{
public function run(): void
    {
        //create multiple users
        $user = [
            [
                'name' => 'Admin',
                'phone' => '085641173516',
                'email' => 'joseph@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Admin',
                'phone' => '085641173515',
                'email' => 'damar@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Admin3',
                'phone' => '085641173514',
                'email' => 'seto@gmail.com',
                'password' => bcrypt('1234'),
            ],
        ];

        //insert the user into the database
        DB::table('users')->insert($user);

    }
}

    //     //Create a new user
    //     $user = new \App\Models\User();
    //     $user->name = 'Admin';
    //     $user->phone = '08123456789';
    //     $user->email = 'admin@gmail.com';
    //     $user->password = bcrypt('admin');
    //     $user->save();
    // }

