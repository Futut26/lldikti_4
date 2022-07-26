<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanLayananController extends Controller
{
    public function index()
    {
        return view('layanan.pengajuanLayanan', [
            'title' => 'Cara Pengajuan Layanan',
            'banner' => 'Cara Pengajuan Layanan'
        ]);
    }
}
