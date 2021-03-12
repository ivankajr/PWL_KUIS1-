<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;

class PelangganController extends Controller
{
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
