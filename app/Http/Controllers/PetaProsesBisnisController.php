<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaProsesBisnisController extends Controller
{
    public function index()
    {
        return view('informasi_publik.peta_proses_bisnis', [
            'title' => 'Peta Proses Bisnis LLDIKTI Wilayah IV',
        ]);
    }
}
