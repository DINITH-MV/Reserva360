<?php

include "./dbh.config.php";

if(isset($_GET['deleteDealId'])) {
    $id = $_GET['deleteDealId'];

$query = "DELETE FROM `deals` WHERE ID = $id ";
$queryRun = mysqli_query($conn,$query);

if($queryRun){
    header("Location: ../php/displayDeals.php");
}
else {
    die(mysqli_error($conn));
}

}

?>