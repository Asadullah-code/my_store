<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <?php if (isset($_SESSION['username'])) { ?>
        <li><a href="dashboard.php" class="nav-link dash px-2 text-white">
          <i class="fas fa-tachometer-alt me-1"></i> Dashboard</a>
        </li>
        <li><a href="product.php" class="nav-link px-2 text-white"><i class="fas fa-box me-1"></i> Products</a></li>
        <li><a href="category.php" class="nav-link px-2 text-white"><i class="fas fa-list me-1"></i> Category</a></li>
        <li><a href="brand.php" class="nav-link px-2 text-white"><i class="fas fa-tags me-1"></i> Brand</a></li>
        <li><a href="order.php" class="nav-link px-2 text-white"><i class="fas fa-shopping-cart me-1"></i> Order</a></li>
      </ul>

     <!--  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form> -->

      <div class="text-end">
        
        <!-- <button type="button" class="btn btn-outline-light me-2">Sign-up</button> -->
        <button type="button" class="btn text-white logBtn">
          <i class="fas fa-sign-in-alt me-1"></i> <a href="logout.php" class="text-decoration-none text-white">Logout</a> 
        </button>
        <?php } else { ?>
          <?php header("Location: index.php"); exit(); ?>
          <?php } ?>

      </div>
    </div>
  </div>
</header>