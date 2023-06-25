<?php
// echo "<pre>";
// print_r($_SERVER);

if (!isset($_SERVER['HTTP_REFERER'])) {
  echo "Sorry, I don't know you";
} else {
  echo "You come from here : " . $_SERVER['HTTP_REFERER'];
}
