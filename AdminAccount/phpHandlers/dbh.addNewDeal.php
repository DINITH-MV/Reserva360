<?php
session_start();
    include "./dbh.config.php";

    if(isset($_POST['submit'])) {
        $hName = $_POST['hName'];
        $image = $_POST['image'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $deal = $_POST['deal'];
    
        $query = "INSERT INTO `deals`(`hotelName`, `image`, `location`, `description`, `deal`) VALUES ('$hName', '$image',  '$location', '$description','$deal')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            header("Location: ../php/displayDeals.php");
            echo "<script>Successfully Uploaded!</script>";
        }
        else{
            echo "Unsuccessful";
        }
    
    }
?>
