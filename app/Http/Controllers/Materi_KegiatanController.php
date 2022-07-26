<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materi_KegiatanController extends Controller
{
    public function index()
    {
        return view('informasi_publik.materi_kegiatan',[
            'title' => 'Materi Kegiatan',
        ]);
    }
}
