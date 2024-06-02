<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //RUN: php artisan db:seed --class=CreateUserSeeder

    //CREATE Area of Assignment Data first
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('@admin123'),
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
