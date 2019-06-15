<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index( Request $request )
    {
        $freeword = $request->freeword;
        $shop = $request->shop_content;
        if($shop['image_url']['shop_image1']){
            $img = $shop['image_url']['shop_image1'];
        }elseif($shop['image_url']['shop_image2']){
            $img = $shop['image_url']['shop_image2'];
        }else{
            $img = asset('img/result/noImage.png');
        }
        return view('shop',[
            'freeword' =>$freeword,
            'shopname'=>$shop['name'],
            'chiiki'=>$shop['code']['prefname'],
            'gurunabi'=>$shop['url'],
            'img'=>$img
            ]);
    }
}
