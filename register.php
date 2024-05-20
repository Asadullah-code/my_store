<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Register</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <?php include "admin/assets/cdn/topcdn.php"; ?>
      <style>
         .filterDiv {
           display: none;
         }
         .show {
           display: block;
         }
      </style>
   </head>
   <body>
      <div class="hero_area d-flex align-items-center justify-content-center">
         <!-- register section -->
         <div  class="row regForm">
            <div class="col-12">
               <!-- form row start -->
               <div class="row flex-xxl-row-reverse regUForm">
                  <div class="col-xx-6 col-lg-6 col-12 d-flex align-items-center justify-content-center">
                     <img src="images/regS.png">
                  </div>
                  <div class="col-xx-6 col-lg-6 col-12 text-center" style="padding: 23px;">
                     <h4 class="mb-4 fw-semibold">Member Register</h4>
                     <form method="post" action="registerSql.php">
                        <div class="mb-3">
                         <input type="name" placeholder="name" name="name" class="form-control inputF" id="name" aria-describedby="name" required>
                        <i class="bi bi-person logIcon"></i>
                       </div>
                       <div class="mb-3">
                         <input type="email" placeholder="email" name="email" class="form-control inputF" id="email" aria-describedby="emailHelp" required>
                        <i class="bi bi-envelope logIcon"></i>
                       </div>
                       <div class="mb-3">
                         <input type="password" placeholder="password" name="password" class="form-control inputF" id="password" required>
                        <i class="bi bi-lock-fill logIcon"></i>
                       </div>
                       <div class="mb-3">
                         <input type="text" placeholder="phone" name="phone" class="form-control inputF" id="phone" required>
                        <i class="bi bi-telephone-fill logIcon"></i>
                       </div>
                       <button type="submit" class="btn logBtn">Register</button>
                     </form>
                     <div class="mt-3">
                        <a class="newMem" href="login.php">Already member? <span class="ms-1" style="font-weight: 600; color: #465765 !important;">Login</span></a>
                     </div>
                  </div>
               </div>
               <!-- form row end -->
            </div>
         </div>
         <!-- end register section -->
      </div>
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>