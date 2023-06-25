<?php
//REFERER

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/PHPcURL/index-3-referer.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($ch, CURLOPT_REFERER, 'http://www.udemy.com');

curl_exec($ch);
curl_close($ch);
?>
