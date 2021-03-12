<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class SuplierController extends Controller
{
    public function index(){
        return view('suplier', ['suplier' => suplier::suplier()]);
    }
}
