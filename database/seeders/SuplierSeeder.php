<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('supliers')->insert([[
            'id' => '1',
            'namaSUP' => 'meliodas',
            'alamat' => 'Probolinggo'
        ],[
            'id' => '2',
            'namaSUP' => 'maimunah',
            'alamat' => 'mojokerto'
        ],[
            'id' => '3',
            'namaSUP' => 'sahara',
            'alamat' => 'Bali'
        ]]);
    }
    }

