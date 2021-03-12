<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;

class PelangganController extends Controller
{
    public function index(){
        return view('pelanggan', ['pelanggan' => pelanggan::pelanggan()]);
    }
}
