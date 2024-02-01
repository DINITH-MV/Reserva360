<?php

include "./dbh.config.php";

if(isset($_GET['deleteAdminId'])) {
    $id = $_GET['deleteAdminId'];

$query = "DELETE FROM `admin` WHERE ID = $id ";
$queryRun = mysqli_query($conn,$query);

if($queryRun){
    header("Location: ../php/displayAdmin.php");
}
else {
    die(mysqli_error($conn));
}

}

?>