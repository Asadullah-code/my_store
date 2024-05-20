<?php 
	include "admin/conn.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];

	$sql = "INSERT INTO members (name, email, password, phone)
	VALUES ('$name', '$email', '$password', '$phone')";

	if ($conn->query($sql) === TRUE) {
	  echo '<script>alert("Data inserted successfully"); window.location.href = "register.php";</script>';
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>