<?php

// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
//header('location: index.html?msg=' . urlencode(base64_encode("You have been successfully logged out!")));
echo '<meta http-equiv="Refresh" content="0;url=index.html?msg=' . urlencode('You have been successfully logged out!') . '">';

exit;
?>