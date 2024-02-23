<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rento_car_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$sql = "INSERT INTO users (username, password, address,phone,email)
VALUES ('$uname', '$pass', '$address', '$phone', '$email')";

$result = mysqli_query($conn, $sql);
header("Location: login.php");

		
?>


