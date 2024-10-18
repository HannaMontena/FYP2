<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>index</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #47d6cf;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #28bc94;
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
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Goclub Champ</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">News</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#page-top">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
                <h1 class="masthead-heading text-uppercase mb-0">GOCLUB Champ</h1>
				<div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div></div>
		 <a class="btn btn-xl btn-outline-light" href="login.php">
        Teacher
        </a><br><br>
		<a class="btn btn-xl btn-outline-light" href="login2.php">
        Admin</a></div></div>
		</div>
        </header>
		

 <!-- News Section-->
        <section class="page-section portfolio" id="portfolio">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">NEWS</h2> 
                  <center><br><br><button type="button"
					onclick="document.getElementById('demo').innerHTML = Date()">
						Click me to display Date and Time.</button><br><p id="demo"></p></center><br>
							<div class="row justify-content-center">
								<?php include 'dblink.php';?>
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
								<tr>
								<td align="center"><?php echo $count; ?></td>
								<td align="center"><?php echo $row["information"]; ?></td>
								<td align="center"><?php echo $row["teacher"]; ?></td>
								<td align="center"><?php echo $row["date"]; ?></td>
								<?php $count++; } ?>
							</table>
						</div> 
					</div>
         </section>
		
		
<!-- Footer-->
<section id="contact">
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Sekolah Kebangsaan Junjung
                            <br />
                            09000 Kulim, Kedah.
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://skjunjong.blogspot.com/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contact</h4>
                        <p class="lead mb-0">
                            You can contact for more details about our school.<br>
                            <a> Tel : 04-4871050</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>                   
		</section>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
