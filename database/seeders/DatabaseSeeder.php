<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GalerySeeder;
use Database\Seeders\SantriSeeder;
use Database\Seeders\PengajarSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SantriSeeder::class,
            PengajarSeeder::class,
            GalerySeeder::class,
        ]);
    }
}