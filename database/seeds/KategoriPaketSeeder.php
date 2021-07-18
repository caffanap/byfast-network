<?php

namespace Database\Seeders;

use App\KategoriPaket;
use Illuminate\Database\Seeder;

class KategoriPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriPaket::create([
            'name'  =>  'Terbaru',
            'desc'  =>  'Paket ini adalah paket terbaru'
        ]);

        KategoriPaket::create([
            'name'  =>  'Terpopuler',
            'desc'  =>  'Paket ini adalah paket terpopuler'
        ]);
    }
}
