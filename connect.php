<?php
$servername = "localhost"; //Server Name
$username = "root"; //User Name
$password = ""; //Password
$dbname = "crud-app"; //Database Name 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
