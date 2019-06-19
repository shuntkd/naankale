<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'guruid' => 'required',
            'body' => 'required',
            'user_id'=>'required',
        ]);

        

        if(Shop::where(['guruid'=>$params['guruid']])->exists()){
            $shop = Shop::where(['guruid'=>$params['guruid']])->first();
        }else{
            Shop::Create(['guruid'=>$params['guruid']]);
            $shop = Shop::where(['guruid'=>$params['guruid']])->first();
        }
        $shop->comments()->create($params);

        return redirect()->route('shop', ['shop' => $shop]);
    }
}
