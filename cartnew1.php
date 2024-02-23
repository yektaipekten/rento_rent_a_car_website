<?php

session_start();

require_once ('database.php');
require_once ('dynamic_elements.php');


// create instance of Database class
$database = new Database();

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        if(in_array($_POST['product_id'], array_keys($_SESSION['cart']))){
            $_SESSION['cart'][$_POST['product_id']] += 1;
            header("location: cartnew1.php");
        }else{
            // Create new session variable
            $_SESSION['cart'][$_POST['product_id']] = 1;
            // print_r($_SESSION['cart']);
            header("location: cartnew1.php");
        }

    }else{
        // Create new session variable
        $_SESSION['cart'][$_POST['product_id']] = 1;
        // print_r($_SESSION['cart']);
        header("location: cartnew1.php");
    }
}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RENTO</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php require_once ("header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                if($result){
                    while ($row = $result->fetch_assoc()){
                        prodElement($row);
                    }
                }else{
                    echo "<h4 class='text-center'>No Product Listed Yet<h4>";
                }
            ?>
        </div>
</div>


	      <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>B78 UP 123Street, Birmingham, UK</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+44 747 9881495</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@rento.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Working Hours</h4>
                    <h6 class="text-light">Monday-Sunday:</h6>
                    <p class="mb-4">7/24</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Menu</h4>
                    <a class="btn btn-link" href="home.php"> Home </a>
                    <a class="btn btn-link" href="cartnew1.php"> Booking </a>
                    <a class="btn btn-link" href="offices.php"> Our Offices </a>
                    <a class="btn btn-link" href="about.php"> About </a>
                    <a class="btn btn-link" href="contact.php"> Contact Us </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Sign In</h4>
                    <p>Enter your e-mail address</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Rento 2023</a>

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="about.php">Ali Yekta Ipekten</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="home.php">Home</a>
                            <a href="offices.php">Location</a>
                            <a href="contact.php">Help</a>
                            <a href="about.php">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!-- Footer End -->
	  
	  
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   
   </body>
</html>




