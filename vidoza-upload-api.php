<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.vidoza.net/v1/upload/url');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
  //API Token
    'Authorization: Bearer fB5T3IaHjtUXQNb3IH0Lm4epcRHnkAK',
    'cache-control: no-cache',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'cat_id' => '2',
    'fld_id' => '0',
  //Video url
    'url' => 'https://vidoza.net/nzkz5ru1gsg4.html',
]);

$response = curl_exec($ch);

curl_close($ch);
