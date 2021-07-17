<?php

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
            'name'  =>  'terbaru',
            'desc'  =>  'paket ini adalah paket terbaru'
        ]);

        KategoriPaket::create([
            'name'  =>  'terpopuler',
            'desc'  =>  'paket ini adalah paket terpopuler'
        ]);
    }
}
