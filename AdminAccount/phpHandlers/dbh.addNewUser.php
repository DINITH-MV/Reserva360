<?php
session_start();
    include "./dbh.config.php";

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $aEmail = $_POST['email'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $password = $_POST['password'];
        $mNumber = $_POST['mobileNumber'];
        $gender = $_POST['gender'];
    
        $query = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `pnumber`, `gender`) VALUES ('$fName', '$lName','$aEmail','$password','$username', '$mNumber','$gender')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            header("Location: ../php/displayUser.php");
            echo "<script>Successfully Uploaded!</script>";
        }
        else{
            echo "Unsuccessful";
        }
    
    }
// distroy the session
?>