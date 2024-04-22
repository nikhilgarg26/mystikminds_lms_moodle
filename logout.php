<?php
session_start(); // Ensure session start at the beginning of the script

// Unset all session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to the login page or home page
header("Location: index.php");
exit;
?>
