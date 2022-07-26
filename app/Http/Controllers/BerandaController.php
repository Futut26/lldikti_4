<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index ()
    {
        return view('beranda',[
            'title' => 'Beranda',
            'infos' => Post::limit(3)->get()
        ]);
    }
}
