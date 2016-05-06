<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index', [
            'nama' => 'Rizki Mufrizal'
        ]);
    }
}
