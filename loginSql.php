<?php
session_start();
require_once 'admin/conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username, password, and role from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM members WHERE email = ? AND password = ?";
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    // Bind parameters
    $stmt->bind_param("ss", $email, $password); // Binding role parameter
    // Execute the query
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Check if a row exists
    if ($result->num_rows == 1) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        
        // Save user role in session
        $_SESSION['email'] = $user['email'];
        
        // $_SESSION['email'] = $user['email'];
        // $_SESSION['password'] = $user['password'];

        // Valid login, set session variable
        $_SESSION['log_in'] = true;
        
        // Close the statement
        $stmt->close();
        // Close the database connection
        $conn->close();

        // Output JavaScript for redirection
        ob_end_flush();
        @header("Location: shopping.php");
        exit();
    } else {
        // Invalid login, display error message
        $error = "Invalid email, password";
    }
    // Close the statement
    $stmt->close();
}
// Close the database connection
$conn->close();
?>