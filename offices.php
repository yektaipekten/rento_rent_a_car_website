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
                                <h5 class="text-uppercase">London </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>london@rento.com</p>
								<h3>Rento - London Wembley, GEC Est, Courtenay Rd, East Ln, Wembley HA9 7ND, United Kingdom</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Birmingham </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>birmingham@rento.com</p>
								<h3>Rento - Birmingham Spring Hill, Spring Hill Passage, Spring Hill, Birmingham B18 7AH, United Kingdom</h3>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"> Brighton </h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>brighton@rento.com</p>
								<h3>Rento -  Hove, The Kingsway, Hove, Brighton and Hove, Hove BN3 2TQ, United Kingdom</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->	  
	
	
	
<?php include ('inc/footer.php') ?>