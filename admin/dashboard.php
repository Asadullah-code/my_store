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
	<title>My Store</title>
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>
	<main>
	    <?php include "nav.php"; ?>

		<div class="container Hero">
			<div class="row p-5 d-flex align-items-center justify-content-between">
                <?php if (isset($_SESSION['username'])) { ?>
				    <h1 class="text-center text-success fs-4 fw-semibold fade-in">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
				    <div class="col-lg-3 mb-4 col-4 d-flex align-items-center justify-content-start">
					    <h4 class="text-white">Admin Dashboard</h4>
				    </div>
				    <div class="col-lg-9 mb-4 col-8 d-flex align-items-center justify-content-start">
					    <hr class="text-white w-100">
				    </div>
				    <div class="col-3">
					    <div class="card">
						  <div class="card-body">
						    <h4 class="card-title">Today</h4>
						    <p class="card-text"><?php echo date("d.m.Y"); ?></p>
						  </div>
					    </div>
				    </div>
				    <div class="col-9">
					    <div class="row">
						    <div class="col-lg-12 col-12 mb-3 d-flex align-items-center justify-content-start">
							    <h4 class="text-white">Today's Order :</h4>
						        <hr class="text-white ms-5 w-75">
						    </div>
						    <div class="col-12">
							    <table class="table table-primary">
							      <thead>
							        <tr>
							          <th scope="col">#</th>
							          <th scope="col">Category Name</th>
							          <th scope="col">Product Name</th>
							          <th scope="col">Total Price</th>
							          <th scope="col">Pay</th>
							          <th scope="col">Action</th>
							        </tr>
							      </thead>
							      <tbody>
							        <tr>
							          <th scope="row">1</th>
							          <td>Mark</td>
							          <td>Otto</td>
							          <td>@mdo</td>
							          <td>@mdo</td>
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
							      </tbody>
							    </table>
						    </div>

					    </div>
				    </div>
                <?php } else { ?>
                    <!-- Redirect to index.php if not logged in -->
                    <?php header("Location: index.php"); exit(); ?>
                <?php } ?>
			</div>
		</div>

	</main>

	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>
