<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>LOGIN </title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<style>

.Password{
	position:relative;
	left:9px;
	top:-9px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}
.Username{
	position:relative;
	left:9px;
	top:-9px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

button{
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
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="announcement.php">ANNOUNCEMENT</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">LOGIN</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registerweb.php">REGISTER</a></li>

      </ul>
      </div>
      </div>
      </nav>
    	<?php 
	    
	
	if(isset($_GET['login'])){
		if($_GET['login']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>   

        <section class="page-section" id="contact">
        <div class="container"><br><br>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">LOGIN</h2>
        <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
        </div>
                
        <div class="row">
        <div class="col-lg-8 mx-auto">
        <form action="cek_login_admin.php" method="post"><center>
        
			
		<h4 style='color:black;'class="username">USERNAME :</h4><br>
		<input class="Username" type="text" name="username" placeholder="username  .." required="required"><br><br>
		
		
		<h4 style='color:black;'class="password">PASSWORD :</h4><br>
		<input class="Password" type="text" name="password" placeholder="password .." required="required"><br><br>

		
		<button type="submit">Submit</button></center>
        </form></div></div></div>
        </section>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
		
</body>
</html>