<?php

$ch = curl_init();

curl_setopt_array(
  $ch,
  [
    CURLOPT_URL => 'http://localhost/PHPcURL/login/operation.php',
    CURLOPT_POST => TRUE,
    CURLOPT_POSTFIELDS =>
    [
      "name" => "example",
      "password" => "123456",
      "login" => 1
    ],
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_COOKIEJAR => "cookies.txt",
  ]
);

curl_exec($ch);
curl_close($ch);
