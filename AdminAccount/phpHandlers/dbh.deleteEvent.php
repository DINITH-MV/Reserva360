<?php

include "./dbh.config.php";

if(isset($_GET['deleteEventId'])) {
    $id = $_GET['deleteEventId'];

$query = "DELETE FROM `thingstodo` WHERE ID = $id ";
$queryRun = mysqli_query($conn,$query);

if($queryRun){
    header("Location: ../php/displayThingsToDo.php");
}
else {
    die(mysqli_error($conn));
}

}

?>