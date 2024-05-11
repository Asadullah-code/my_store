<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brandName = $conn->real_escape_string($_POST['b_name']);
    $brandDetail = $conn->real_escape_string($_POST['b_detail']);

    // Array to store uploaded file paths
    $uploadedFiles = array();

    // Image upload handling for multiple files
    $targetDir = "assets/imagesB/";

    foreach ($_FILES["b_img"]["name"] as $key => $value) {
        $targetFile = $targetDir . basename($_FILES["b_img"]["name"][$key]);

        // Check if file was successfully uploaded
        if (move_uploaded_file($_FILES["b_img"]["tmp_name"][$key], $targetFile)) {
            $uploadedFiles[] = $targetFile;
        } else {
            echo "Error uploading file.";
        }
    }

    // Combine uploaded file paths into a comma-separated string
    $imagePaths = implode(',', $uploadedFiles);

    // SQL query with prepared statement to insert a single record
    $sql = "INSERT INTO brand (b_name, b_detail, b_img) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $brandName, $brandDetail, $imagePaths);

    if ($stmt->execute()) {
        echo '<script>alert("Data inserted successfully"); window.location.href = "brand.php";</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
