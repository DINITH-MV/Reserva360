<?php
include "../phpHandlers/dbh.config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/displayThingsToDo.css">
    <title>Things To Do</title>
</head>

<body>
    <?php
    include "Header.php"
    ?>
    <div id="profileWithNav">
        <button id="button" type="button" onclick="location.href='http://localhost/Reserva360/Login/phpHandlers/dbh.logout.php'">Sign out</button>
        <div id="profilePosition">
            <div id="profile">
                <p class="name"><?php echo $_SESSION['Ausername'] ?><br />Administrator</p>
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
                    <div class="animation start-things-to-do"></div>
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
            <th>Things to Do</th>
            <th>Image</th>
            <th>Location</th>
            <th>Description</th>
            <th>Catogory</th>
            <th>Price</th>
            <th>Manage</th>
        </tr>

        <?php
        $sql = "SELECT *FROM thingstodo";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ID = $row['ID'];
                echo " 
                    <tr>
                        <td class='firstRow'> " . $row['event'] . " </td> 
                        <td> " . $row['image'] . " </td>                       
                        <td> " . $row['place'] . " </td>
                        <td class='middleRow'> " . $row['description'] . " </td>
                        <td> " . $row['catagory'] . " </td>
                        <td> " . $row['price'] . " </td>
                        <td>                        
                            <button class='addEvent'> <a href='http://localhost/Reserva360/AdminAccount/PHP/addThingsToDo.php'>Add an Event</a></button>                         
                            <button class='update' > <a href='http://localhost/Reserva360/AdminAccount/phpHandlers/dbh.updateEvent.php?updateEventId= " . $ID . "'>Modify</a> </button> 
                            <button class='delete' > <a href='http://localhost/Reserva360/AdminAccount/phpHandlers/dbh.deleteEvent.php?deleteEventId= " . $ID . "'>Delete</a> </button> 
                        </td>                        
                    </tr>";
            }
        }
        ?>

    </table>

    <?php
    include "Footer.php"
    ?>
</body>

</html>