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
    <title>Student Attendance</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
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
				   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="attendancered.php">ATTENDANCE</a>
				   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="report.php">REPORT</a>
                   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section portfolio" id="portfolio">
        <div class="container"><br><br>
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">ATTENDANCE:</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <center>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/red.png" alt="" />
                        </div>
                        <div class="text-center mt-4">
                        </div>
                    </div>
                </div>
            </center>
            <form action="tblattendace.php" method="post">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required><br><br>
 <table>
                    <tr>
                        <th>Student Name</th>
						<th>Level</th>
						<th>Classroom</th>
						<th>Gender</th>
						<th>Year</th>
					
                        <th>Attendance Status</th>
                    </tr>

                    <?php
                    // Include the database connection file
                    include 'dblink.php';

                    // Fetch data from the database
                    $sql = "SELECT name,level, classroom, gender, year FROM red";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td style='text-transform:uppercase;'>" . htmlspecialchars($row['name']) . "</td>";
							echo "<td>" . htmlspecialchars($row['level']) . "</td>";
							echo "<td>" . htmlspecialchars($row['classroom']) . "</td>";
							echo "<td>" . htmlspecialchars($row['gender']) . "</td>";
							echo "<td>" . htmlspecialchars($row['year']) . "</td>";
							
                            echo '<td>
                                <label><input type="checkbox" name="status[' . htmlspecialchars($row['name']) . ']" value="Present"> Present</label>
                                <label><input type="checkbox" name="status[' . htmlspecialchars($row['name']) . ']" value="Absent"> Absent</label>
                            </td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2'>No students found</td></tr>";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                </table><br>

                <input type="submit" value="Submit Attendance">
            </form>
        </div>
    </section>
</body>
</html>