<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $email = $password = "";
$username_err = $email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $db_password);
                    if(mysqli_stmt_fetch($stmt)){
							if($password === $db_password){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: home.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid email or password.";
                        }
                    }
                } else{
                    // email doesn't exist, display a generic error message
                    $login_err = "Invalid email or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<?php include ('inc/header.php') ?>

 <?php include ('inc/nav.php') ?>



  
  
  
  
  
  
  
  
  <section>

      <div class="formbox">
	      <div class="container-xxl py-5">
        <div class="container">    
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">

        <h2>Login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?><?php echo $username; ?>
          <?php echo $username_err; ?>
       
        <div class="inputbx">
          
          <input type="email" name="email" class="<?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" placeholder="Email">
          <div class="error" id="nameErr"><?php echo $email_err; ?></div>
        </div>
         <div class="inputbx">
          
          <input type="Password" name="password" class="<?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" placeholder="Password">
          <div class="error" id="passwordd"><?php echo $password_err; ?></div>
        </div>
    <div class="remember">
      <label>
        <input type="checkbox" name="">Remember me</label>
    </div>
    <div class="inputbx">
      <input type="submit" value="Sign in" onclick="validateForm()" >
      
    </div>
    <div class="inputbx">
      <p>Don't have an account? <a href="signin.php">Register</a></p>
	  
      </div>
	 
	  
	  
      
	  
	 
      </form>

      </section>
	  
  
	  
	 
	  

	
<?php include ('inc/footer.php') ?>

