<?php
//Source Code Transfer
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.php.net');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$source = curl_exec($ch);
echo $source;
curl_close($ch);
