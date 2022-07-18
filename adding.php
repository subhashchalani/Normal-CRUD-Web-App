<?php
include 'dbcon.php';
$name = $_POST['fullName'];
$email = $_POST['email'];
$role = $_POST['role'];

echo $name.$role.$email;

// Query
$addData = "INSERT INTO `employees`(`email`, `role`, `name`) VALUES ( '". $email ."','". $role ."','". $name ."')";

// execute
$conn->query($addData);

// Close Connection
$conn->close();

echo '<h1 style="text-align: center"> ', $name ,' Added Success. </h1>
<h1 style="text-align: center"><a href="index.php" style="text-align: center; text-decoration: unset"> Get Home </a></h1>
 ';