<?php
session_start();

$_SESSION = array();
session_destroy();
header("Location: ../index.php");

// Committing this text: Closing session logout.

?> 