<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user=Role::where('name', 'user')->first();
        $role_admin=Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'nico';
        $user->email = 'nico_mosi@hotmail.com';
        $user->password = bcrypt('e93187344');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
