<?php
//დამგირავებლის პირადი მონაცემების ცვლილება
$url = "https://api.pol.ge/api/test/branches/1/customers/1";

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
  "birthDate": "2021-02-01",
  "citizenship": "GEO",
  "customerId": "123",
  "customerMiaId":"123",
  "firstName": "levan",
  "itemList": [
    {
      "brand":"test",
      "serialNumber": "1234",
      "model": "test",
      "createDate": "2020-07-14",
      "currency": "GEL",
      "info": "test",
      "itemId": "123",
      "photos": [
        {
          "data": "R0lGODdhAQABAPAAAP8AAAAAACwAAAAAAQABAAACAkQBADs=",
          "name": "Kohinoor.jpeg"
        }
      ],
      "price": "123",
      "subType": "itemJewelry",
      "type": "itemTechnic"
    }
  ],
  "lastName": "javakhishvili",
  "personalNo": "01011085914",
  "phone": "555555555",
  "realAddress": "test address"
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

