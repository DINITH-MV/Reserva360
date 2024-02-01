<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/Header.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Header</title>
</head>

<body>
  <div id="bannerBox1">
    <p class="logoText"><a href="http://localhost/Reserva360/Hotel/PHP/Hotel.php">Reservar <span>360 </a><i class="fa fa-light fa-location-arrow fa-shake"></i></span></p>
    <div class="twoButtons">
      <?php if (isset($_SESSION['username'])) {?>
        <button type="button" onclick="location.href='http://localhost/Reserva360/UserAccount/PHP/displayUser.php'">Profile</button>
        <button type="button" onclick="location.href='http://localhost/Reserva360/Login/phpHandlers/dbh.logout.php'">Sign out</button>
      <?php } else { ?>
        <button type="button" onclick="location.href='http://localhost/Reserva360/Login/PHP/create_one.php'">Sign Up</button>
        <button type="button" onclick="location.href='http://localhost/Reserva360/Login/PHP/login.php'">Sign in</button>
      <?php } ?>
    </div>
  </div>
</body>

</html>