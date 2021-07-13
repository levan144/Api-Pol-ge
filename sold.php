<?php
///api/test/branches/{branchNo}/customers/{customerMiaId}/items/{itemMiaId}/state/sold  ინფორმაციის მოწოდება ნივთის გასხვისების შესახებ
$url = "https://api.pol.ge/api/test/branches/1/customers/1/items/1/state/sold";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_PUT, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Authorization: Basic NDAyMTE5MDA2OlNodmlkaTc3Nw==",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
 "customerPersonalNo": "00000000000",
"customerFirstName": "სახელი",
"customerLastName": "გვარი",
"citizenship": "GEO",
"customerBirthDate": "1900-01-01",
"customerRealAddress": "ფაქტობრივი მისამართი",
"customerMobile": "500000000"
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

