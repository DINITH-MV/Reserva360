<?php

if (isset($_POST['search'])) {
    $valueToSearch1 = $_POST['valueToSearch1'];
    $valueToSearch2 = $_POST['valueToSearch2'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `flights` WHERE CONCAT(`departure`) LIKE '%" . $valueToSearch1 . "%' AND CONCAT(`arrival`) LIKE '%" . $valueToSearch2."%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `flights`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "reserva360");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>