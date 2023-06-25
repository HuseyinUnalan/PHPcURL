<?php
//Writing Source Code to .txt File

//File Creation
$file = fopen("kaynak.txt", "w");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.php.net');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FILE, $file);
if (curl_exec($ch)) {
  echo "Success";
}
curl_close($ch);
