<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Like;



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
        $randomLikes = Like::inRandomOrder()->select('guruid')->take(4)->get(); 
        $client = new Client();
        $result = $client->request('GET', 'https://api.gnavi.co.jp/RestSearchAPI/v3/?keyid=2fec3133982fe68d86c709c6594f120c&id='.$randomLikes[0]['guruid'].','.$randomLikes[1]['guruid'].','.$randomLikes[2]['guruid'].','.$randomLikes[3]['guruid'],
            ['http_errors' => false]
        );
        $json_result=$result->getBody(); 
        $array_likes = json_decode($json_result,true);
        return view('home',['array_likes' => $array_likes]);

    }


}
