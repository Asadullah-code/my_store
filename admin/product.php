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
	<title>Product</title>
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>
	<main>
	    <?php include "nav.php"; ?>

		<div class="container Product">
			<div class="row Hero p-5">
				<div class="heading d-flex align-items-center justify-content-start">
					<h4 class="text-white me-3">Add Product</h4>
					<hr class="text-white w-75">
				</div>
				<div class="col-lg-12 col-12 my-3">

					<form method="post" action="addProduct.php" enctype="multipart/form-data">
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="p_name" class="form-label">Product Name:</label>
						    <input type="text" class="form-control w-100" id="p_name" name="p_name" required>
						</div>
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="p_detail" class="form-label">Product Detail:</label>
						    <textarea type="text" class="form-control w-100" id="p_detail" name="p_detail" rows="3" required></textarea>
						</div>
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="p_price" class="form-label">Product Price:</label>
						    <input type="number" class="form-control w-100" id="p_price" name="p_price" min="5" step="5" required>
						</div>
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
						    <label for="p_image" class="form-label">Product Image:</label>
						    <input type="file" class="form-control w-100" id="p_image" name="p_img[]" multiple accept="image/*" required>
						</div>
						<div class="d-flex align-items-center justify-content-end flex-column mb-3">
						    <button type="submit" class="btn btn-md btn-primary" id="bupBtn">Add Product</button>
						</div>
					</form>

				</div>
			</div>
		</div>

	</main>


	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>