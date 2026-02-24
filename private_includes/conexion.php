<?php
## Here shall be the code to stablish the conexion in PHP.
## Stay hamless as doves, and caring as sheaps ... – Jesus Christ of Nazareth.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jonah_chronicles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

## Tested and working

?>