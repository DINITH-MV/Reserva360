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

        require_once "../phpHandlers/dbh.functions.php";

        if(usernameExists($conn, $username) !== false){
            echo "<script>alert('Username taken')</script>";
            exit();
        }    
        
        if(emailExists($conn, $aEmail) !== false){
            echo "<script>alert('Email taken')</script>";
            exit();
        }
    
        $query = "INSERT INTO `admin`(`firstName`, `lastName`, `user_name`, `password`, `email`, `mobileNumber`, `gender`) VALUES ('$fName', '$lName','$username', '$password', '$aEmail','$mNumber','$gender')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            header("Location: ../php/displayAdmin.php");
            echo "<script>Successfully Uploaded!</script>";
        }
        else{
            echo "Unsuccessful";
        }
    
    }
// distroy the session
