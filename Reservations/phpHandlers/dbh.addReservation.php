<?php
session_start();
    include "./dbh.config.php";

    if(isset($_POST['submit'])) {
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $noMem = $_POST['noMember'];
        $noRoom = $_POST['noRoom'];
        $noNights = $_POST['noNights'];
        $hotelID = $_GET['hotelID'];
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

 