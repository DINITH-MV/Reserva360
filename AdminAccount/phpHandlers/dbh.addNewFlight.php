<?php
session_start();
    include "./dbh.config.php";

    if(isset($_POST['submit'])) {
        $departure = $_POST['departure'];
        $durationD = $_POST['durationD'];
        $arrival = $_POST['arrival'];
        $durationA = $_POST['durationA'];
        $date = $_POST['date'];
        $airline = $_POST['airline'];
        $price = $_POST['price'];
    
        $query = "INSERT INTO `flights`(`departure`, `depTime`, `arrival`, `arrTime`, `date`, `airline`, `price`) VALUES ('$departure', '$durationD','$arrival','$durationA','$date', '$airline','$price')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            header("Location: ../php/displayFlights.php");
            echo "<script>Successfully Uploaded!</script>";
        }
        else{
            echo "Unsuccessful";
        }
    
    }
?>
