<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>

  <?php if (isset($_SESSION['name'])) { ?>
    <h2>Your Account</h2><br>
    Your Welcoe <?php echo $_SESSION['name'] ?>
    <a href="logout.php">Logout</a>
  <?php } else { ?>
    <form action="operation.php" method="POST">
      Username <input type="text" name="name">
      Password <input type="text" name="password">
      <input type="submit" name="login">
    </form>

    <a href="curl.php">Bot Login</a>
  <?php } ?>


</body>

</html>