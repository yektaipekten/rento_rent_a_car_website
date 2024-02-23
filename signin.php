<?php
// Initialize the session
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rento_car_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = $phone = $address = "";
$username_err = $email_err = $password_err = $phone_err= $address_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // die(print_r($_POST));
    // Validate username
    if(empty(trim($_POST["uname"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["uname"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["uname"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["uname"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // die("112233");
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";     
    } elseif(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
        $email_err = "Invalid email";
    } else{
        $email = trim($_POST["email"]);
    }

    // Validate mobile
    if(empty(trim($_POST["phone"]))){
        $phone_err = "Please enter phone number.";     
    } else{
        $phone = trim($_POST["phone"]);
    }
	
    // Validate mobile
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter address.";     
    } else{
        $address = trim($_POST["address"]);
    }
	
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
  
        if(empty($username_err) && empty($email_err) && empty($phone_err) && empty($password_err) && empty($confirm_password_err)){

        
        // Prepare an insert statement
        $sql = "INSERT INTO users (`username`, `password`, `phone`, `email`) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssis", $param_username, $param_password, $param_phone, $param_email);
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_phone = $phone;
            $param_password = $password; // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                die($stmt->error);
                // echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Rento</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	  
	  
	  
	  
	  <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="css/home.css">
     
      <script src="js/login.js"></script>
      



   </head>
       <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">

            <div class="col-lg-5 px-5 text-end">

                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
				<div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+44 747 9881495</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
	   
   <!-- body -->
   <body class="main-layout">
   
   
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
	  
	  
	  
      <!-- header -->
      <header>

		  <!-- navbar -->
		  
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "/">
                <img src = "images/logo.png" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2"></span>
            </a>

            <div class = "order-lg-2 nav-btns">
                <a href="login.php">
                    <button type = "button" class = "btn position-relative">
                        <i class = "fa fa-shopping-cart"></i>
                        <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                    </button>
                </a>


                <?php if(!isset($_SESSION["loggedin"])){ ?>
                    <a href="login.php">
                        <button type = "button" class = "btn position-relative">
                        <i class = "fa fa-user-plus"></i>
                        <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                        </button>
                    </a>
                <?php } ?>
                <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ ?>
                    <a href="logout.php" class=""><button>Logout</button></a>
                <?php } ?>
               
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-search"></i>
                </button>
            </div>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "home.php">Home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "booking.php">Booking</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "offices.php">Our Offices</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "about.php">About</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "contact.php">Contact Us</a>
                    </li>
              
             
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
	  
	   </header>
	  <body>

	  

   
    <div class="container-xxl py-5">
        <div class="container">    
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4"><h1>Registration</h1><a href="about.php"></a></p>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="User Name" name="uname" required>
                                        <label for="name"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email Address" name="email">
                                        <label for="email"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="password" placeholder="Password" name="password">
                                        <label for="Password"></label>
                                    </div>
									                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="rePassword" placeholder="Comfirm Password" name="confirm_password">
                                        <label for="rePassword"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Address" id="address" style="height: 50px" name="address"></textarea>
                                        <label for="address"></label>
                                    </div>
                                </div>
								<div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Phone" id="Phone" style="height: 50px" name="phone"></textarea>
                                        <label for="phone"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-50 py-3" type="login">Register</button>
                                </div>
								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
	  
  
	  
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
                    <a class="btn btn-link" href="booking.php"> Booking </a>
                    <a class="btn btn-link" href="offices.php"> Our Offices </a>
                    <a class="btn btn-link" href="about.php"> About </a>
                    <a class="btn btn-link" href="contact.php"> Contact Us </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Sign In</h4>
                    <p>Enter your e-mail address</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
   </body>
</html>
