<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananOnlineController extends Controller
{
    public function index()
    {
        return view('layanan.layananOnline', [
            'title' => 'Layanan Online',
            'banner' => 'Layanan Online'
        ]);
    }
}
