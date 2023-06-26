<?php
session_start();

if (isset($_POST['login'])) {
  if ($_POST['name'] == "example" && $_POST['password'] == "123456") {
    $_SESSION['name'] = $_POST['name'];
    Header("Location:index.php");
  } else {
    echo "Please check your informations";
    echo "<a href='index.php'> Back </a>";
  }
}
