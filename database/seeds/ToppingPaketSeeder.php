<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\ToppingPaket;

class ToppingPaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ToppingPaket::create([
            'name'  =>  'telepon 100 menit',
            'desc'  =>  'pelanggan mendapat bonus telepon rumah selama 100 menit',
            'harga' =>  25000
        ]);
        ToppingPaket::create([
            'name'  =>  '25 chanel tv',
            'desc'  =>  'pelanggan mendapat bonus 25 chanel tv',
            'harga' =>  50000
        ]);
        ToppingPaket::create([
            'name'  =>  '50 chanel tv',
            'desc'  =>  'pelanggan mendapat bonus 50 chanel tv',
            'harga' =>  100000
        ]);
    }
}
