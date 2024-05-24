<?php
include "admin/conn.php";

// Get the form data
$p_img = $_POST['p_img'];
$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_id = $_POST['p_id'];
$user_email = $_POST['user_email'];

// Prepare the SQL statement to insert data into the cart table
$sql = "INSERT INTO cart (p_img, p_name, p_price, p_id, user_email) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("ssdis", $p_img, $p_name, $p_price, $p_id, $user_email);

// Execute the statement
if ($stmt->execute()) {
    echo "Product added to cart successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the statement and the connection
$stmt->close();
$conn->close();
?>
