<?php
require_once 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$smallarea = $client->request('GET', 'https://api.gnavi.co.jp/master/GAreaSmallSearchAPI/v3/?keyid=2fec3133982fe68d86c709c6594f120c');

$middlearea = $client->request('GET','https://api.gnavi.co.jp/master/GAreaMiddleSearchAPI/v3/?keyid=2fec3133982fe68d86c709c6594f120c');



$json_s=$smallarea->getBody(); 
$json_m=$middlearea->getBody(); 
$array_s = json_decode($json_s,true);
$array_m = json_decode($json_m,true);
$code = [];
for($i=0; $i<count($array_s[garea_small]);$i++){
 $code[$array_s[garea_small][$i][areacode_s]] =$array_s[garea_small][$i][areaname_s];}
for($i=0; $i<count($array_m[garea_middle]);$i++){
 $code[$array_m[garea_middle][$i][areacode_m]] =$array_m[garea_middle][$i][areaname_m];}
echo json_encode($code,JSON_UNESCAPED_UNICODE) . PHP_EOL;
