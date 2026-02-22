<?php
include_once("conexion.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    if (!empty($username) && !empty($password)) 
    {
        // Process to enter to the quiz
        //* todo: From the documentation, take the username and password to enter to the system trough the POST slight side.
        ## Animal's procedural correct timing TODO: 9-13 days.
    } else {
        echo "$username or $password are not correctly to be processed";
    }
  }

?>