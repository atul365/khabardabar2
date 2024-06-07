<?php

$dbServername = "localhost"; // Assuming your database server is running on the same machine
$dbUsername = "root"; // Assuming your database username is root
$dbPassword = ""; // Assuming your database password is empty
$dbName = "khabardabar"; // Name of the database you want to connect to

// Establishing connection to the database
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
