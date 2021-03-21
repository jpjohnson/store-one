<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // call seeders
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(OrderSeeder::class);
        // add fakes
        // \App\Models\User::factory(10)->create();        
        //\App\Models\Product::factory(1)->create();
    }
}
