<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratEdaranController extends Controller
{   public function index()
    {
        return view('informasi_publik.produk_hukum.surat_edaran',[
            'title' => 'Surat Edaran',
        ]);
    }
}
