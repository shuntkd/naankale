<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Sエリアデータ取得
        $client = new Client();
        $smallarea = $client->request('GET', 'https://api.gnavi.co.jp/master/GAreaSmallSearchAPI/v3/?keyid=2fec3133982fe68d86c709c6594f120c');
        $json_s=$smallarea->getBody(); 
        $array_s = json_decode($json_s,true);
        //Mエリアデータ取得
        $middlearea = $client->request('GET','https://api.gnavi.co.jp/master/GAreaMiddleSearchAPI/v3/?keyid=2fec3133982fe68d86c709c6594f120c');
        $json_m=$middlearea->getBody();
        $array_m = json_decode($json_m,true);
        
        //$code = [];

        for($i=0; $i<count($array_s["garea_small"]);$i++){
            $code[$array_s["garea_small"][$i]["areacode_s"]] =$array_s["garea_small"][$i]["areaname_s"];
        }

        for($i=0; $i<count($array_m["garea_middle"]);$i++){
            $code[$array_m["garea_middle"][$i]["areacode_m"]] =$array_m["garea_middle"][$i]["areaname_m"];
        }

        $area_list = json_encode($code);
                
        return view('home',['area_list' => $area_list]);
    }
}
