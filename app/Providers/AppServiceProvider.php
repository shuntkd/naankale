<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
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
                    $code_s[$array_s["garea_small"][$i]["areacode_s"]] =$array_s["garea_small"][$i]["areaname_s"];
                    $code[] = $array_s["garea_small"][$i]["areaname_s"];
                }
        
                for($i=0; $i<count($array_m["garea_middle"]);$i++){
                    $code_m[$array_m["garea_middle"][$i]["areacode_m"]] =$array_m["garea_middle"][$i]["areaname_m"];
                    $code[]= $array_m["garea_middle"][$i]["areaname_m"];
                }
        
                $area_list = json_encode($code);
            
                config(['area_list' => $area_list,'code_s' => $code_s,'code_m' => $code_m]);
    }
}
