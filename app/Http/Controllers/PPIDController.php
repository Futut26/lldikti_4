<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPIDController extends Controller
{
    public function index()
    {
        return view('informasi_publik.ppid', [
            'title' => 'PPID',
        ]);
    }
}
