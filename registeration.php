<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Website</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
		

</head>

<body id="page-top">
       <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MYCLUB SYSTEM</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">HOME</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registerweb.php">REGISTER</a></li>
      </ul>
      </div>
      </div>
      </nav>
	  
		<section class="page-section portfolio" id="portfolio">
        <div class="container d-flex align-items-center flex-column">
		<center><br><br>
		<h4 style='color:black;'class="name"><u>Your Record</u></h4><br>
	<?php

	include 'dblink.php';
	
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	date_default_timezone_set("Asia/Kuala_Lumpur");

    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
      
    echo "Name: " . $name. "<br>";
	echo "Username: " . $username . "<br>";
	echo "Password: " . $password . "<br>";
     
$sql = "INSERT INTO registerwebsite (name, username, password)
VALUES ('$name', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "</br> New record created successfully";   

} else {
	
    echo "Error: " . "<br>" . $conn->error;
}

$conn->close();

?></center></div></section>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>