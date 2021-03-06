<?php

use Illuminate\Database\Seeder;
use App\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $producto = factory(Producto::class, 20);
        $producto -> create();
    }
}
