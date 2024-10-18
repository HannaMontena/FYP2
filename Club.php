<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" />
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

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
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
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
				
        <section class="page-section portfolio" id="portfolio">
        <div class="container"><br><br>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Club:</h2>
        <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
        </div>
		<center><h4>You can choose one CLUB</h4></center><br>
		<div class="row justify-content-center">
					          
        <div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
        <div class="portfolio-item-caption-content text-center text-white"><a href="english.php" class="button">English</a></div></div>
        <img class="img-fluid" src="assets/img/portfolio/english.png" alt="" /></div>
		<div class="text-center mt-4">
        </div>
		</div>
                 
		<div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
        <div class="portfolio-item-caption-content text-center text-white"> <a href="mathematic.php" class="button">Mathematic</a></div></div>
        <img class="img-fluid" src="assets/img/portfolio/mathematic.png" alt="" /></div>
		<div class="text-center mt-4">
        </div>
        </div>
					
		<div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
        <div class="portfolio-item-caption-content text-center text-white"><a href="history.php" class="button">History</a></div></div>
        <img class="img-fluid" src="assets/img/portfolio/history.png" alt="" /></div>
		<div class="text-center mt-4">
        </div>
		</div>
		
		<div class="col-md-6 col-lg-4 mb-5">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
        <div class="portfolio-item-caption-content text-center text-white"><a href="science.php" class="button">Science</a></div></div>
        <img class="img-fluid" src="assets/img/portfolio/science.png" alt="" /></div>
		<div class="text-center mt-4">
		</div>
        </div>
                 
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