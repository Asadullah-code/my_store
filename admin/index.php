<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include "assets/cdn/topcdn.php"; ?>
</head>
<body>
	<main>

		<div class="container Hero Category d-flex align-items-center justify-content-center" style="min-height: 100vh;">
			<div class="row p-5" style="background-color: #0000001f; box-shadow: 0px 0px 0px 2px #0000001f;">
				<div class="heading d-flex align-items-center justify-content-center flex-column">
					<h4 class="text-white">Admin Login</h4>
					<hr class="text-white w-50 text-center" style="margin-top: -5px;">
				</div>
				<div class="col-lg-12 col-12 my-3 d-flex align-items-center justify-content-center">
                    <div class="col-lg-12 col-12">
						<form method="post" action="login.php">
							<?php
		                        // Check if there is an error message in the URL
		                        if (isset($_GET['error'])) {
		                            $error_message = $_GET['error'];
		                            echo '<div style="font-size: 13px !Important;" class="alert alert-danger" role="alert">' . htmlspecialchars($error_message) . '</div>';
		                        }
	                        ?>
							<div class="d-flex align-items-start justify-content-start flex-column mt-3 mb-3">
							    <label for="username" class="form-label">Username:</label>
							    <input type="text" class="form-control w-100" id="username" name="username" required>
							</div>
							<div class="d-flex align-items-start justify-content-start flex-column mb-5">
							    <label for="pass" class="form-label">Password:</label>
							    <input type="password" class="form-control w-100" id="pass" name="userpass" required>
							</div>
							<div class="d-flex align-items-center justify-content-center flex-column">
							    <button type="submit" class="btn btn-md btn-primary" id="bupBtn">Login</button>
							</div>
						</form>
					</div>	

				</div>
			</div>
		</div>

	</main>


	<?php include "assets/cdn/bottomcdn.php"; ?>
</body>
</html>