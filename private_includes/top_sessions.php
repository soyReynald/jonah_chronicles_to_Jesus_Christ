<?php 
function start_header_user_sessions($user_get = null) {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $user_get = $_GET['userLoggedIn'] ?? null;
    $user_name = $_SESSION['complete_name'] ?? null;
    $user_guest = "Guest";
    ## In quiet and silence you shall find my strenght... 
    ## & seek first the Kingdom of God and its justice and everything else shall be added unto it.

    if (isset($user_get)) {
        header("Location: index.php");
    } else if (isset($user_name)) {
        $name = $user_name;
    } else if ($user_guest != "Guest"){
        $name = "Guest";
    } else {
        $name = false;
    };
    return $name;
}

?>