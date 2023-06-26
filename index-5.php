<?php

$ch = curl_init();

curl_setopt_array(
  $ch,
  [
    CURLOPT_URL => 'http://localhost/PHPcURL/index-4-agent.php',
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.59 Safari/537.36 115Browser/07012",
  ]
);

curl_exec($ch);
curl_close($ch);
