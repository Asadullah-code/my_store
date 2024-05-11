<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>
	<main>
	    <?php include "nav.php"; ?>

		<div class="container Category">
			<div class="row Hero p-5">
				<div class="heading d-flex align-items-center justify-content-start">
					<h4 class="text-white me-3">Add Category</h4>
					<hr class="text-white w-75">
				</div>
				<div class="col-lg-12 col-12 my-3">

					<form method="post" action="addCategory.php">
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="c_name" class="form-label">Category Name:</label>
						    <input type="text" class="form-control w-100" id="c_name" name="c_name" required>
						</div>
						<div class="d-flex align-items-center justify-content-end flex-column mb-3">
						    <button type="submit" class="btn btn-md btn-primary" id="bupBtn">Add Category</button>
						</div>
					</form>

				</div>
			</div>
		</div>

	</main>


	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>