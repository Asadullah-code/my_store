<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryName = $conn->real_escape_string($_POST['c_name']);

    // SQL query to insert data into the "category" table
    $sql = "INSERT INTO category (c_name) VALUES ('$categoryName')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Data inserted successfully"); window.location.href = "category.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
