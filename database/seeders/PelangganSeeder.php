<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
        public function run()
    {
        db::table('pelanggan')->insert([[
            'id' => '1',
            'nmpelanggan' => 'Windah Basudarah',
            'alamat' => 'Probolinggo'
        ],[
            'id' => '2',
            'nmpelanggan' => 'Siti Marfuah',
            'alamat' => 'Probolinggo'
        ],[
            'id' => '3',
            'nmpelanggan' => 'Fila Del Fia',
            'alamat' => 'Probolinggo'
        ]]);
    }
}
