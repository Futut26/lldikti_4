<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuletinController extends Controller
{
    public function index()
    {
        return view('informasi_publik.buletin',[
            'title' => 'Buletin',
        ]);
    }
}
