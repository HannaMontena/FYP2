<?php
require('dblink.php');
$id=$_REQUEST['id'];
$query = "SELECT * from announcement where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Profile</title>
<link rel="stylesheet" href="final.css" />
</head>
<body>
<div class="form">
<div class="about">
<p><a href="adminannouncement.php">Look Data Profile</a> 
<div>

<h1>New Data</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$information =$_REQUEST['information'];
$teacher = $_REQUEST['teacher'];
$date= $_REQUEST['date'];
$update="update announcement set information='".$information."',
teacher='".$teacher."', date='".$date."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Data Berjaya Dimasukkan. </br></br>
<a href='adminannouncement.php'>Lihat Data Yang Dimasukkan</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="information" placeholder="Masukkan Nama" 
required value="<?php echo $row['information'];?>" /></p>
<p><input type="text" name="teacher" placeholder="Masukkan No.Tel" 
required value="<?php echo $row['teacher'];?>" /></p>
<p><input type="text" name="date" placeholder="Masukkan Email" 
required value="<?php echo $row['date'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</div>
<br>

</body>
</html>