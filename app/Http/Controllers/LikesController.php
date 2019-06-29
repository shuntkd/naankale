<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;
use App\like;

class LikesController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'guruid' => 'required',
            'user_id'=>'required',
        ]);
        
        if(Shop::where(['guruid'=>$params['guruid']])->exists()){
            $shop = Shop::where(['guruid'=>$params['guruid']])->first();
        }else{
            Shop::Create(['guruid'=>$params['guruid']]);
            $shop = Shop::where(['guruid'=>$params['guruid']])->first();
        }

        Like::create(
            array(
                'user_id' => $params['user_id'],
                'shop_id' => $shop->id,
                'guruid' => $params['guruid']
            )
        );
        return redirect()->back();
    }

    public function destory(Request $request) {

        $params = $request->validate([
            'guruid' => 'required',
            'user_id'=>'required',
        ]);

        Like::findOrFail($params)->delete();
        

        return redirect()->back();
    }
}
