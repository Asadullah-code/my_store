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
	<title>Order</title>
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>
	<main>
	    <?php include "nav.php"; ?>

		<div class="container Order">
			<div class="row Hero p-5">
				<div class="heading d-flex align-items-center justify-content-start">
					<h4 class="text-white me-3">Add Order</h4>
					<hr class="text-white w-75">
				</div>
				<div class="col-lg-12 col-12 my-3">

					<form method="post" action="addOrder.php">
						<div class="row d-flex align-items-center justify-content-center">
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orBr" class="form-label">Order Brand:</label>
							    <input type="text" class="form-control w-100" id="orBr" name="orderB" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orCat" class="form-label">Order Categoty:</label>
							    <input type="text" class="form-control w-100" id="orCat" name="orderC" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orPr" class="form-label">Brand Product:</label>
							    <input type="text" class="form-control w-100" id="orPr" name="orderP" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orQa" class="form-label">Quantity:</label>
							    <input type="number" class="form-control w-100" id="orQa" name="orderQ" min="1" step="1" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orTP" class="form-label">Total Price:</label>
							    <input type="number" class="form-control w-100" id="orTP" name="orderTP" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orSP" class="form-label">Shipping Price:</label>
							    <input type="number" class="form-control w-100" id="orSP" name="orderSP" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="orDis" class="form-label">Discount:</label>
							    <input type="number" class="form-control w-100" id="orDis" name="orderD" required>
							</div>
							<div class="col-lg-6 col-md-6 col-12 d-flex align-items-start justify-content-start flex-column mb-3">
							    <label for="" class="form-label">Discount:</label>
							    <input type="number" class="form-control w-100" id="" name="" required>
							</div>
							<div class="col-lg-12 col-md-12 col-12 d-flex align-items-center justify-content-end flex-column mb-3">
							    <button type="submit" class="btn btn-md btn-primary" id="bupBtn">Add Order</button>
							</div>
						</div>	
					</form>

				</div>
			</div>
		</div>

	</main>


	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>