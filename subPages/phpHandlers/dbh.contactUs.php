<?php
    session_start();
    include './dbh.config.php';
    
    if(isset($_POST['submit'])){
        $fullName = $_POST['name'];
        $email = $_POST['email'];
        $mobileNumber = $_POST['mobile'];
        $message = $_POST['message'];

        $id = $_SESSION['userID'];

        $query = "INSERT INTO contactus (name, email, phoneNumber, message, userID) VALUES ('$fullName','$email','$mobileNumber', '$message','$id')";

        $queryRun = mysqli_query($conn, $query);

        if($queryRun){
            header('Location: ./contactus.php');
        }
        else{
            echo "<script>alert('Error')</script>";
        }
    }
?>