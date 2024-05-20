<?php
include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $conn->real_escape_string($_POST['p_name']);
    $productDetail = $conn->real_escape_string($_POST['p_detail']);
    $productPrice = $conn->real_escape_string($_POST['p_price']);
    $productCategory = $conn->real_escape_string($_POST['pc_name']);

    // Array to store uploaded file paths
    $uploadedFiles = array();

    // Image upload handling for multiple files
    $targetDir = "assets/imagesP/";

    foreach ($_FILES["p_img"]["name"] as $key => $value) {
        $targetFile = $targetDir . basename($_FILES["p_img"]["name"][$key]);

        // Check if file was successfully uploaded
        if (move_uploaded_file($_FILES["p_img"]["tmp_name"][$key], $targetFile)) {
            $uploadedFiles[] = $targetFile;
        } else {
            echo "Error uploading file.";
        }
    }

    // Combine uploaded file paths into a comma-separated string
    $imagePaths = implode(',', $uploadedFiles);

    // SQL query with prepared statement to insert a single record
    $sql = "INSERT INTO product (p_name, p_detail, p_price, p_img, pc_name) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $productName, $productDetail, $productPrice, $imagePaths, $productCategory);

    if ($stmt->execute()) {
        echo '<script>alert("Data inserted successfully"); window.location.href = "product.php";</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
