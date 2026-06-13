<?php
## Here shall be the code to stablish the conexion in PHP.
## Stay hamless as doves, and caring as sheaps ... – Jesus Christ of Nazareth.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "jonah_chronicles";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

## Tested and working

?>