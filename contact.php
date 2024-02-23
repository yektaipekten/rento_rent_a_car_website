<?php
    session_start();
    require_once "config.php";

    $comfort = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=1 ");
    $prestige = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=2 ");
    $luxury = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=3 ");
?>


<?php include ('inc/header.php') ?>

 <?php include ('inc/nav.php') ?>

	  
	  
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">Booking </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>booking@rento.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Office </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>office@rento.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Report </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>report@rento.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
						
                </div>
				
		
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4">You can contact us with your e-mail address <a href="about.php">More Information</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
	  
	  
	  
	  
	  
	  
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