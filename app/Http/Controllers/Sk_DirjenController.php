<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sk_DirjenController extends Controller
{
    public function index()
    {
        return view('informasi_publik.produk_hukum.sk_dirjen',[
            'title' => 'SK Dirjen',
        ]);
    }
}
