<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'guruid' => 'required | max:50',
            'body' => 'required|max:2000',
            'uer_id'=>'required | max:1000',
        ]);

        $shop = Shop::firstOrCreate(['guruid'=>$params['guruid']]);
        $shop->comments()->create($params);

        return redirect()->route('shop', ['shop' => $shop]);
    }
}
