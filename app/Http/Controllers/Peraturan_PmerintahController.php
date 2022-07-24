<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Peraturan_PmerintahController extends Controller
{
    public function index() {
        return view('informasi_publik.produk_hukum.peraturan_pemerintah',[
            'title' => 'Peraturan Pmerintah',
        ]);
    }
}
