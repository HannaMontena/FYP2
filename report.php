<!DOCTYPE html>
<html lang="en">
<head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
         <title>Co-Curricular Activity Report</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            color: black;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        .container1 {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        input[type="submit"], button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            display: block;
            width: 100%;
            border-radius: 4px;
            font-size: 16px;
            margin-top: 20px;
        }
        input[type="submit"]:hover, button:hover {
            background-color: #45a049;
        }
        .photo-preview {
            margin-top: 10px;
        }
        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
        }
        @media print {
            button {
                display: none;
            }
            .container {
                border: none;
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>
<body >
 <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GOCLUB CHAMP</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Category.php">CATEGORY</a></li>
	    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="report.php">REPORT</a>
      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
      </ul>
      </div>
      </div>
      </nav>
	  
	  <br><br><br><br><br><br>
	    <center><img src="assets/img/portfolio/KPM.png" style="width:200px;height:120px">
<img src="assets/img/portfolio/ts25.png" style="width:150px;height:120px">
<img src="assets/img/portfolio/skj.jpeg" style="width:150px;height:120px"></center>
        <div class="container"><br><br>
        <h2 class="page-sectioneheading text-center text-uppercase text-secondary mb-0"> Activity Report :</h2>
        <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
        </div>

    <div class="container1">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="activityName">Activity Name:</label>
                <input type="text" id="activityName" name="activityName" required>
            </div>

           <div class="form-group">
                <label for="category">Uniform / Club / Sport</label>
                <input type="text" id="category" name="category" required>
            </div>

            <div class="form-group">
                <label for="date">Date of Activity:</label>
                <input type="date" id="date" name="date" required>
            </div>
			
            <div class="form-group">
                <label for="attendance">Attendance Student:</label>
                <input type="text" id="attendance" name="attendance" required>
            </div>
             
              
            <div class="form-group">
                <label for="objective">Objectives:</label>
                <textarea id="objective" name="objective" required></textarea>
            </div>

            <div class="form-group">
                <label for="description">Activity Description:</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="photo">Upload Photo:</label>
                <input type="file" id="photo" name="photo" accept="image/*" required><br>
                <div class="photo-preview">
                    <img id="photoPreview" alt="Photo Preview1" style="display: none;">
                </div>
            </div>

            <button type="button" onclick="window.print()">Print Report</button>

    </div>

    <script>
        const photoInput = document.getElementById('photo');
        const photoPreview = document.getElementById('photoPreview');

        photoInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    photoPreview.src = e.target.result;
                    photoPreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>

</body>
</html>
