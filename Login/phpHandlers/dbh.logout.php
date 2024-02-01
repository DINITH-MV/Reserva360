<?php

    session_start();
    session_unset();
    session_destroy();

    header('location: http://localhost/Reserva360/Hotel/PHP/Hotel.php');
    exit();

?>