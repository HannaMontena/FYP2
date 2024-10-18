<!DOCTYPE html>
<html>
<head>
<title>Registration English Form</title>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<style>

table, td, th {  
  border: 1px solid black;
  text-align: left;
  background-color:white;
}

table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body id="page-top">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GOCLUB CHAMP</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
	   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="attendanceenglish.php">ATTENDANCE</a>
	    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="report.php">REPORT</a>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
	

        <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container"><br><br>
         <h2 class="page-section-heading text-center text-uppercase text-white">Your Record</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>
		
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
	$level = $_POST["level"];
	$classroom = $_POST["classroom"];
	$gender = $_POST["gender"];
	$year = $_POST["year"];
	
	
	
   
	echo "<center><div class='table-responsive'>";
	echo "<table class='table table-bordered table-striped'>";
	echo "<tr><th style='text-align:right;width:40%;'>Name: </th><td style='text-align:left;width:60%; text-transform:uppercase;'> ". $name." </td></tr>";
	echo "<tr><th style='text-align:right;width:40%;'>Level : </th><td style='text-align:left;width:60%;'> ". $level. " </td></tr>";
	echo "<tr><th style='text-align:right;width:40%;'>Classroom : </th><td style='text-align:left;width:60%;'> ". $classroom. " </td></tr>";
	echo "<tr><th style='text-align:right;width:40%;'>Gender: </th><td style='text-align:left;width:60%;'> ". $gender. " </td></tr>";
	echo "<tr><th style='text-align:right;width:40%;'>Year: </th><td style='text-align:left;width:60%;'> ". $year. " </td></tr>";
	echo "</table>";
    echo "</div></center>";
     
$sql = "INSERT INTO bi(name,level,classroom,gender,year)
VALUES ('$name','$level','$classroom','$gender','$year')";

if ($conn->query($sql) === TRUE) {
		echo "<center>";
    echo "</br><h2 style='color:white;'> New record created successfully !!<h2>";   

} else {
	
    echo "Error: " . "<br>" . $conn->error;
}

$conn->close();
	echo "</center>";


?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>

</body>
</html>