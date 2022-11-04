<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class createUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
                'name' => 'isUser',
                'username' => 'isUser',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345'),
                'roles_id' => 2
            ],
            [
                'name' => 'isAdmin',
                'username' => 'isAdmin',
                'email' => 'user@mail.com',
                'password' => bcrypt('12345'),
                'roles_id' => 1
            ]
            ];
            foreach ($user as $key => $value){
                User::create($value);
            }
    }
}
