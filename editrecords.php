<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Edit</title>
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

.Name{
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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">MYCLUB SYSTEM</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
      
        <section class="page-section portfolio" id="portfolio">
        <div class="container"><br><br><br><br><br><br>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edit:</h2>
        <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
        </div>
<?php

	require 'dblink.php';
	
?>	

<?php

$id=$_REQUEST['id'];
$query = "SELECT * from registerwebsite where name='".$name."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>


<center><h1>Update Record</h1><br>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$username =$_REQUEST['username'];
$password =$_REQUEST['password'];

$update="update registerwebsite set name='".$name."',
username='".$username."', password='".$password."'";
mysqli_query($conn, $update) or die (mysqli_error($conn));
$status = "Record Updated Successfully. </br></br>";

echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" class="Name"  name="name" placeholder="Enter name" 
required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" class="Username"  name="username" placeholder="Enter username" 
required value="<?php echo $row['username'];?>" /></p>
<p><input type="text" class="Password"  name="password" placeholder="Enter password" 
required value="<?php echo $row['password'];?>" /></p>
<p><button type="submit">Update</button></p>
</form></center>
<?php } ?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>

</body>
</html>