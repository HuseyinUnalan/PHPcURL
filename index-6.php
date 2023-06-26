<?php

$ch = curl_init('https://www.php.net');

curl_exec($ch);
curl_close($ch);
