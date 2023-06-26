<?php

//GET with cURL
$get = "http://localhost/PHPcURL/index-8-get.php?search=example";
$ch = curl_init($get);


curl_exec($ch);
curl_close($ch);
