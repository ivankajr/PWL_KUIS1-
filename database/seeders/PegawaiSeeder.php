<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('pegawais')->insert([[
            'id' => '1',
            'namaPGW' => 'rico'
            'alamat' => 'malang'
            'noTLP' => '088768'
        ],[
            'id' => '2',
            'namaPGW' => 'rina'
            'alamat' => 'malang'
            'noTLP' => '088769'
        ],[
            'id' => '3',
            'namaPGW' => 'rani'
            'alamat' => 'surabaya'
            'noTLP' => '088778'
        ],[
            'id' => '4',
            'namaPGW' => 'rois'
            'alamat' => 'malang'
            'noTLP' => '089768'
        ]]);
    }
    }
}
