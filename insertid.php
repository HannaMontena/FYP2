<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>MYCLUB System</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<style>
input[type=text], select {
width: 50%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
</style>
</head>
<body id="page-top">
     <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
     <div class="container">
     <a class="navbar-brand js-scroll-trigger" href="#page-top">MYCLUB System</a>
     <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
     Menu
     <div class="collapse navbar-collapse" id="navbarResponsive"></button>
     <ul class="navbar-nav ml-auto">
     <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
     <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
	 <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#About">bout</a></li>
     </ul></div></div>
     </nav>
      
     <header class="masthead bg-primary text-white text-center">
     <div class="container d-flex align-items-center flex-column">
     <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
     <h1 class="masthead-heading text-uppercase mb-0">MYCLUB System</h1>
     <div class="divider-custom divider-light">
     <div class="divider-custom-line"></div>
     <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
     <div class="divider-custom-line"></div></div>
	 </header>
				
     <section class="page-section" id="contact">
     <div class="container"><br><br><br><br><br><br>
     <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Insert Me</h2>
     <div class="divider-custom">
     <div class="divider-custom-line"></div>
     <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
     <div class="divider-custom-line"></div>
     </div>
                
	 <div class="row">
     <div class="col-lg-8 mx-auto">
     <form id="contactForm" name="sentMessage" novalidate="novalidate"><center>
     <div class="control-group">
     <div class="form-group floating-label-form-group controls mb-0 pb-2">
     <label>Name</label>
     <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
     <p class="help-block text-danger"></p></div>
     </div>
	
	
	 <div class="control-group">
     <div class="form-group floating-label-form-group controls mb-0 pb-2">
     <label>Id</label>
     <input class="form-control" id="name" type="text" placeholder="Id" required="required" data-validation-required-message="Please enter your Id." />
     <p class="help-block text-danger"></p></div></div>
							
     <br/>
     <div id="success"></div>
     <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div></center>
     </form></div></div></div></section>
		
</body>
</html>