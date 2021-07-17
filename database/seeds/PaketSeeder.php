<?php

use App\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            'kategori_pakets_id'    =>  1,
            'name'                  =>  'Paket Internet 10 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 10 Mbps',
            'img'                   =>  '/public/paket/1.jpg',
            'harga'                 =>  180000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  1,
            'name'                  =>  'Paket Internet 20 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 20 Mbps',
            'img'                   =>  '/public/paket/2.jpg',
            'harga'                 =>  275000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  2,
            'name'                  =>  'Paket Internet 30 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 30 Mbps',
            'img'                   =>  '/public/paket/3.jpg',
            'harga'                 =>  315000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  2,
            'name'                  =>  'Paket Internet 40 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 40 Mbps',
            'img'                   =>  '/public/paket/4.jpg',
            'harga'                 =>  350000,
        ]);
    }
}
