<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index() {
        return view('informasi_publik.produk_hukum.spp',[
            'title' => ''
        ]);
    }
}
