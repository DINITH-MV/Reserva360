<?php

include "./dbh.config.php";

if(isset($_GET['deleteHotelId'])) {
    $id = $_GET['deleteHotelId'];

$query = "DELETE FROM `hotels` WHERE ID = $id ";
$queryRun = mysqli_query($conn,$query);

if($queryRun){
    header("Location: ../php/Dashboard.php");
}
else {
    die(mysqli_error($conn));
}

}

?>