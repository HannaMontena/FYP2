<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Red</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<script>
function checkEdits14() {

//find out if the user has previously saved edits
if(localStorage.userEdits14!=null)
document.getElementById("edit14").innerHTML = localStorage.userEdits14;
}

</script>
<style>

button{
background-color:#2c3e50;
display:block;
margin:20px 0px 0px 20px;
text-align:center;
border-radius:12px;
border:1px solid #366473;
padding:14px 110px;
outline:none;
color:white;
cursor:pointer;
transition:0.25px;
}

button:hover{
background-color:#5390F5;
}



.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  background-color:white;
 color:black;
  width: 70%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}


</style>
</head>

<body id="page-top"  onload="checkEdits14()">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MYCLUB SYSTEM</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
	  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="attendancered.php">ATTENDANCE</a>
	  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="report.php">REPORT</a>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>

        <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container"><br><br>
         <h2 class="page-section-heading text-center text-uppercase text-white">RED</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>
		
       <form action="register_red.php" method="post">
       <div class="w3-center"><div class="w3-center"><div id="edit14">
       <h3>Dato Bahaman</h3>
       <h5>Slogan<span class="w3-opacity">"Merdeka Dengan Darah"</span></h5>
       <br>

      
      <img class="img-fluid" src="assets/img/portfolio/red1.jpg" alt="" />
      <center><p><h1>Team</h1><br>
	  <strong>Coordinator</strong><br>
	  	 
	 <div class="card">
	 <div class="container">
     <b>Encik Abu Bin Bakar</b>
	 </div>
	 </div><br>

	 <strong>Leader</strong><br>
	  
	 <div class="card">
	 <div class="container">
     <b>Pn Saniyah Binti Salleh</b> 
	 </div>
	 </div><br>
	 
    <strong>Assistant Leader</strong><br>
	
	
	 <div class="card">
	 <div class="container">
     <b>Pn Nor Alia Binti Nasir</b> 
	 </div>
	 </div><br>
	 
	 
      <strong>Committee Members</strong><br>
	   <div class="card">
	 <div class="container">
     <p>Pn Siti Zaleha Binti Yusof</p> 
	 <p>Pn Paziah Binti Ismail</p> 
	 <p>Pn Nurul Binti Saad</p> 
	 <p>Cik Tanusha A/P Subramaniam</p> 
	 <p>Cik Syuhada Binti Mokti</p> 
	 </div>
	 </div><br>
	 
	 </div></div></div>
     <center><button type="submit">Register</button></form></center>
      </section>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
	  
</body>
</html>