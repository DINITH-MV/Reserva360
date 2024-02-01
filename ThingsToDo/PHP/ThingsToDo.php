<?php
include "../phpHandlers/dbh.config.php";
include "../phpHandlers/dbh.eventsSearch.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/ThingsToDo.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Things To Do</title>
</head>

<body>

  <?php
  include "Header.php";
  ?>

  <section id="Things to do">

    <form action="ThingsToDo.php" method="post">

      <div id="backBoxPosition">
        <div class="backBox">
          <div class="navBar">
            <nav>
              <a href="http://localhost/Reserva360/Explore/PHP/index.php">Explore</a>
              <a href="http://localhost/Reserva360/Flights/PHP/Flights.php">Flights</a>
              <a href="http://localhost/Reserva360/Hotel/PHP/Hotel.php">Hotels</a>
              <a href="http://localhost/Reserva360/ThingsToDo/PHP/ThingsToDo.php">Things to do</a>
              <a href="http://localhost/Reserva360/Deals/PHP/Deals.php">Deals</a>
              <div class="animation start-things-to-do"></div>
            </nav>
          </div>
          <div id="discntText">
            <p class="text2">Attractions, activities and experiences</p>
            <p class="text1">Discover new attractions and experiences to match your interests and travel style</p>
          </div>
          <div id="locationDate">
            <div class="locationBox">
              <div class="location">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="valueToSearch" for="location" class="locationBorder" placeholder="Going to" />
              </div>
            </div>
            <?php
            include "calBox.php"
            ?>
            <div class="searchValue">
              <input type="submit" name="search" value="search" class="search" />
            </div>
          </div>
        </div>
      </div>

    </form>
    <div id="tableBox">
      <table>
        <!-- populate table from mysql database -->
        <?php while ($row = mysqli_fetch_array($search_result)) : ?>
          <form method="post" action="ThingsToDo.php?action=add1&ID=<?php echo $row['ID']; ?>">
            <tr>
              <td>
                <img src="../images/<?php echo $row['image']; ?>"><br />
              </td>
              <td class="events">
                <div class="align">
                  <p style="font-size:13pt; margin-bottom:5px; color:black"><?php echo $row['place']; ?></p>
                  <h2 style="font-size:15.5pt; color:navy; margin-bottom:5px"><?php echo $row['event']; ?></h2>
                  <p style="color:#072e00; text-align:justify"><?php echo $row['description']; ?></p>
                  <button><?php echo $row['catagory']; ?></button>
                </div>
              </td> <br />
              <td class="hName">
                <div class="align2">
                  <p><?php echo $row['price']; ?></p><br />
                  <?php if (isset($_SESSION['userID'])) { ?>
                    <button class="button2"><a type="submit" href="http://localhost/Reserva360/Reservations/ReserveHotel.php?fid=<?php echo $row['ID']; ?>">Reserve Hotel</a></button>
                  <?php } else { ?>
                    <button class="button2"><a type="submit" href="http://localhost/Reserva360/Login/PHP/login.php">Login to Reserve</a></button>
                  <?php } ?>
                </div>
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