<?php
include "../phpHandlers/dbh.config.php";
include "../phpHandlers/dbh.FlightsSearch.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/Flights.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Flights</title>
</head>

<body>

  <?php
  include "Header.php";
  ?>

  <section id="Flights">

    <form action="Flights.php" method="post">

      <div id="backBoxPosition">
        <div class="backBox">
          <div class="navBar">
            <nav>
              <a href="http://localhost/Reserva360/Explore/PHP/index.php">Explore</a>
              <a href="http://localhost/Reserva360/Flights/PHP/Flights.php">Flights</a>
              <a href="http://localhost/Reserva360/Hotel/PHP/Hotel.php">Hotels</a>
              <a href="http://localhost/Reserva360/ThingsToDo/PHP/ThingsToDo.php">Things to do</a>
              <a href="http://localhost/Reserva360/Deals/PHP/Deals.php">Deals</a>
              <div class="animation start-flights"></div>
            </nav>
          </div>
          <div id="locationDateAll">
            <div id="discntText">
              <p class="text2">Where do you want to go</p>
              <p class="text1">Search Flights anywhere in the world</p>
            </div>
            <div class="locationBox1">
              <div class="location">
                <i id="planeDep" class="fa fa-thin fa-plane"></i>
                <input type="text" name="valueToSearch1" for="location" class="locationBorder" placeholder="Leaving from" />
              </div>
            </div>
            <div id="swapIcon"><i class="fa fa-solid fa-right-left"></i></div>
            <div class="locationBox2">
              <div class="location">
                <i id="planeArr" class="fa fa-thin fa-plane"></i>
                <input type="text" name="valueToSearch2" for="location" class="locationBorder" placeholder="Leaving to" />
              </div>
            </div>

            <?php
            include "calBox.php"
            ?>

          </div>
          <div class="searchValue">
            <input type="submit" name="search" value="search" class="search" />
          </div>
        </div>
      </div>

    </form>
    <div id="tableBox">
      <table>
        <!-- populate table from mysql database -->
        <?php while ($row = mysqli_fetch_array($search_result)) : ?>
          <form method="post" action="Flights.php?action=add1&ID=<?php echo $row['ID']; ?>">
            <tr>
              <td><img src="../images/<?php echo $row['image']; ?>"><br />
              </td>
              <td class="hName">
                <center><?php echo $row['airline']; ?></center><br />
              </td>
              <td class="rateS">
                <div id="icons">
                  <i id="planeDep1" class="fa fa-thin fa-plane"></i><br /><br />
                  <i id="planeArr1" class="fa fa-thin fa-plane"></i>
                </div>
                <div class="DandA">
                  <p><?php echo " " . $row['departure']; ?></p><br /><br />
                  <p><?php echo " " . $row['arrival']; ?></p><br />
                </div>

              </td>
              <td class="hName">
                <p><?php echo $row['depTime']; ?><br /><br /><br />
                  <?php echo $row['arrTime']; ?></p>
              </td>
              <td class="hName">
                <?php echo $row['price']; ?><br /><br /><br />
                <?php if (isset($_SESSION['userID'])) { ?>
                  <button class="button2"><a type="submit" href="http://localhost/Reserva360/Reservations/ReserveHotel.php?fid=<?php echo $row['ID']; ?>">Reserve Hotel</a></button>
                <?php } else { ?>
                  <button class="button2"><a type="submit" href="http://localhost/Reserva360/Login/PHP/login.php">Login to Reserve</a></button>
                <?php } ?>
              </td>
            </tr>
          </form>
        <?php endwhile; ?>
      </table>
    </div>
  </section>

  <?php
  include "Footer.php";
  ?>

</body>

</html>