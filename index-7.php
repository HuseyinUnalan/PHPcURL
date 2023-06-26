<?php

//POST with cURL

$data = [
  "name" => "example",
  "password" => "123456"
];

// print_r($data);
// $exit;

$ch = curl_init('http://localhost/PHPcURL/index-7-post.php');

curl_setopt_array(
  $ch,
  [
    CURLOPT_POST => "true",
    CURLOPT_POSTFIELDS => $data
  ]
);

curl_exec($ch);
curl_close($ch);
