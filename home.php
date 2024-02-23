<?php
    session_start();
    require_once "config.php";

    $comfort = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=1 ");
    $prestige = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=2 ");
    $luxury = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=3 ");
?>


<?php include ('inc/header.php') ?>

 <?php include ('inc/nav.php') ?>


	 <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                     <h1>Rento is always with you for a privileged car rental experience.</h1>
                     <strong>From £25 per day </strong>
                     <span>Best choice for companies</span>
                     <p>
                        As the largest operational rent a car brand in the sector, we offer car rental solutions suitable for all kinds of needs with our fleet of more than 30 thousand vehicles.
                        <head></head>
                     </p>
					 <a class="nav-link" href="about.php">Read More</a>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
     
	 <!-- car -->
      
	   <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">Cars</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = ".all">All</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".common">common</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".rare">Rare</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".fair">Fair price</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <?php while($row = mysqli_fetch_assoc($comfort)) { ?>
                        <div class = "col-md-6 col-lg-4 col-xl-3 p-2 <?php echo $row['car_tag'] ?>">
                            <div class = "collection-img position-relative">
                            <a href="cartnew1.php">
                                <img src = "<?php echo $row['car_image'] ?>" class = "w-100">
                            </a>
                                <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Brand New</span>
                            </div>
                            <div class = "text-center">
                                <div class = "rating mt-3">
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                </div>
                                <p class = "text-capitalize my-1"><?php echo $row['car_name'] ?></p>
                                <span class = "fw-bold">$ <?php echo $row['car_price'] ?></span>
																<br/>
                                <a href="cartnew1.php">
                                <button>Rent Now</button></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
				
				
            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = ".all">All</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".common">common</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".rare">Rare</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".fair">Fair price</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <?php while($row = mysqli_fetch_assoc($prestige)) { ?>
                        <div class = "col-md-6 col-lg-4 col-xl-3 p-2 <?php echo $row['car_tag'] ?>">
                            <div class = "collection-img position-relative">
                            <a href="cartnew1.php">
                                <img src = "<?php echo $row['car_image'] ?>" class = "w-100">
                            </a>
                                <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Brand New</span>
                            </div>
                            <div class = "text-center">
                                <div class = "rating mt-3">
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                </div>
                                <p class = "text-capitalize my-1"><?php echo $row['car_name'] ?></p>
                                <span class = "fw-bold">$ <?php echo $row['car_price'] ?></span>
								<br/>
                                <a href="cartnew1.php">
                                <button>Rent Now</button></a>

                            </div>
                        </div>
                    <?php } ?>
                </div>
	                <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark active-filter-btn" data-filter = ".all">All</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".common">common</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".rare">Rare</button>
                    <button type = "button" class = "btn m-2 text-dark" data-filter = ".fair">Fair price</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <?php while($row = mysqli_fetch_assoc($luxury)) { ?>
                        <div class = "col-md-6 col-lg-4 col-xl-3 p-2 <?php echo $row['car_tag'] ?>">
                            <div class = "collection-img position-relative">
                            <a href="cartnew1.php">
                                <img src = "<?php echo $row['car_image'] ?>" class = "w-100">
                            </a>
                                <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Brand New</span>
                            </div>
                            <div class = "text-center">
                                <div class = "rating mt-3">
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                    <span class = "text-primary"><i class = "fas fa-star"></i></span>
                                </div>
                                <p class = "text-capitalize my-1"><?php echo $row['car_name'] ?></p>
                                <span class = "fw-bold">$ <?php echo $row['car_price'] ?></span>
																<br/>
                                <a href="cartnew1.php">
                                <button>Rent Now</button></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <!-- end bestCar -->
	  
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Why Rento is Leader of Car Rental in Rent a Car Sector in the UK</h2>
                     <span>As the largest operational rent a car brand in the sector, we offer car rental solutions suitable for all kinds of needs.
Since 2010, when we entered the sector, we have been providing our customers with the highest quality car rental service with our strong financial structure, our service network covering the whole of England,
 our experienced staff, 24/7 full support services, and fast and widespread replacement vehicle supply process.<br> 
 We are always here to support our customers </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>1 - It's Easy to Rent a Car in the UK with Rento</span>
                     
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>2 - Discover Rento's Unique Campaigns and Advantages</span>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>3 - Rento Campaigns</span>
                  </div>
				  <div class="choose_box">
                     <a class="nav-link" href="about.php">Detailed Informations</a>
                  </div>
				  
               </div>
            </div>
         </div>
      </div>
      
	  
	  
	  
      <!-- cutomer -->
      <div class="cutomer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Cutomer Feeedback</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="img2">
                                    <figure><img src="images/img2.jpg" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Burcu E.</h4>
                                       <span>Rental</span>
                                       <p>I had an accident with the vehicle I rented. When I called the company, they asked me about my situation and they helped me right away, brought another vehicle to where I was and did all the procedures themselves. You have to pay only 12% of the cost, regardless of the size of the accident you have made in the accident, which is a subject that everyone is curious about. I would definitely recommend, they were very helpful. Thanks Rento</p>
                                       <i><img src="images/te1.png" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="img1">
                                    <figure><img src="images/img1.png" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Cenk A.</h4>
                                       <span>Rental</span>
                                       <p>I would definitely recommend. because it is the most affordable and reliable car rental company in england. When there is a problem, they give you a new vehicle and pick up your vehicle from where you are.</p>
                                       <i><img src="images/te1.png" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="img4">
                                    <figure><img src="images/img4.jpg" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Elif B.</h4>
                                       <span>Rental</span>
                                       <p> When you want to rent only a few hours, it is possible to do this with Rento and you can leave the rented vehicle in another office where you go. This is a great service. Thanks Rento</p>
                                       <i><img src="images/te1.png" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cutomer -->
	  
<?php include ('inc/footer.php') ?>