<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelanggan;

class PelangganController extends Controller
{
    public function index(){
        return view('pelanggan', ['pelanggan' => pelanggan::pelanggan()]);
    }
}
