<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Skills extends Controller
{
    public function index()
    {
        return view('about', [
            'aboutData' => 'TroubleShotting, Web development'
        ]);
    }
}
