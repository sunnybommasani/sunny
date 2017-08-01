<?php
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$db1 = "db1";
// Create connection
$conn = new mysqli($servername1, $username1, $password1,$db1);

// Check connection
if ($conn->connect_error) {
    trigger_error("Connection failed: " . $conn->connect_error);
}
//else{
//echo "Connected successfully";}
?>