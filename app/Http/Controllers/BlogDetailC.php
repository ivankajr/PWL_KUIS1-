<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogDetailC extends Controller
{
    public function index()
    {
        return view('blog-detail');
    }
}
