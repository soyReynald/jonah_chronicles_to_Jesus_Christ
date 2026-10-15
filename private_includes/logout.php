<?php
session_start();

$_SESSION = array(); // [NO WORRIES] I didn't need to empty the array USUALLY before times ago.
session_destroy();
header("Location: ../index.php");

// Committing this text: Closing session logout.

?> 