<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NopageController extends Controller
{
    public function index()
    {
        return view('nopage');
    }
}
