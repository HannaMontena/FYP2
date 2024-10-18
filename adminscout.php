<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Admin Scout</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<script type="text/javascript">
function saveEdits0() {

var editElem0 = document.getElementById("edit0");

var userVersion0 = editElem0.innerHTML;

localStorage.userEdits0 = userVersion0;

document.getElementById("update").innerHTML="Edits saved!";

}
function checkEdits0() {

if(localStorage.userEdits0!=null)
document.getElementById("edit0").innerHTML = localStorage.userEdits0;
}

</script>
<style>
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
 background-color:white;
 color:black;
  width: 60%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>

<body id="page-top" onload="checkEdits0()">
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
         <h2 class="page-section-heading text-center text-uppercase text-white">SCOUT</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>
                
       
       <div class="w3-center"></div>
	   
      <img class="img-fluid" src="assets/img/portfolio/scout.png" alt="" /><div id="edit0" contenteditable="true">
      <p><h1>Our Goals !</h1><br>• Guiding a balanced group of teenagers in terms of cultivating enthusiasm and nurturing a way of thinking through non -formal education.<br><br>
      <p>• Nurture young people who are responsible to society, their country and the international community.</p>• Scouts aims to build and develop young people’s confidence, sense of adventure and outdoor skills, as well as encouraging them to explore their beliefs and attitudes and be creative.  It offers them the independence to put these skills into practice at camps and even on international trips.
		
	  <hr>
		
	 </br><h1>Activities</h1>
	  <br>Scouts are encouraged to take part in a wide range of activities as part of their programme including traditional Scouting skills, such as camping, survival and cooking, as well as a wider spectrum of adventurous activities, from abseiling to zorbing. Participation rather than meeting set standards is the key approach, and there are a number of badges and awards that Scouts can gain to recognise their achievements.
      
	  <hr>
	  
	 </br><h1>Scout Laws</h1>
	  The Scout Law<br>
	1.    A Scout is to be trusted.<br>
	2.    A Scout is loyal.<br>
	3.    A Scout is friendly and considerate.<br>
	4.    A Scout belongs to the worldwide family of Scouts.<br>
	5.    A Scout has courage in all difficulties.<br>
	6.    A Scout makes good use of time and is careful of possessions and property.<br>
	7.    A Scout has self-respect and respect for others.<br>
	
	<hr>
	
	<br>
	<div class="card">
	<div class="container">
    <h4><b>En Nizam</b></h4> 
    <p>Leader of Scout</p> 
	</div>
	</div><br>

	
	<div class="card">
	<div class="container">
    <h4><b>En Zamarul</b></h4> 
    <p>Assistant Leader of Scout</p> 
	</div>
	</div>
	
	
	</div><center><input type="button" class="button1" value="Save Edit" onclick="saveEdits0()"/><div id="update"></center><br></div></div>
	<center><a href="adminscout1.php" class="button">View</a></center></div>
      </section>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
	  
</body>
</html>