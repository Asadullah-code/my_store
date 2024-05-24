<?php    
   include "session.php";
   $user_email = $_SESSION['email'];
?>
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
      <title>Carts</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
          <?php include "nav.php" ?>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Ready To Shipment</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <!-- <div class="col-lg-6 offset-lg-0">
                  <div class="full">
                     <form action="">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div> -->
               <div class="col-lg-12 offset-lg-0">
                  <div class="full">
                        <div class="row d-flex align-items-center justify-content-between cartDiv" style="border-bottom: 2px solid #000; padding: 14px;">
                           <div class="col">No.</div>
                           <div class="col">Product</div>
                           <div class="col">Price</div>
                           <div class="col">Product image</div>
                           <div class="col">Product Quantity</div>
                        </div>
                     <?php    
                        include 'admin/conn.php';

                        $sql = "SELECT * FROM cart WHERE user_email= '$user_email'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                           $total_price = 0;
                           $count = 1;
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                           $total_price += $row["p_price"];
                            echo '
                                 <div class="row d-flex align-items-center justify-content-between cartDiv p-3">
                                    ';?>
                                    <div class="col"><?php echo $count; ?></div>
                                 <?php echo'
                                    <div class="col">'.$row["p_name"].'</div>
                                    <div class="col">$'.$row["p_price"].'</div>
                                    <div class="col">
                                    <img height="50" width="50" src="admin/'.$row["p_img"].'">
                                    </div>
                                    <div class="col">'.$row["p_quantity"].'</div>
                                 </div>
                            ';
                          }
                          $count++;
                        } else {
                          echo "0 results";
                        }
                        $conn->close();
                     ?>
                     <div class="row d-flex align-items-center justify-content-between cartDiv" style="border: 2px solid #000; padding: 14px;">
                        <div class="col text-center">Total: $<?php echo $total_price; ?></div>
                     </div>
                     <!-- end here -->
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- end why section -->
      <!-- arrival section -->
      <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="row">
                  <div class="col-12 text-center">
                     <a href="products.php" style="padding: 22px 54px !important;">
                        Continue Shopping
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      <!-- footer section -->
      <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.php" class="footer-logo">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By
                     <a href="">Ac Cart</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer section -->
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