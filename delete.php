<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
  
    </style>
</head>
<body>

<?php
	include 'menu.php';
    include 'header.php';
    require 'dblink.php';
	echo '<br><br><br>';
    ?> 
    <?php
 $scode = NULL;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $scode = test_input($_POST["scode"]); 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="transbox">
<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <h2 style="color:black;">Delete Subject </h2>
  <p><b>Subject Code:</b></p><input type="text" name="scode">
  
  <br><br>

<input type="submit" name="delete" value="delete" class="delete"> <br><br><br>


<?php
 if (isset ($_POST['delete'])){
$sql = "DELETE FROM subject WHERE scode='$scode'";
if (mysqli_query($conn, $sql)) {
      echo "Delete successful";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 }
?>
</center>
</div>

<?php
include 'footer.php';
?>
</body>
</html>