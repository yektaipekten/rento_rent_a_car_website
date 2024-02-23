
<header id="header">
		  <!-- navbar -->
		  
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "/">
                <img src = "images/logo.png" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2"></span>
            </a>

            <div class = "order-lg-2 nav-btns">
                <a href="addcartnew1.php">
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
                        <a class = "nav-link text-uppercase text-dark" href = "cartnew1.php">Booking</a>
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





