<?php
include "../phpHandlers/dbh.config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flight</title>
    <link rel="stylesheet" href="../CSS/addNewFlight.css" />
</head>

<body>
    <?php
    include "Header.php";
    ?>

    <div id="logInBox">
        <div class="mainContent">
            <div class="headerAndInputs">
                <h3>Add a new Flight</h3>
                <form action="../phpHandlers/dbh.addNewFlight.php" method="POST" enctype="multipart/form-data">
                    <div class="inputBoxes">
                        <input type="text" name="departure" placeholder="Departure" id="name" />
                        <input type="text" name="durationD" placeholder="Duration from departure" id="rate" />
                        <input type="text" name="arrival" placeholder="Arrival" id="price" />
                        <input type="text" name="durationA" placeholder="Duration from arrival" id="location" />
                        <input type="text" name="airline" placeholder="Airline" id="location" />
                        <input type="date" name="date" placeholder="Date" id="Map" />
                        <input type="text" name="price" placeholder="Price" id="Map" />
                    </div>
                    <button type="submit" name="submit" id="Add">Add</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "Footer.php";
    ?>
</body>

</html>