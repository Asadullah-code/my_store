<?php
// Include database connection file
include "conn.php"; // You need to create this file with database connection details

session_start(); // Start the PHP session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["userpass"];

    // Perform a query to check if the provided username and password match any record in the "admins" table
    $query = "SELECT * FROM admins WHERE username = ? AND password = ?";
    
    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password); // Note: This is plain text, not hashed
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        // Check if any matching record is found
        if (mysqli_num_rows($result) > 0) {
            // Username and password are correct, set session variables and redirect to dashboard.php
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            // Incorrect username or password, redirect to index.php with an error message
            $error_message = "Incorrect username or password. Please try again.";
            header("Location: index.php?error=" . urlencode($error_message));
            exit();
        }
    } else {
        // Error in the database query
        echo "Error: " . mysqli_error($conn);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    // Close the database connection
    mysqli_close($conn);
}
?>
