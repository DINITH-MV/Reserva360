<?php

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `hotels` WHERE CONCAT(`Hotel_image`, `Location`, `Hotel_Name`, `Rate`, `Price`, `ID`) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `hotels`";
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