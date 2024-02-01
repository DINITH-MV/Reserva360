<?php
include "../phpHandlers/dbh.config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hotel</title>
    <link rel="stylesheet" href="../CSS/addhotel.css" />
</head>

<body>
    <?php
    include "Header.php";
    ?>
    
    <div id="logInBox">
        <div class="mainContent">
            <div class="headerAndInputs">
                <h3>Add a new Hotel</h3>
                <form action="../phpHandlers/dbh.addHotel.php" method="POST" enctype="multipart/form-data">
                    <div class="inputBoxes">
                        <input type="text" name="name" placeholder="Name of the hotel" id="name" />
                        <input type="text" name="location" placeholder="Location of the hotel" id="location" />
                        <input type="text" name="rate" placeholder="Rate" id="rate" />
                        <input type="text" name="price" placeholder="price" id="price" />
                        <input type="text" name="map" placeholder="Link of hotel" id="Map" />
                        <input type="text" name="link_name" placeholder="ID Name" id="IDname" />
                        <input type="text" name="map_link" placeholder="Link of Google map" id="MapGoogle" /><br />
                        <input type="file" name="imageHotel" placeholder="Image link" id="image" />
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