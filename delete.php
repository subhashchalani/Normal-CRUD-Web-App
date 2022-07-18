<?php
include 'dbcon.php';
// Get Email ID
$id = $_POST['mailId'];
// Query
$mysqlDeleteData = "DELETE FROM `employees` WHERE `email`='". $id ."'";

$conn->query($mysqlDeleteData);
$conn->close();

echo '<h1 style="text-align: center"> ', $id ,' User Deleted Success. </h1>
<h1 style="text-align: center"><a href="index.php" style="text-align: center; text-decoration: unset"> Get Home </a></h1>
 ';
