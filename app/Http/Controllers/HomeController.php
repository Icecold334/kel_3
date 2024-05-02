<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('home.index', $data);
    }
    public function coba()
    {
        $data = [
            'title' => 'Coba'
        ];
        return view('coba/index');
    }
}
