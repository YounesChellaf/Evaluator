<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' =>'admin',
                'guard_name' => 'web'
            ],
            [
                'name' =>'school-admin',
                'guard_name' => 'web'
            ],
            [
                'name' =>'prof',
                'guard_name' => 'web'
            ],
            [
                'name' =>'tutel',
                'guard_name' => 'web'
            ]

        ]);
    }
}
