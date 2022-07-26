<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Peraturan_MenteriController extends Controller
{
    public function index() {
        return view('informasi_publik.produk_hukum.peraturan_menteri',[
            'title' => 'Peraturan Menteri',
        ]);
    }
}
