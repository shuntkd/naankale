<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ResultController extends Controller
{
    public function index()
    {
        //return view('result');
    }

    public function search_shop(Request $request){
        $code_s=config('code_s');
        $code_m=config('code_m');
        $freeword = $request->freeword;
        
        if(array_keys($code_m,$freeword)){
            $area_code=array_keys($code_m,$freeword);
            $area_request = 'areacode_m';
        }elseif(array_keys($code_s,$freeword)){
            $area_code=array_keys($code_s,$freeword);
            $area_request = 'areacode_s';
        }

        //検索結果取得
        

        $client = new Client();
        $result = $client->request('GET', 'https://api.gnavi.co.jp/RestSearchAPI/v3/',[
            'query' => [
                'keyid' => '2fec3133982fe68d86c709c6594f120c',
                'category_s'=> 'RSFST16001',
                $area_request => $area_code[0],
            ],
            ['http_errors' => false]
        ]);
        $json_result=$result->getBody(); 
        $array_result = json_decode($json_result,true);
        return view('result',['array_result' => $array_result,'freeword'=>$freeword]);

}
}
