<?php

namespace Database\Seeders;

use App\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'desc1' => 'ByFast Net siap membantu bisnis digital Anda',
            'desc2' => 'Solusi komunikasi maya yang selalu tersedia untuk anda. Karena kepuasan pelanggan adalah prioritas kami.',
            'desc3' => 'Internet super cepat up to 1Gbps',
            'desc4' => 'Telepon dan TV Kabel dengan lebih dari 1000 channel ',
            'desc5' => 'Layanan cloud storage yang dapat diakses darimana saja',
        ]);
    }
}
