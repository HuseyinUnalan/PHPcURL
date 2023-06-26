<?php

$ch = curl_init();

curl_setopt_array(
  $ch,
  [
    CURLOPT_URL => 'https://github.com/HuseyinUnalan',
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => 1,
  ]
);

$veri = curl_exec($ch);
curl_close($ch);

// echo $veri;

//REGEX

preg_match_all('@<title>(.*?)</title>@', $veri, $sonuc);

print_r($sonuc);
