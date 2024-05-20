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
						<div class="d-flex align-items-start justify-content-start flex-column mb-3">
							<label for="pc_name" class="form-label">Product Category:</label>
							<select class="form-select" name="pc_name" aria-label="Default select example">
								<?php 
									include "conn.php";

									$sql = "SELECT * FROM category";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									  // output data of each row
									  while($row = $result->fetch_assoc()) {
									    echo '
									      <option value='.$row["c_name"].'>'.$row["c_name"].'</option>
									    ';
									  }
									} else {
									  echo '';
									}
									//$conn->close();	
								?>
							</select>
						</div>
						<div class="d-flex align-items-center justify-content-end flex-column mb-3">
						    <button type="submit" class="btn btn-md btn-primary" id="bupBtn">Add Product</button>
						</div>
					</form>

				</div>
				<div class="col-12 mb-3">
					<?php 
						include "conn.php";

						$sql = "SELECT * FROM product";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						  // output data of each row
						    ?>

						    	<table class="table table-primary">
							      <thead>
							        <tr>
							          <th scope="col">#</th>
							          <th scope="col">Product Name</th>
							          <th scope="col">Product Detail</th>
							          <th scope="col">Product Price</th>
							          <th scope="col">Product Img</th>
							          <th scope="col">Product CName</th>
							          <th scope="col">Product Date</th>
							          <th scope="col">Action</th>
							        </tr>
							      </thead>
							      <tbody>
							      	<?php
						  while($row = $result->fetch_assoc()) {
							      	echo'
							        <tr>
							          <th scope="row">'.$row['id'].'</th>
							          <td>'.$row['p_name'].'</td>
							          <td>'.$row['p_detail'].'</td>
							          <td>'.$row['p_price'].'</td>
							          <td>
							          	<img class="p_img" src="'.$row['p_img'].'" style="max-height: 6vh" alt="'.$row['p_img'].'">
							          </td>
							          <td>'.$row['pc_name'].'</td>
							          <td>'.$row['p_date'].'</td>
							          <td>
									    <div class="btn-group">
									      <button type="button" class="btn bg-transparent dropdown-toggle p-0 border-0" data-bs-toggle="dropdown" aria-expanded="false">
									        Action
									      </button>
									      <ul class="dropdown-menu">
									        <li><a class="dropdown-item" href="#">Edit</a></li>
									        <li><a class="dropdown-item" href="#">Delete</a></li>
									        <li><a class="dropdown-item" href="#">Confirm</a></li>
									      </ul>
									    </div>
								      </td>
							        </tr>
							        ';
						  	}
							        ?>
							      </tbody>
							    </table>
							    <?php
						} else {
						  echo "";
						}
						//$conn->close();
					?>
					
				</div>
			</div>
		</div>

	</main>


	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>