<?php
$servername = "localhost";
$username = "vbp2538_wdm";
$password = "WdM@2538@#@";
$database = "vbp2538_wdm_project";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    $servername = "";
    $username = "";
    $password = "";
    $database = "";
    die("Connection failed: " . $conn->connect_error);
}
?>