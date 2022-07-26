<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Agenda_KamiController extends Controller
{
    public function index()
    {
        return view('informasi_publik.agenda_kami',[
            'title' => "Agenda Kegiatan",
        ]);
    }
}
