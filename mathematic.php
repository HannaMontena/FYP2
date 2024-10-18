<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Mathematic</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
<script>
function checkEdits3() {

//find out if the user has previously saved edits
if(localStorage.userEdits3!=null)
document.getElementById("edit3").innerHTML = localStorage.userEdits3;
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

<body id="page-top" onload="checkEdits3()">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MYCLUB SYSTEM</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
	  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="attendancemathematic.php">ATTENDANCE</a>
	  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="report.php">REPORT</a>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
		
		<section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container"><br><br>
         <h2 class="page-section-heading text-center text-uppercase text-white">MATHEMATIC</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
        </div>
				
	<form action="register_mm.php" method="post">			
	<div id="edit3">
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
    <td>Sudoku </td>
    <td>• The teacher conducts a closed ‘sudoku’ competition for members of the association.<br>
		• Students who can answer the questions will be selected to represent the school to the state-level competition.<br>
		• Encouraged to be given prizes to the successful students.</td><br>
    <td>3</td>
	</tr>
	
	<tr>
    <td>Game G- Math</td>
    <td>• Students are taught to play a kind of math game called G-Math.<br>
		• Students are divided into several groups according to the available G-Math set.<br>
		• Students compete together on their own</td>
    <td>4</td>
	</tr>
	
	<tr>
    <td>Get to know mathematical idol</td>
    <td>• Teachers introduce world mathematical figures from the past to the present who have contributed greatly to the development of mathematic<br>
		• Teacher introduces Islamic mathematical figures.</td>
    <td>5</td>
	</tr>
	
	<tr>
    <td> Clever mathematical techniques</td>
    <td>• The teacher gives simple techniques in calculations and formulas to get an A in the exam<br>
		• The teacher will give 2 questions and student need to try and solve it</td>
    <td>6</td>
	</tr>
  
	<tr>
    <td>Mathematic Arts</td>
    <td> • Student can build shape through their creativity without cut the paper<br>
		 • The beautiful and creative shape will be announced as the winner<br>
		
    <td>7</td>
	</tr>
	
	</table>
	<br><br>
   <center>
	<div class="card">
	<div class="container">
    <h4><b>En Kamal</b></h4> 
    <p> Leader of Mathematical Teancher</p> 
	</div>
	</div><br>

	
	<div class="card">
	<div class="container">
    <h4><b>Pn Faizah</b></h4> 
    <p>Mathematic Teacher</p> 
	</div>
	</div><br>
	 </div><br><center><button type="submit">Register</button> </center></div></form>
	</div><br>
    </section>
	
	
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
	  
	  
</body>
</html>