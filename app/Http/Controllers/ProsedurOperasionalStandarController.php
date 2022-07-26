<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsedurOperasionalStandarController extends Controller
{
    public function index()
    {
        return view('informasi_publik.prosedur_operasional_standar', [
            'title' => 'Prosedur Operasional Standar',
        ]);
    }
}
