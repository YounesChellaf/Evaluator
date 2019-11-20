<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $admin = User::create([
            'first_name' => 'Bilal',
            'last_name' => 'Ksentini',
            'email' => 'ksentini-admin@ferouja.dz',
            'password' => Hash::make('ferouja@2019@')
        ]);
        $admin->assignRole(Role::where('name','admin')->first());
    }
}
