<?php
session_start();
    include "./dbh.config.php";

    if(isset($_POST['submit'])) {
        $event = $_POST['event'];
        $location = $_POST['location'];
        $catagory = $_POST['catagory'];
        $description = $_POST['description'];
        $price = $_POST['price'];
    
        $query = "INSERT INTO `thingstodo`(`event`, `place`, `catagory`, `description`, `price`) VALUES ('$event', '$location',  '$catagory', '$description','$price')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            header("Location: ../php/displayThingsToDo.php");
            echo "<script>Successfully Uploaded!</script>";
        }
        else{
            echo "Unsuccessful";
        }
    
    }
// distroy the session
?>
