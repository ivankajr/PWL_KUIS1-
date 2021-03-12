<?php

namespace App\Http\Controllers;

use App\Model\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang');
    }
}
