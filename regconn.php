<?php
$servername1 = "localhost";
$username1 = "root";
$password1 = "";
$db2 = "db2";
// Create connection
$conn = new mysqli($servername1, $username,$firstName,$lastName, $password,$conform_password,$userEmail,$gender,$db2);

// Check connection
if ($conn->connect_error) {
    trigger_error("Connection failed: " . $conn->connect_error);
}
//else{
//echo "Connected successfully";}
?>