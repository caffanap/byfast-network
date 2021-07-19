<?php

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\KategoriPaketSeeder;
use Database\Seeders\PaketSeeder;
use Database\Seeders\ToppingPaketSeeder;
use Database\Seeders\AboutUsSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            KategoriPaketSeeder::class,
            PaketSeeder::class,
            ToppingPaketSeeder::class,
            AboutUsSeeder::class,
        ]);
    }
}
