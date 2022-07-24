<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Undang_undangController extends Controller
{
    public function index()
    {
        return view('informasi_publik.produk_hukum.undang_undang',[
            'title' => 'Undang - Undang'
        ]);
    }
}
