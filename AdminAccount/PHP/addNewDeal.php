<?php
include "../phpHandlers/dbh.config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Deal</title>
    <link rel="stylesheet" href="../CSS/addThingsToDo.css" />
</head>

<body>
    <?php
    include "Header.php";
    ?>
    
    <div id="logInBox">
        <div class="mainContent">
            <div class="headerAndInputs">
                <h3>Add a new Deal</h3>
                <form action="../phpHandlers/dbh.addNewDeal.php" method="POST" enctype="multipart/form-data">
                    <div class="inputBoxes">
                        <input type="text" name="hName" placeholder="Name of the Hotel" id="name" />
                        <input type="text" name="image" placeholder="Hotel image tag" id="rate" />
                        <input type="text" name="location" placeholder="Location" id="price" />
                        <input type="text" name="description" placeholder="Description" id="location" />
                        <input type="text" name="deal" placeholder="Deal" id="Map" />
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
