<?php
    session_start();
    require_once "config.php";

    $comfort = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=1 ");
    $prestige = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=2 ");
    $luxury = mysqli_query($link,"SELECT * FROM `cars` WHERE cat_id=3 ");
?>


<?php include ('inc/header.php') ?>

 <?php include ('inc/nav.php') ?>

	  
	  
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
                     <p>With the Rento car rental service, which can be performed within minutes, you can reach solutions suitable for operational and personal needs by using many brands and models of vehicles. Car rental transactions with Rento; It can be done quickly via mobile application, website, phone number or thousands of car rental offices. You can easily make your car rental transactions for your inner city or intercity trips from Rento Offices all over the country.

After determining the purchase-return offices and rental date via the mobile application and website, you can choose the vehicle you want among the appropriate brands and models. Apart from the mobile application and website, you can also perform rental transactions through Rento offices and phone numbers. </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>2 - Discover Rento's Unique Campaigns and Advantages</span>
                     <p>As Rento, we offer full and complete services for our customers' car rental needs. With our Rento rent a car options, which are focused on the satisfaction of our customers in every field, tailored to their needs, affordable and advantageous; We aim to offer a pleasant trip with our hygienic, reliable services and seasonal campaign opportunities.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>3 - Rento Campaigns</span>
                     <p>Rento Customers Do Not Pay One Way Fees in London!</p>

<p>Within the scope of the campaign, the one-way fee between city offices is covered by Avis.</p>

<p>Rento Customers Don't Pay One Way Fees in Birmingham!!</p>

<p>Within the scope of the campaign, the one-way fee is covered by Rento for car rental transactions between Rento Birmingham offices.</p>

<p>When Renting a Car from Rento, Make Your Payment Online, Get 30% Discount!</p>

<p>When you make your payment online while renting a car within the scope of the campaign, you will get a 30% discount. </p>
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