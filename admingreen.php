<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Admin Green</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<script type="text/javascript">
function saveEdits16() {

var editElem16 = document.getElementById("edit16");

var userVersion16 = editElem16.innerHTML;

localStorage.userEdits16 = userVersion16;

document.getElementById("update").innerHTML="Edits saved!";

}
function checkEdits16() {

if(localStorage.userEdits16!=null)
document.getElementById("edit16").innerHTML = localStorage.userEdits16;
}

</script>
<style>
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: #2c3e50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #2c3e50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
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

<body id="page-top" onload="checkEdits16()">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GOCLUB CHAMP</a>
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

        <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container"><br><br>
         <h2 class="page-section-heading text-center text-uppercase text-white">GREEN</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>

       <div class="w3-center">
	   <div id="edit16" contenteditable="true">
       <h3>Mat Kilau</h3>
       <h5>Slogan<span class="w3-opacity">" Kukuh Menggegar "</span></h5>
      <br>

      
      <img class="img-fluid" src="assets/img/portfolio/green.jpeg" alt="" />
     
	  <center><p><h1>Team</h1><br>
	  <strong>Coordinator</strong><br>
	  	 
	 <div class="card">
	 <div class="container">
     <b>Pn Hamisah Binti Abu</b>
	 </div>
	 </div><br>

	 <strong>Leader</strong><br>
	  
	 <div class="card">
	 <div class="container">
     <b>Pn Fauziah Binti Abdul</b> 
	 </div>
	 </div><br>
	 
    <strong>Assistant Leader</strong><br>
	
	
	 <div class="card">
	 <div class="container">
     <b>Pn Rosnah Binti Aziz</b> 
	 </div>
	 </div><br>
	 
	 
      <strong>Committee Members</strong><br>
	   <div class="card">
	 <div class="container">
     <p>Pn Ashalia Binti Md Zakir</p> 
	 <p>Pn Zuzila Binti Zainol</p> 
	 <p>Pn Lee Tin Tin</p> 
	 <p>Pn Mariam  Binti Osman</p> 
	 <p>Cik Musyidah Binti Abdullah</p> 
	 </div>
	 </div><br>
	 
	 </div><br><center><input type="button" class="button1" value="Save Edit" onclick="saveEdits16()"/><div id="update"></center><br></div></div>
      <center><a href="admingreen1.php" class="button">View</a></center></div></form>
      </section>
	  
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
	  
	  
</body>
</html>