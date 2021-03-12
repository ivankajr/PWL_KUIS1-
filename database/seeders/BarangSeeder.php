<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'Nmbarang' => 'Pensil'
        ],[
            'id' => '2',
            'Nmbarang' => 'Penghapus'
        ],[
            'id' => '3',
            'Nmbarang' => 'Penggaris'
        ],[
            'id' => '4',
            'Nmbarang' => 'Spidol'
        ]]);
    }
}
