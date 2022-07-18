<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";
$conn = new mysqli($host, $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);