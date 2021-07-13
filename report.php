<?php
///api/test/branches/{branchNo}/report/summary ეს მეთოდი ინახავს ფილიალში მითითებულ დღეს დაგირავებული ნივთების რაოდენობას
$url = "https://api.pol.ge/api/test/branches/1/report/summary";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Basic NDAyMTE5MDA2OlNodmlkaTc3Nw==",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "itemJewelryCount": 1,
  "itemTechnicCount": 0,
  "reportDate": "2020-07-14"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

