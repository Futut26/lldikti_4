<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukHukumController extends Controller
{
    public function index(){
        return view('informasi_publik.produk_hukum.index',[
            'title' =>'Produk Hukum'
        ]);
    }
}
