<?php
// Start the session
session_start();

// Destroy all session variables and session
session_unset();
session_destroy();

// Redirect to login page after logout
header("Location: login.php");
exit();
?>