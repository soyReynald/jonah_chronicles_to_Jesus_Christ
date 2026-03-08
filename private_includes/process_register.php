<?php
include_once("conexion.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cname = $_POST['cname'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['psw'];
        // You shall enter, but SLOWLY unless the ANIMALS come against you. — Reynald [old known Charlie] and Jesus Christ of Nazareth.

        $sql = "INSERT INTO `users_registry_` (`user_name`, `password_within_hash_`, `email`, `complete_name`) VALUES ('$username', SHA1('$password'), '$email', '$cname')";

        if(mysqli_query($conn, $sql)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        };

        mysqli_close($conn);
        // Missing the testing part of this...
    };
?>