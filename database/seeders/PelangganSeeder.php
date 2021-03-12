<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        public function run()
    {
        db::table('pelanggans')->insert([[
            'id' => '1',
            'nmpelanggan' => 'Windah Basudarah',
            'alamat' => 'Probolinggo'
        ],[
            'id' => '2',
            'nmpelanggan' => 'Siti Marfuah',
            'alamat' => 'Jakarta'
        ],[
            'id' => '3',
            'nmpelanggan' => 'Fila Del Fia',
            'alamat' => 'Bali'
        ]]);
    }
}
