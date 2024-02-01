<?php

include "./dbh.config.php";

if(isset($_GET['deleteFlightId'])) {
    $id = $_GET['deleteFlightId'];

$query = "DELETE FROM `flights` WHERE ID = $id ";
$queryRun = mysqli_query($conn,$query);

if($queryRun){
    header("Location: ../php/displayFlights.php");
}
else {
    die(mysqli_error($conn));
}

}

?>