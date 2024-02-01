<?php
session_start();
$id = $_SESSION['userID'];

if (!isset($id)) {
  header('location: http://localhost/Reserva360/Login/PHP/login.php');
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
  <div id="profileWithNav">
    <button id="button" type="button" onclick="location.href='http://localhost/Reserva360/Login/phpHandlers/dbh.logout.php'">Sign out</button>
    <div id="profilePosition">
      <div id="profile">
        <p class="name"><?php echo $_SESSION['username'] ?><br />User</p>
        <?php
        $sql1 = "SELECT image FROM users WHERE userID = '$id';";
        $result1 = mysqli_query($conn, $sql1);
        $resultCheck1 = mysqli_num_rows($result1);
        if ($resultCheck1 > 0) {
          while ($row = mysqli_fetch_assoc($result1)) {
        ?>
            <img id="image" src="../images/<?php echo $row['image']; ?>">
        <?php }
        } ?>
      </div>
    </div>
    <div id="behindBox">
      <div id="nav">
        <button type="button"><a href="#">Profile Details</a></button>
        <button type="button"><a href="#">Wallet</a></button>
        <button type="button"><a href="#">Settings</a></button>
      </div>
    </div>
  </div>
</body>

</html>