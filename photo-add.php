<?php
///api/test/branches/{branchNo}/customers/{customerMiaId}/items/{itemMiaId}/files სურათის დამატება
$url = "https://api.pol.ge/api/test/branches/1/customers/1/items/1/files";

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
  "data": "R0lGODdhAQABAPAAAP8AAAAAACwAAAAAAQABAAACAkQBADs=",
  "name": "Kohinoor.jpeg"
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

