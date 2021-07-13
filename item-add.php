<?php
///api/test/branches/{branchNo}/customers/{customerMiaId}/items არსებულ დამგირავებელზე დაგირავებული ნივთების დამატება
$url = "https://api.pol.ge/api/test/branches/1/customers/1/items";

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
"createDate": "1900-01-01",
"itemId": "0",
 "type": "itemTechnic",
"subType": "ქვეტიპი",
 "brand": "მწარმოებელი/ბრენდი",
 "model": "მოდელი",
 "serialNumber": "ინდივიდუალური კოდი/imei",
"price": "0.00",
"currency": "GEL",
"info": "დამატებითი ინფორმაცია",
"photos": [
{
"data": "R0lGODdhAQABAPAAAP8AAAAAACwAAAAAAQABAAACAkQBADs=",
"name": "photo name.jpg"
}
]
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

