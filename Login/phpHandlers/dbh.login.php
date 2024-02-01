<?php
include "dbh.config.php";

if (isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$password = $_POST['password'];

	require_once './dbh.functions.php';

	login($conn, $username, $password);

	// function validate($data)
	// {
	// 	$data = trim($data);
	// 	$data = stripslashes($data);
	// 	$data = htmlspecialchars($data);
	// 	return $data;
	// }

	// $uname = validate($_POST['uname']);
	// $pass = validate($_POST['password']);

	if (empty($username)) {
		header("Location: ../php/login.php?error=User Name is required");
		exit();
	} else if (empty($password)) {
		header("Location: ../php/login.php?error=Password is required");
		exit();
	}

} else {
	header('location: ../php/login.php');
	exit();
}