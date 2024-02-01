<?php
include '../phpHandlers/dbh.config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="../CSS/displayProfile.css" />
    <link rel="stylesheet" href="../CSS/Footer.css" />
</head>

<body>

    <div class="content">
        <div id="outerBorder"></div>
        <table class="user-details">
            <?php
            $sql1 = "SELECT image FROM users WHERE userID = '$id';";
            $result1 = mysqli_query($conn, $sql1);
            $resultCheck1 = mysqli_num_rows($result1);
            if ($resultCheck1 > 0) {
                while ($row = mysqli_fetch_assoc($result1)) {
            ?>
                    <tr><img id="image" src="../images/<?php echo $row['image']; ?>"></tr>
            <?php }
            } ?>
            <p class="user-para">User profile</p>
            <tr>
                <th>Username</th>
                <td><?php echo $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td class="email"><?php echo $_SESSION['email'] ?></td>
            </tr>
            <tr>
                <th>First name</th>
                <td><?php echo $_SESSION['firstName'] ?></td>
            </tr>
            <tr>
                <th>Last name</th>
                <td><?php echo $_SESSION['lastName'] ?></td>
            </tr>
            <tr>
                <th>Phone number</th>
                <td><?php echo $_SESSION['mobileNumber'] ?></td>
            </tr>
        </table>
        <div id="outerBorder2"></div>
        <table class="reservation-details">

            <tr>
                <th>Hotel Name</th>
                <th>From</th>
                <th>To</th>
                <th>No of members</th>
                <th>No of rooms</th>
                <th>No of nights</th>
            </tr>

            <?php
            $sql = "SELECT h.Hotel_Name, rs.startDate, rs.endDate, rs.noMember, rs.noRooms, rs.noNights FROM reserveroom rs, users r, hotels h WHERE r.userID = rs.Uid AND rs.Hid = h.ID AND rs.Uid = '$id';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                            <tr>
                                <td>" . $row['Hotel_Name'] . "</td>
                                <td>" . $row['startDate'] . "</td>
                                <td>" . $row['endDate'] . "</td>
                                <td>" . $row['noMember'] . "</td>
                                <td>" . $row['noRooms'] . "</td>
                                <td>" . $row['noNights'] . "</td>
                            </tr>
                        ";
                }
            }
            ?>
        </table>
    </div>
    <div id="footerPosition">
        <div id="footer">
            <div class="footerText">
                <p class="footerLogoText">Reservar <span>360</span></p>
            </div>
            <div class="paraText">
                <ul>
                    <li>
                        <a class="align1" href="http://localhost/Reserva360/subPages/HTML/aboutUs.html">Company</a><a class="align1" href="http://localhost/Reserva360/subPages/HTML/policies.html">Policies</a><a class="align1" href="http://localhost/Reserva360/subPages/PHP/contactUs.php">Contact Us</a><a class="align2" href="">List tour property</a><a href=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>