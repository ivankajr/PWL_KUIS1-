<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
class PegawaiController extends Controller
{
    public function index(){
        return view('pegawai', ['pegawai' => pegawai::pegawai()]);
    }
}
