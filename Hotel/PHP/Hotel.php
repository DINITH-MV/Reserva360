<?php
include "../phpHandlers/dbh.config.php";
include "../phpHandlers/dbh.hotelSearch.php";
include "../phpHandlers/dbh.MapFind.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/Hotel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Hotel</title>
</head>

<body>

  <?php
  include "Header.php";
  ?>

  <section id="Hotel">

    <form action="Hotel.php" method="post">
      <div id="backBoxPosition">
        <div class="backBox">
          <div class="navBar">
            <nav>
              <a href="http://localhost/Reserva360/Explore/PHP/index.php">Explore</a>
              <a href="http://localhost/Reserva360/Flights/PHP/Flights.php">Flights</a>
              <a href="http://localhost/Reserva360/Hotel/PHP/Hotel.php">Hotels</a>
              <a href="http://localhost/Reserva360/ThingsToDo/PHP/ThingsToDo.php">Things to do</a>
              <a href="http://localhost/Reserva360/Deals/PHP/Deals.php">Deals</a>
              <div class="animation start-hotel"></div>
            </nav>
          </div>
          <div id="locationDate">
            <div id="discntText">
              <p class="text2">Find your next Destination</p>
              <p class="text1">Search luxury on Hotels, Resorts, Villas and much more...</p>
            </div>
            <div class="locationBox">
              <div class="location">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="valueToSearch" for="location" class="locationBorder" placeholder="Leaving from" />
              </div>
            </div>

            <?php
            include "calBox.php"
            ?>

            <div id="famWithIcon">
              <i class="fa fa-thin fa-person"></i>
              <select id="numFamily">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
              </select>
            </div>

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
          <form method="post" action="Hotel.php?action=add1&ID=<?php echo $row['ID']; ?>">
            <tr>
              <td><img src="../images/<?php echo $row['Hotel_image']; ?>"><br />
              </td>
              <td class="hName">
                <h4><?php echo $row['Hotel_Name']; ?></h4><br />
                <input class="button1" name="add1" type="submit" class="button" value="Show in Map" />
              </td>
              <td class="rateS">
                <i class="fa duotone fa-star"></i><?php echo " " . $row['Rate']; ?><br /><br />
                <?php if (isset($_SESSION['userID'])) { ?>
                  <button class="button2"><a type="submit" href="http://localhost/Reserva360/Reservations/PHP/ReserveHotel.php?hid=<?php echo $row['ID']; ?>">Reserve Hotel</a></button>
                <?php } else { ?>
                  <button class="button2"><a type="submit" href="http://localhost/Reserva360/Login/PHP/login.php">Login to Reserve</a></button>
                <?php } ?>
              </td>
              <td><?php echo $row['Price']; ?><br /><br />
                <p><?php echo "Rooms <br/> available " ?></p>
                <br /><button class="buttons"><a type="submit" href="<?php echo $row['Map']; ?>" target="_blank">Visit Official site</a></button>
              </td>
              <td> <input type="hidden" name="hidden_name1" value="<?php echo $row["Link_name"]; ?>"> </td>
              <td> <input type="hidden" name="hidden_map" value="<?php echo $row["Link_Map"]; ?>"> </td>
            </tr>
          </form>
        <?php endwhile; ?>
      </table>

      <div style="clear: both"></div>
      <div class="table-responsive">

        <?php
        if (!empty($_SESSION["reservation"])) {
        ?>

          <?php
          foreach ($_SESSION["reservation"] as $key => $value) {
          ?>

            <div id="container">
              <iframe src="<?php echo $value["product_map"]; ?>" width="300" height="401" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          <?php
          }
          ?>

        <?php
        } else { ?>
          <div id="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047293.716298266!2d78.06315484730565!3d7.849429994761951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1683399584903!5m2!1sen!2slk" width="300" height="401" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        <?php }
        ?>

      </div>
    </div>
  </section>

  <?php
  include "Footer.php";
  ?>

</body>

</html>