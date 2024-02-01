<?php
session_start();
$id = $_SESSION['AdminID'];

if (!isset($id)) {
  header ('location: http://localhost/Reserva360/Login/PHP/login.php');
}
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
  </div>    
</body>

</html>