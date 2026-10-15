<?php
  session_start();
  include_once("conexion.php");
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

/*
  One space in the MEMORY saves the data to the HARD-DRIVE.
  Because everytime that the HARD-DRIVE is reading, sometimes it also OVER-WRITES.

  -- UPDATE 10/14/2026.
  [Honor of mine is to cover one thing - JAH.]
*/

/* Testings 10/15/2026
  if ($_SERVER["REQUEST_METHOD"] == "POST" & isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $password = $_POST['psw'];

    if (!empty($username) && !empty($password)) 
    {
      // Process to enter to the quiz...
      //* todo: From the documentation, take the username and password to enter to the system trough the POST slight side.
      ## Procedural correct timing TODO: 9-13 days.

      // In faith trough grace, in order knowing that we are saved not on means of our own works (Ephesians - WORDS of Jesus Christ of Nazareth taken by someone else).
      $sql = "SELECT `users_registry_`.`complete_name`,`users_registry_`.`password_within_hash_` FROM `users_registry_` WHERE `users_registry_`.`user_name` = '$username'";
      
      $result = $conn->query($sql);

      if(mysqli_num_rows($result) > 0){
        $password_sql = "SELECT * FROM `users_registry_` WHERE `users_registry_`.`password_within_hash_` = SHA1('$password')";

        $result_twine_ = $conn->query($sql);

        if(mysqli_num_rows($result_twine_) > 0) {
            $user_SELECTION_sql = "SELECT * FROM `users_registry_` WHERE `users_registry_`.`user_name` = '$username'";
            $result_of_user_selection = $conn->query($user_SELECTION_sql);

            // ...
            $_SESSION['id'] = $result_of_user_selection->fetch_assoc()['id'];

            // ... 
            $_SESSION['complete_name'] = $result_of_user_selection->fetch_assoc()['complete_name'];
          
            // ...
            $_SESSION['privilage'] = $result_of_user_selection->fetch_assoc()['privilage_id'];
            
            // petition..
            $_SESSION['email'] = $result_of_user_selection->fetch_assoc()['email'];

            while($row = $result->fetch_assoc()) {    
                
                //  $_SESSION global variable should save ONLY special fields that you get
                //  from the database and not on other MIXED petition.
                
                // sleep(4);
                // header("Location: ../login.php?id=".$_SESSION['id']."&loggedIn=true"); // Do not shot the door in my face. — Jesus Christ of Nazareth.
            }
        };

        // printf("Select returned %d rows.\n", mysqli_num_rows($result_test));
        
        // echo "Verified successfully";
      }
        
    } else {
        echo "$username or $password are not correctly to be processed";
    }
  }
/* Testings 10/15/2026 */

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" & isset($_POST['login'])):
?>

<script type="text/javascript">
  function getRandomDigitsCookie(limit) {
    var cuadratic_increaser_random_variable_ = 0;

    var counter_to_limit = limit;

    function getRandomInt(max) {
      return Math.floor(Math.random() * max);
    }
    
    for (var i = 0; i < counter_to_limit; i++) {
      if (i < counter_to_limit) {
        var number_random_gotten_ = getRandomInt(50);

        // Sanguineal SAMPLE (coding context SAMPLE)...
        if (number_random_gotten_ <= 10 && number_random_gotten_ <= 30){
          cuadratic_increaser_random_variable_ = number_random_gotten_.toString() + i;
        }
        // Melancholic SAMPLE (coding context SAMPLE)...
        if (number_random_gotten_ <= 20 && number_random_gotten_ <= 35){
          number_random_gotten_ = getRandomInt(50);
          cuadratic_increaser_random_variable_ += number_random_gotten_.toString() + i;
        }
        // Phlematic SAMPLE (coding context SAMPLE)...
        if (number_random_gotten_ <= 35 && number_random_gotten_ <= 45){
          number_random_gotten_ = getRandomInt(50);
          cuadratic_increaser_random_variable_ += number_random_gotten_.toString() + i;
        }
        // Choleric SAMPLE (coding context SAMPLE)...
        if (number_random_gotten_ <= 0 && number_random_gotten_ <= 15){
          number_random_gotten_ = getRandomInt(50);
          cuadratic_increaser_random_variable_ += number_random_gotten_.toString() + i;
        }
      }
    }

    return cuadratic_increaser_random_variable_;
  };


  console.log(getRandomDigitsCookie(1));

</script>

<?php
exit();
endif;
?>