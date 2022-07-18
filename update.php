<?php
include 'dbcon.php';

$email = $_POST['email'];
$role = $_POST['role'];

// Query

$sqlUpdateData = "UPDATE `employees` SET `role`='". $role ."' WHERE `email`='" . $email . "'";

$conn ->query($sqlUpdateData);

$conn->close();

echo '<h1 style="text-align: center"> ', $email ,' User Update Success. </h1>
<h1 style="text-align: center"><a href="index.php" style="text-align: center; text-decoration: unset"> Get Home </a></h1>
 ';