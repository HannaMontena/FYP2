<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Admin English</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<script type="text/javascript">
function saveEdits4() {

var editElem4 = document.getElementById("edit4");

var userVersion4 = editElem4.innerHTML;

localStorage.userEdits4 = userVersion4;

document.getElementById("update").innerHTML="Edits saved!";

}
function checkEdits4() {

if(localStorage.userEdits4!=null)
document.getElementById("edit4").innerHTML = localStorage.userEdits4;
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:#2c3e50;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  background-color:white;
 color:black;
  width: 80%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>

<body id="page-top" onload="checkEdits4()">
      
	  
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
         <h2 class="page-section-heading text-center text-uppercase text-white">ENGLISH</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>
							

    <div id="edit4" contenteditable="true">
	<table>
	<tr>
    <th>Title</th>
    <th>Activities</th>
    <th>Meeting</th>
	</tr>
	
	<tr>
    <td>General Meeting</td>
    <td>
	• New member registration<br>
	• Chairman speech<br>
	• Present and confirm the minutes of the meeting the past<br>
	• Present a report years<br>
	• Present and financial reports<br>
	• Dissolution of the committee old and appointed a chairman temporary<br>
	• Appoint new committees<br>
	• Presentation of motions</td>
    <td>1</td>
	</tr>
	
	<tr>
    <td>Cheer up the notice board Malay Language Society</td>
    <td>• Students work in a grouped for decorate and cheer notice board with paste the <br>organization chart associations, proverbs, poems, verses, poems, biodataand <br>contributions of language figures, and language terms</td>
    <td>2</td>
	</tr>
	
	<tr>
    <td>Language Arts </td>
    <td>• Student can developed creativity and improve their self-esteem by presenting their work art.</td><br>
    <td>3</td>
	</tr>
	
	<tr>
    <td>Storytelling</td>
    <td>• Held a CD presentation storytelling <br>
		• Talking about Story-telling competition has been watched<br>
		• Talk with unpretentious way and interested.<br>
		• Storytelling experts based on the material that has beenprovided by them</td>
    <td>4</td>
	</tr>
	
	<tr>
    <td>Speeches / Lectures</td>
    <td>• Give a speech / lecture <br>
		• Talk about speeches / lectures that have been watched<br>
		• Members deliver speeches based on the material that has been provided by them<br>
		• Deliver a speech with the right and interesting way</td>
    <td>5</td>
	</tr>
	
	<tr>
    <td>Singing</td>
    <td>• Pupils are divided into a few groups<br>
		• Students are given freedom choose the songs that fit like a patriotic song, folk songs, children's songs or any song which is moral and teaching</td>
    <td>6</td>
	</tr>
  
	<tr>
    <td>Acting</td>
    <td> • Each group will make a presentation in English. Each member should play a role as an actor<br>
		 • The best performance will be announced as the winner<br>
		
    <td>7</td>
	</tr>
	
	</table>
	<br><br>
   <center>
	<div class="card">
	<div class="container">
    <h4><b>Pn Maisara</b></h4> 
    <p> Leader of English Teacher</p> 
	</div>
	</div><br>

	
	<div class="card">
	<div class="container">
    <h4><b>Pn Zainab</b></h4> 
    <p>English Teacher</p> 
	</div>
	</div><center><br>
	
	</div><br><center><input type="button" class="button1" value="Save Edit" onclick="saveEdits4()"/><div id="update"></center><br></div></div>
	<center><a href="adminenglish1.php" class="button">View</a></center></div>
    </section>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <script src="js/scripts.js"></script>
	  
	  
</body>
</html>