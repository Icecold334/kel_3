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
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about.index', $data);
    }
}
