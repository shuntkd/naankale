<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class ShopsController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'guruid' => 'required|max:50',
        ]);

        Post::create($params);

    }
}
