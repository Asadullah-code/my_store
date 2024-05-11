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
	<title>Brand</title>
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>
	<main>
	    <?php include "nav.php"; ?>

		<div class="container Brand">
			<div class="row Hero p-5">
				<div class="heading d-flex align-items-center justify-content-start">
					<h4 class="text-white me-3">Add Brand</h4>
					<hr class="text-white w-75">
				</div>
				<div class="col-lg-12 col-12 my-3">

					<form method="post" action="addBrand.php" enctype="multipart/form-data">
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="b_name" class="form-label">Brand Name:</label>
						    <input type="text" class="form-control w-100" name="b_name" id="b_name" required>
						</div>
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="b_detail" class="form-label">Brand Detail:</label>
						    <textarea type="text" class="form-control w-100" name="b_detail" id="b_detail" rows="3" required></textarea>
						</div>
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="b_image" class="form-label">Brand Image:</label>
						    <input type="file" class="form-control w-100" id="b_img" name="b_img[]" multiple accept="image/*" required>
						</div>
						<div class="d-flex align-items-center justify-content-end flex-column mb-3">
						    <button type="submit" class="btn btn-md btn-primary" id="bupBtn">Add Brand</button>
						</div>
					</form>

				</div>
			</div>
		</div>

	</main>


	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>