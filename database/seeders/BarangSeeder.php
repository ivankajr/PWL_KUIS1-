<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('barang')->insert([[
            'id' => '1',
            'namabrg' => 'Pensil',
        ],[
            'id' => '2',
            'namabrg' => 'Penghapus',
        ],[
            'id' => '3',
            'namabrg' => 'Penggaris',
        ],[
            'id' => '4',
            'namabrg' => 'Sandal',
        ]]);
    }
}
