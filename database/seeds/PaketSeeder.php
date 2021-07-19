<?php

namespace Database\Seeders;

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
            'harga'                 =>  180000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  1,
            'name'                  =>  'Paket Internet 20 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 20 Mbps',
            'harga'                 =>  275000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  1,
            'name'                  =>  'Paket Internet 1 Gbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 1 Gbps',
            'harga'                 =>  950000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  2,
            'name'                  =>  'Paket Internet 30 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 30 Mbps',
            'harga'                 =>  315000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  2,
            'name'                  =>  'Paket Internet 40 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 40 Mbps',
            'harga'                 =>  350000,
        ]);
        Paket::create([
            'kategori_pakets_id'    =>  2,
            'name'                  =>  'Paket Internet 50 Mbps',
            'desc'                  =>  'Paket internet dengan kecepatan internet up to 50 Mbps',
            'harga'                 =>  485000,
        ]);
    }
}
