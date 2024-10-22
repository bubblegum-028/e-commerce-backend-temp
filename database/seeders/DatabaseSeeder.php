<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the ProductSeeder
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
