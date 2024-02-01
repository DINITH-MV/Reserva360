<!DOCTYPE html>
<html lang="en">
<?php
include "../phpHandlers/dbh.config.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/displayUser.css" />
    <title>User</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <?php
    include "Header.php"
    ?>

    <div id="profileWithNav">
        <div id="profilePosition">
            <div id="profile">
                <p class="name">Ethen<br />Administrator</p>
                <img src="../images/Profile.png" />
            </div>
        </div>
        <div id="behindBox">
            <ul id="nav">
                <li>
                    <a href="./overview.php">Dashboard</a>
                </li>
                <li>
                    <a href="./bookings.php" class="active">Bookings</a>
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

    <div id="positions">
        <div id="navPosition1">
            <div class="navBar">
                <nav>
                <a href="http://localhost/Reserva360/AdminAccount/PHP/displayExplore.php">Explore</a>
                    <a href="http://localhost/Reserva360/AdminAccount/PHP/displayFlights.php">Flights</a>
                    <a href="../../AdminAccount/PHP/displayHotels.php">Hotels</a>
                    <a href="http://localhost/Reserva360/AdminAccount/PHP/displayThingsToDo.php">Things to do</a>
                    <a href="http://localhost/Reserva360/AdminAccount/PHP/displayDeals.php">Deals</a>
                </nav>
            </div>
        </div>

        <div id="navPosition2">
            <div class="navBar2">
                <div>
                    <nav>
                        <a href="http://localhost/Reserva360/AdminAccount/PHP/displayAdmin.php">Admin</a>
                        <div class="animation start-admin"></div>
                    </nav>
                </div>
                <div>
                    <nav>
                        <a href="http://localhost/Reserva360/AdminAccount/PHP/displayUser.php">User</a>
                        <div class="line"></div>
                        <div class="animation start-user"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <th>Username</th>
            <th>User Email</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Mobile Number</th>
            <th>Password</th>
            <th>Manage</th>
        </tr>

        <?php
        $sql = "SELECT *FROM users";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ID = $row['userID'];
                echo " 
                    <tr>
                        <td> " . $row['username'] . " </td>                        
                        <td> " . $row['email'] . " </td>
                        <td> " . $row['fname'] . " </td>
                        <td> " . $row['lname'] . " </td>
                        <td> " . $row['pnumber'] . " </td>
                        <td> " . $row['password'] . " </td>                      
                        <td>                        
                            <button class='addUser'> <a href='http://localhost/Reserva360/AdminAccount/PHP/addNewUser.php'>Add a User</a></button>                         
                            <button class='update' > <a href='http://localhost/Reserva360/AdminAccount/phpHandlers/dbh.updateUser.php?updateUserId= " . $ID . "'>Modify</a> </button> 
                            <button class='delete' > <a href='http://localhost/Reserva360/AdminAccount/phpHandlers/dbh.deleteUser.php?deleteUserId= " . $ID . "'>Delete</a> </button> 
                        </td>                        
                    </tr>";
            }
        }
        ?>

    </table>;

</body>

</html>
<?php
include "./Footer.php"
?>
</body>

</html>