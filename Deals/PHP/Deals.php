<?php
include "../phpHandlers/dbh.config.php";
include "../phpHandlers/dbh.DealsSearch.php";
include "../phpHandlers/dbh.MapFind.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../CSS/Deals.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <title>Deals</title>
</head>

<body>

  <?php
  include "Header.php";
  ?>

  <section id="Deals">

    <form action="Deals.php" method="post">

      <div id="backBoxPosition">
        <div class="backBox">
          <div class="navBar">
            <nav>
              <a href="http://localhost/Reserva360/Explore/PHP/index.php">Explore</a>
              <a href="http://localhost/Reserva360/Flights/PHP/Flights.php">Flights</a>
              <a href="http://localhost/Reserva360/Hotel/PHP/Hotel.php">Hotels</a>
              <a href="http://localhost/Reserva360/ThingsToDo/PHP/ThingsToDo.php">Things to do</a>
              <a href="http://localhost/Reserva360/Deals/PHP/Deals.php">Deals</a>
              <div class="animation start-deals"></div>
            </nav>
          </div>
          <div id="locationDateAll">
            <div id="discntText">
              <p class="text1">Find Getaway Deals around the world</p>
              <p class="text2">SAVE 20% or more</p>
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

    <div id="box">
      <!-- populate table from mysql database -->
      <?php while ($row = mysqli_fetch_array($search_result)) : ?>
        <form method="post" action="Deals.php?action=add1&ID=<?php echo $row['ID']; ?>">
          <div id="product">
            <div class="product-box">
              <div class="product-item"><img src="../images/<?php echo $row['image']; ?>">
                <div class="overlay"></div>
                <div class="product-desc">
                  <h3><?php echo $row['hotelName']; ?></h3>
                  <h4><?php echo $row['location']; ?></h4>
                  <p><?php echo $row['description']; ?></p>
                </div>
                <span>
                  <p class="greenButton">Getaway Deals</p>
                  <p class="bottomText1" style="font-family: Calibri, sans-serif;">start from</p>
                  <p class="bottomText2"><?php echo $row['deal']; ?></p>
                  </p>
                </span>
                <button id="buttons"><a type="submit" target="_blank">Use the Deal</a></button>
              </div>
            </div>
          </div>
        </form>
      <?php endwhile; ?>
    </div>

  </section>

  <?php
  include "Footer.php";
  ?>

</body>

</html>