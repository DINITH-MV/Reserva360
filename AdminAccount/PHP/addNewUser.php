<?php
include "../phpHandlers/dbh.config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="../CSS/addNewAdmin.css" />
</head>

<body>
    <?php
    include "Header.php";
    ?>
    
    <div id="logInBox">
        <div class="mainContent">
            <div class="headerAndInputs">
                <h3>Add a new User</h3>
                <form action="../phpHandlers/dbh.addNewUser.php" method="POST" enctype="multipart/form-data">
                    <div class="inputBoxes">
                        <input type="email" name="email" placeholder="Email" id="name" />
                        <input type="text" name="fName" placeholder="First name" id="rate" />
                        <input type="text" name="lName" placeholder="Last name" id="price" />
                        <input type="text" name="username" placeholder="username" id="location" />
                        <input type="text" name="password" placeholder="Password" id="Map" />
                        <input type="text" name="mobileNumber" placeholder="Phone number" id="IDname" />
                        <input type="text" name="gender" placeholder="Gender" id="MapGoogle" /><br />
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
