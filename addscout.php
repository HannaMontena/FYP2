<!DOCTYPE html>
<html lang="en">
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Add</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
		<style>
.button{
    background-color:#3BAF9F;
    display:block;
    margin:10px 0px 0px 20px;
    text-align:right;
    border-radius:12px;
    border:2px solid #366473;
    padding:14px 50px;
    outline:none;
    color:white;
    cursor:pointer;
    transition:0.15px;
}
button:hover{
	background-color:#5390F5;
}	

.name{
	position:relative;
	left:9px;
	top:8px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

.classroom{
	position:relative;
	left:9px;
	top:8px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

.age{
	position:relative;
	left:9px;
	top:8px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

.gender{
	position:relative;
	left:9px;
	top:8px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}
.association{
	position:relative;
	margin-left:50px;
	top:8px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

.option{
	position:relative;
	left:8px;
	top:-9px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:20px;
}	

		</style>
</head>
<body>
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
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="adminannouncement.php">ANNOUNCEMENT</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="adminpage.php">VIEW RECORD</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admincategory.php">CATEGORY</a></li>
	  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
		
		 <section class="page-section" id="contact">
        <div class="container"><br><br>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">EDIT</h2>
        <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
        </div>
<?php

    require 'dblink.php';
    ?> 
	
	
    <?php
$name = $age = $classroom = $gender = $association = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
	$age = $_POST["age"];
	$age = $_POST["level"];
	$classroom = $_POST["classroom"];
	$gender = $_POST["gender"];
	$gender = $_POST["year"];


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <h4 >Name :</p></h4><br><br>
   <input class="name" type="text" style='text-transform:uppercase; 'name="name" required="required"><br></center>
		</div>
  	<center><h4 style='color:black;' class="age">Age:</h4><br>
	   <select class="option" name="age">
	   <option>10</option>
	   <option>11</option>
	   <option>12</option>
       </select><center>
	   
	<center><h4 style='color:black;' class="level">Level:</h4><br>
	   <select class="option" name="level">
	   <option>4</option>
	   <option>5</option>
	   <option>6</option>
       </select><center>

 <center><h4 style='color:black;' class="classroom">Classroom:</h4><br>
	   <select class="option" name="classroom">
       <option>Setia</option>
	   <option>Maju</option>
	   <option>Jaya</option>
       </select><center>
	   
	    <center><h4 style='color:black;' class="name">Gender:</h4><br>
	   <select class="option" name="gender">
       <option>Boy</option>
	   <option>Girl</option>
       </select><center>
	   
	    <center><h4 style='color:black;' class="name">Year:</h4><br>
	   <select class="option" name="year">
       <option>2024</option>
	   <option>2025</option>
	   <option>2026</option>
       </select><center>
	  
      

  <input type="submit" name="submit" value="Submit" class="button"> 
  <br><br>
<?php
 if (isset ($_POST['submit'])){
$sql = "INSERT INTO scout (name, age,level, classroom, gender,year) VALUES ('$name','$age','$level','$classroom','$gender','$year')";
if (mysqli_query($conn, $sql)) {
      echo "$name ";
	  echo "$age ";
	  echo "$level ";
	  echo "$classroom ";
	  echo "$gender ";
	    echo "$year ";
	  
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 }
?>
</center>
</div>
</body>
</html>