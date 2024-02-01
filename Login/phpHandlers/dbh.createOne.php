
<?php

$email = $_POST['email'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$password = $_POST['password'];
$username = $_POST['username'];
$mnumber = $_POST['number'];


include "dbh.config.php";

$insert = $conn->prepare("insert into users(email,username,fname,lname,pnumber,password) values(?,?,?,?,?,?)");
$insert->bind_param('ssssis',$email,$username,$firstName,$lastName,$mnumber,$password);
$execIns = $insert->execute();

echo '<script>alert("Registered successfully...")</script>';

$insert->close();
$conn->close();

?>