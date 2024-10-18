<!DOCTYPE html>
<html lang="en">
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Admin Announcement</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
		<style>
body{background-color: #1abc9c;}

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

.button {
  background-color:  white;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="adminannouncement.php">ANNOUNCEMENT</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="adminpage.php">VIEW RECORD</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admincategory.php">CATEGORY</a></li>
	  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
		
		
         <div class="container"><br><br><br><br><br><br>
         <h1 class="page-section-heading text-center text-uppercase text-white">ANNOUNCEMENT</h1>
         <div class="divider-custom divider-light">
         <div class="divider-custom-line"></div>
         <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
         <div class="divider-custom-line"></div>
         </div>


<?php 
include 'dblink.php';

?>

     
<center><a href="addannouncement.php" class="button">Add</a><center><br>
<table>
  <tr>
    <th>No</th>
    <th>Information</th>
    <th>Teacher</th>
    <th>Date</th>
	 <th>Delete</th>
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
<td align="center">
<a href="deleteannouncement.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Confirm delete this announcement ?'); " >Delete</a>
</td>
</tr>
<?php $count++; } ?>
</table></div>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>