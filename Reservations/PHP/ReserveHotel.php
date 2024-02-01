<?php
include '../phpHandlers/dbh.config.php';
?>

<?php
session_start();

    if(isset($_POST['submit'])) {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $noMem = $_POST['noMember'];
        $noRoom = $_POST['noRoom'];
        $noNights = $_POST['noNights'];
        $hotelID = $_GET['hid'];
        $uID = $_SESSION['userID'];
    
        $query = "INSERT INTO `reserveRoom`(`startDate`, `endDate`, `noMember` , `noRooms`, `noNights`, `Hid`, `Uid`) VALUES ('$startDate', '$endDate','$noMem', '$noRoom', '$noNights','$hotelID','$uID')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            echo "<script>alert('Successfully Booked!')</script>";
        }
        else{
            echo "Unsuccessful";
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="../CSS/ReserveHotel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>

    <?php
    $id = $_GET['hid'];
    $query = "select * from `hotels` where ID = '$id'";
    $queryRun = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($queryRun);
    $hName = $row['Hotel_Name'];
    $hotelImage = "http://localhost/Reserva360/Hotel/images/" . $row['Hotel_image'];
    ?>
    <section id="header">
        <p class="logoText">Reservar <span>360 <i class="fa fa-light fa-location-arrow fa-shake"></i></span></p>
    </section>
    <section id="logInBox">
        <div class="mainContent">
            <div class="headerAndInputs">
                <h4><?php echo $hName; ?></h4>
                <div class="imageBorder" >
                <img src='<?php echo $hotelImage; ?>'>
                </div>
                <form action='' method='POST'>
                    <div class="content">
                        <div class="inputBoxes">
                            <label>Hotel Name</label></br>
                            <input class="hname" type='text' value='<?php echo $hName; ?>' readonly></br>

                            <label>Reservation Start date</label></br>
                            <input class="dates" type='date' name="startDate" required></br>

                            <label>Reservation end date</label></br>
                            <input class="dates" type='date' name="endDate" required></br>
                            
                            <label>Number of members</label></br>
                            <input class="number" type="text" name='noMember'></br>

                            <label>Number of rooms</label></br>
                            <input class="number" type="text" name='noRoom'></br>

                            <label>Nights going to stay</label></br>
                            <input class="number" type='text' name='noNights' required ></br>
                            <input type='submit' name='submit' id="bookNow" value='Book now & Pay later' class='submit'>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include './footer.php';
?>