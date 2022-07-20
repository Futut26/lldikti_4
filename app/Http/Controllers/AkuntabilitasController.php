<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkuntabilitasController extends Controller
{
    public function index()
    {
        return view('akuntabilitas', [
            'title' => 'Akuntabilitas',
            'banner' => 'Akuntabilitas'
        ]);
    }
}
