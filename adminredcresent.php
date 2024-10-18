<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Admin Red Cresent</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<script type="text/javascript">
function saveEdits8() {

var editElem8 = document.getElementById("edit8");

var userVersion8 = editElem8.innerHTML;

localStorage.userEdits8 = userVersion8;

document.getElementById("update").innerHTML="Edits saved!";

}
function checkEdits8() {

if(localStorage.userEdits8!=null)
document.getElementById("edit8").innerHTML = localStorage.userEdits8;
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
</style>
</head>

<body id="page-top" onload="checkEdits8()">
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
         <h2 class="page-section-heading text-center text-uppercase text-white">RED CRESENTS</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>
       
                
      
       <div class="w3-center">
        </div>

      
      <img class="img-fluid" src="assets/img/portfolio/pbsm.jpg" alt="" />
	  
	  <p><h1>Our Goals</h1> <div id="edit8" contenteditable="true">
	  Oriented to raise awareness among students about how to be a knowledgeable and disciplined volunteer member. 
	  Through Red Cresent, students will be exposed to methods to provide assistance and carry out treatment on victims 
	  either when they are calm or in a state of anxiety.</p>
	  
	  <hr>

      <h1>7 Principles</h1> 
	  1. Humanity<br>
		• Aims to provide non -discriminatory assistance to the injured and to prevent and alleviate suffering wherever it exists. The purpose is to protect life and health. Fostering understanding, friendship, cooperation and lasting peace among human beings.<br><br>
	  2. Saksama<br>
		• Does not discriminate race, religion, rank and political persuasion in its activities. Its basic purpose is to alleviate the suffering of individuals and give priority to the most serious cases of emergencies<br><br>
	  3. Neutrality<br>
		• To gain public trust in it. The Association does not side with any hostile party and does not participate in disputes of a political, racial, religious or ideological nature.<br><br>
	  4. Freedom<br>
		• Although an additional body to public authorities and subject to national law. The association still maintains its autonomy so that it can act according to the principles of the movement.<br><br>
	  5. Volunteer<br>
		• It is a voluntary body that is not motivated by any profit -seeking purpose<br><br>
      6. Unite<br>
		• There is only one Red Cross or Red Crescent Society in a country. This association should be open to all parties and its activities cover the whole country.<br><br>
      7. Universal<br>
		• The International Red Cross and Red Crescent Movement covers the whole world, where all Societies have the same status and responsibilities and help each other.</p>
      
	  
	  <hr>
	
	<br>
	
	<div class="card">
	<div class="container">
    <h4><b>En David Bekcham</b></h4> 
    <p>Leader of Red Cresent</p> 
	</div>
	</div><br>

	
	<div class="card">
	<div class="container">
    <h4><b>Pn Samsiah</b></h4> 
    <p>Assistant Leader of Fire Cadet</p> 
	</div>
	</div>
	<hr>
	
	  
	  </div><center><input type="button" class="button1" value="Save Edit" onclick="saveEdits8()"/><div id="update"></center><br></div></div>
	 <center><a href="adminredcresent1.php" class="button">View</a></div></form>
      </div>
      </div>
      </section>
	  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
	  
	  
</body>
</html>