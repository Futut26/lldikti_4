<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index() {
        return view('informasi_publik.standar_pelayanan_publik',[
            'title' => 'Standar Pelayanan Publik'
        ]);
    }
}
