<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->run(AddressTableSeeder::class);
        $this->run(BuildingTableSeeder::class);
        $this->run(ParcelTableSeeder::class);
        $this->run(TenantsTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
