<?php

include "./dbh.config.php";

if(isset($_GET['deleteUserId'])) {
    $id = $_GET['deleteUserId'];

$query = "DELETE FROM `users` WHERE userID = $id ";
$queryRun = mysqli_query($conn,$query);

if($queryRun){
    header("Location: ../php/displayUser.php");
}
else {
    die(mysqli_error($conn));
}

}

?>