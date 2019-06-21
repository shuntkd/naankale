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

    public function index( Request $request )
    {
        $freeword = $request->freeword;

        $shop_data = $request->shop_content;

        if(Shop::where(['guruid'=>$request->shop_content['id']])->exists()){
            $shop=Shop::where(['guruid'=>$request->shop_content['id']])->first();
            $comments =$shop->comments()->paginate(3);
        }else{
            $comments ='';
        }
        
        
        
        if($shop_data['image_url']['shop_image1']){
            $img = $shop_data['image_url']['shop_image1'];
        }elseif($shop_data['image_url']['shop_image2']){
            $img = $shop_data['image_url']['shop_image2'];
        }else{
            $img = asset('img/result/noImage.png');
        }
        

        return view('shop',[
            'freeword' =>$freeword,
            'comments'=>$comments,
            'guruid' =>$shop_data['id'],
            'shopname'=>$shop_data['name'],
            'chiiki'=>$shop_data['code']['prefname'],
            'gurunabi'=>$shop_data['url'],
            'img'=>$img
        ]);
        
    }
}
