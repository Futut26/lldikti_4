<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuPanduanPedomanController extends Controller
{
    public function index()
    {
        return view('informasi_publik.buku_panduan_pedoman', [
            'title' => 'Buku Panduan / Pedoman',
        ]);
    }
}
