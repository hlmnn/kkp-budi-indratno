<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index', [
            'title' => 'KKP Budi Indratno',
        ]);
    }
}
