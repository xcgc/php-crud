<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "school_db";

// Create connection
$connect = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
?>