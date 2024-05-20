<?php 
// Start the session
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['email'])) {
    // Redirect them to the index page or login page
    @header("Location: index.php");
  
}

?>
