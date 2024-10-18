<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Announcement</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
		
<style>
table{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
background-color: white;
color:black;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 10px;
}

table tr:nth-child(even){background-color: #ccc;}

table tr:hover {background-color: white;}

table th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align:center;
  background-color: #2c3e50;
  color: white;
}
		


button{
    background-color:#2c3e50;
    display:block;
    margin:10px 0px 0px 20px;
    text-align:right;
    border-radius:12px;
    border:2px solid #366473;
    padding:14px 20px;
    outline:none;
    color:white;
    cursor:pointer;
    transition:0.15px;
	color:white;
}
button:hover{
	background-color:#3BAF9F;
}	
</style>

    </head>
	

		<body id="page-top" >
        
         <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">MYCLUB SYSTEM</a>
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
		
		 <section class="page-section bg-primary text-white mb-0" id="about">
         <div class="container"><br><br>
         <h2 class="page-section-heading text-center text-uppercase text-white">Announcement</h2>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
         </div>
		 
<center><button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button><br>
<p id="demo"></p></center><br>
		 


<?php 
include 'dblink.php';

?>

     
<table>

  <tr>
    <th>No</th>
   <th>Information</th>
    <th>Teacher</th>
    <th>Date</th>
  </tr>
<?php 

$count=1;
$sel_query="Select * from announcement;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)){ ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["information"]; ?></td>
<td align="center"><?php echo $row["teacher"]; ?></td>
<td align="center"><?php echo $row["date"]; ?></td>

<?php $count++; } ?>
</table></div>  
</section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>

