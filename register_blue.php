<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Blue</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
	<style type="text/css">
form{
	padding:10px;
}
#name{
	width:100%;
	height:100px;
}
.name{
	margin-top:30px;
	width:150px;
	color:white;
	font-family:18px;
	font-weight:700px;
}
 .uppercase {
            text-transform: uppercase;
        }
.firstname{
	position:relative;
	top:-9px;
	line-height:40px;
	border-radius:6px;
	padding:0 40px;
	font-size:16px;
}

.class1{
	position:relative;
	top:-9px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

.classroom{
	margin-top:30px;
	width:125px;
	color:white;
	font-family:18px;
	font-weight:700px;
	
}

.gender{
	margin-left:2px;
	margin-top:30px;
	width:125px;
	color:white;
	font-family:18px;
	font-weight:700px;
	
}


.option{
	position:relative;
	left:8px;
	top:-9px;
	line-height:60px;
	border-radius:6px;
	padding:0 80px;
	font-size:20px;
}	
.option option	{
	font-size:25px;
}
button{
    background-color:#3BAF9F;
    display:block;
    margin:30px 0px 0px 20px;
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

</style>
</head>

<body id="page-top">
       
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GOCLUB CHAMP </a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
	  	   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="attendanceblue.php">ATTENDANCE</a>
	    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="report.php">REPORT</a>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
	
		<section class="page-section portfolio" id="portfolio">
        <div class="container"><br><br>
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Blue</h2>
        <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
        </div><div class="container d-flex align-items-center flex-column">
		
		<div class="main">
		<form action="register_blue1.php" method="post">
		<div id="name">
		<center><h4 style='color:black; 'class="name">Name:</h4><br>
		<input class="firstname" type="text" style='text-transform:uppercase; 'name="name" required="required"><br></center>
		</div><br><br>
		
		
	 <center><h4 style='color:black;' class="level">Level:</h4><br>
	   <select class="option" name="level">
	   <option> 4</option>
	   <option> 5</option>
	   <option> 6</option>
       </select><center>

 <center><h4 style='color:black;' class="name">Gender:</h4><br>
	   <select class="option" name="gender">
       <option>Boy</option>
	   <option>Girl</option>
       </select><center>
	   
 <center><h4 style='color:black;' class="classroom">Classroom:</h4><br>
	   <select class="option" name="classroom">
       <option>Setia</option>
	   <option>Maju</option>
	   <option>Jaya</option>
       </select><center>
	   
	  
	    <center><h4 style='color:black;' class="name">Year:</h4><br>
	   <select class="option" name="year">
       <option>2024</option>
	   <option>2025</option>
	   <option>2026</option>
       </select><center>
	  
      
	   <center>
	   <button type="submit">Submit</button>
	   </center>
	   </form></div>
	   
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>

</body>
</html>	