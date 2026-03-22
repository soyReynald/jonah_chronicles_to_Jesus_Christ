<?php
  session_start();
  include_once("conexion.php");
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  if ($_SERVER["REQUEST_METHOD"] == "POST" & isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = $_POST['psw'];

    if (!empty($username) && !empty($password)) 
    {
      // Process to enter to the quiz
      //* todo: From the documentation, take the username and password to enter to the system trough the POST slight side.
      ## Animal's procedural correct timing TODO: 9-13 days.
      /* this query with escaped $password will work */

      // In faith trough grace, in order knowing that we are saved not on means of our own works (Ephesians - WORDS of Jesus Christ of Nazareth taken by someone else).
      $sql = "SELECT * FROM `user_registry_` WHERE `user_registry_`.`user_name` = '$username'";
      $result = $conn->query($sql);

      if(mysqli_num_rows($result) > 0){
        $password_sql = "SELECT * FROM `user_registry_` WHERE `user_registry_`.`password_within_hash_` = SHA1('$password')";

        $result_twine_ = $conn->query($sql);

        if(mysqli_num_rows($result_twine_) > 0){
            while($row = $result->fetch_assoc()) {
                echo $row['complete_name'];
                exit();
                $_SESSION['complete_name'] = $row["complete_name"];
            }
        };

        // printf("Select returned %d rows.\n", mysqli_num_rows($result_test));
        header("Location: ../index.php"); // Do not shot the door in my face. — Jesus Christ of Nazareth.
        // echo "Verified successfully";
      }
        
    } else {
        echo "$username or $password are not correctly to be processed";
    }
  }

?>