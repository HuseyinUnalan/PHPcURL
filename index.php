<?php

//cURL Başlat
$ch = curl_init();

//cURL Seçenekleri Tanımla
curl_setopt($ch, CURLOPT_URL, 'https://www.php.net');

//SSS Olan Sitelere Bağlanma
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


//cURL Çalıştırma
$source = curl_exec($ch);

//cURL Sonlandırma
curl_close($ch);
