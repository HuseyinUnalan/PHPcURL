<?php

//Start cURL
$ch = curl_init();

//cURL Define Options
curl_setopt($ch, CURLOPT_URL, 'https://www.php.net');

//Connecting to Sites with SSL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


//Running cURL
$source = curl_exec($ch);

//cURL Termination
curl_close($ch);
