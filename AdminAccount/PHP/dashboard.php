<?php
include "../phpHandlers/dbh.config.php";

$sql1 = "SELECT * FROM reserveRoom;";
$result1 = mysqli_query($conn, $sql1);
$noHotels = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM contactus;";
$result2 = mysqli_query($conn, $sql2);
$noQuestions = mysqli_num_rows($result2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/dashboard.css" />
  <title>Dashboard</title>

</head>

<body>
  <div id="profileWithNav">
    <button id="button" type="button" onclick="location.href='http://localhost/Reserva360/Login/phpHandlers/dbh.logout.php'">Sign out</button>
    <div id="profilePosition">
      <div id="profile">
        <p class="name">Ethen<br />Administrator</p>
        <img src="../images/Profile.png" />
      </div>
    </div>
    <div id="behindBox">
      <ul id="nav">
        <li>
          <a href="./overview.php" class="active">Dashboard</a>
        </li>
        <li>
          <a href="./bookings.php">Bookings</a>
        </li>
        <li>
          <a href="#">Resources</a>
        </li>
        <li>
          <a href="#">Settings</a>
        </li>
      </ul>
    </div>
  </div>
</body>
<div id="product">
  <div class="product-box">
    <div class="product-item"><img src="../images/Hotels.jpg">
      <div class="overlay"></div>
      <div class="product-desc">
        <p><?php echo "$noHotels "; ?>rooms Reserved</p>

      </div>
      <span>
        <h4 class="reservations">Rooms reserved</h4>
      </span>
    </div>
  </div>
  <div class="product-box">
    <div class="product-item"><img src="../images/QnA.jpg">
      <div class="overlay"></div>
      <div class="product-desc">
        <p><?php echo "$noQuestions "; ?>questions asked</p>

      </div>
      <span>
        <h4 class="reservations">Questions asked</h4>
      </span>
    </div>
  </div>
</div>
</body>

</html>