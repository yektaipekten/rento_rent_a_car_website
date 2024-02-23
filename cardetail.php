<?php
    session_start();
    require_once "config.php";
    
    if (isset($_GET['id'])) {
        // echo $_GET['id'];
        $product_id = $_GET['id'];
        $result = mysqli_query($link,"SELECT * FROM `cars` WHERE id=$car_id");
        $car_data = mysqli_fetch_assoc($result);

        $detail = mysqli_query($link,"SELECT * FROM `cars_details` WHERE product_id=$car_id");
        $cars_details = mysqli_fetch_assoc($detail);

    } else {
        // Fallback behaviour goes here
    }
    
    $status="";
    if (isset($_POST['car_id']) && $_POST['car_id']!=""){
        // die(print_r($_POST));
        $car_id = $_POST['car_id'];
        $quantity = $_POST['quantity'];
        // $size = $_POST['size'];
        $result = mysqli_query(
        $link,
        "SELECT * FROM `cars` WHERE `id`='$car_id'"
        );
        $row = mysqli_fetch_assoc($result);
        $name = $row['car_name'];
        $price = $row['car_price'];
        $image = $row['car_image'];

        $cartArray = array(
            $product_id=>array(
            'car_id'=>$car_id,
            'name'=>$name,
            'price'=>$price,
            'quantity'=>$quantity,
            'image'=>$image)
        );
        // die(print_r($cartArray));

        if(empty($_SESSION["car_cart"])) {
            $_SESSION["car_cart"] = $cartArray;
            // $status = "<div class='box'>Product is added to your cart!</div>";
        }else{
            $array_keys = array_keys($_SESSION["car_cart"]);
            if(in_array($car_id,$array_keys)) {
                // die("already!!");	
                foreach($_SESSION["car_cart"] as $k => $v) {

                    if($product_id == $v["car_id"]) {
                      // echo "p id: " . $car_id . "<br>";
                      // echo "v id: " . $v["car_id"] . "<br>";
                      // die("123");
                      if(empty($_SESSION["car_cart"][$k]["quantity"])) {
                          $_SESSION["car_cart"][$k]["quantity"] = 0;
                      }
                      $_SESSION["car_cart"][$k]["quantity"] += $_POST["quantity"];
                    }
                }
            } else {
                $_SESSION["car_cart"] = array_merge($_SESSION["car_cart"],$cartArray);
                // $status = "<div class='box'>Product is added to your cart!</div>";
            }

        }
        header("location: cars_details.php?id=$car_id");
        exit;
    }

?>

<?php include ('inc/header.php') ?>

 <?php include ('inc/nav.php') ?>


	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div id="content-wrapper">
            <div class="column ">
                <img id=featured src="images/<?php echo $cars_details['image'] ?>">

                <div id="slide-wrapper" >
                    <img id="slideLeft" class="arrow" src="images/<?php echo $cars_details['image'] ?>">

 
                </div>
            </div>
            <div class="column">
                <h1><?php echo $car_data['car_name'] ?></h1>

                <hr>
                <span class="mt-5"><?php echo $car_data['car_tag'] ?></span>
                <h3>£ <?php echo $car_data['car_price'] ?></h3>


                <input value="1" name="quantity" type="number" min="1" max="10" >
                <input type="hidden" id="car_price" value="<?php echo $car_data['car_price'] ?>">
                <input type="hidden" name="total_price" value="0">
                <input type="hidden" name="car_id" value="<?php echo $car_data['id'] ?>">

                <button type="submit" class="btn btn-dark">Add to Basket</button>
            </div>
        </div>
    </form>

	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>
  	


<?php include ('inc/footer.php') ?>