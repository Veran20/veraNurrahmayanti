<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class createRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Admin',
            ],
            [
                'id' => 1,
                'name' => 'User',
            ]
            ];
            foreach ($roles as $kEY => $role){
                Role::create($role);
            }
    }
}
