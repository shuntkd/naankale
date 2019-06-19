<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop;

class ShopController extends Controller
{
    public function index( Request $request )
    {
        $freeword = $request->freeword;
        $shop_data = $request->shop_content;
        if($shop_data['image_url']['shop_image1']){
            $img = $shop_data['image_url']['shop_image1'];
        }elseif($shop_data['image_url']['shop_image2']){
            $img = $shop_data['image_url']['shop_image2'];
        }else{
            $img = asset('img/result/noImage.png');
        }
        return view('shop',[
            'freeword' =>$freeword,
            'guruid' =>$shop_data['id'],
            'shopname'=>$shop_data['name'],
            'chiiki'=>$shop_data['code']['prefname'],
            'gurunabi'=>$shop_data['url'],
            'img'=>$img
            ]);
    }
}
