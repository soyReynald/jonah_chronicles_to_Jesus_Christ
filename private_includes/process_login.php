<?php
include_once("conexion.php");

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = $_POST['psw'];

    if (!empty($username) && !empty($password)) 
    {
        // Process to enter to the quiz
        //* todo: From the documentation, take the username and password to enter to the system trough the POST slight side.
        ## Animal's procedural correct timing TODO: 9-13 days.
      /* this query with escaped $password will work */

      // In faith trough grace, in order knowing that we are saved not on means of our own works (Ephesians - WORDS of Jesus Christ of Nazareth taken by someone else).
      $sql = "SELECT * FROM `user_name_` WHERE `user_name_`.`username` = '$username'";
      $result = $conn->query($sql);

      if(mysqli_num_rows($result) > 0){
        $password_sql = "SELECT * FROM `user_name_` WHERE `user_name_`.`password` = SHA1('$password')";
        $result_test = $conn->query($password_sql);
        // printf("Select returned %d rows.\n", mysqli_num_rows($result_test));
        header("Location: index.php"); // Do not shot the door in my face. — Jesus Christ of Nazareth.
        // echo "Verified successfully";
      }
        
    } else {
        echo "$username or $password are not correctly to be processed";
    }
  }

?>