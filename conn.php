<?php
$servername = "10.200.208.125";
$username = "dkozdra8338";
$password = "142862Dk$";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 ?>

