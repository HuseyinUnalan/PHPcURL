<?php
session_start();
// session_destroy();
unset($_SESSION['name']);
Header("Location:index.php");
exit;
