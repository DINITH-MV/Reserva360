<?php

if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `thingstodo` WHERE CONCAT(`event`,`place`) LIKE '%" .$valueToSearch. "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `thingstodo`";
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