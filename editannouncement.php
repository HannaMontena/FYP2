<?php
require('dblink.php');
$id=$_REQUEST['id'];
$query = "SELECT * from academic where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Akademik</title>
<link rel="stylesheet" href="final.css" />
<style>
a:link, a:visited {
  background-color: #ecc6c6;
  color: black;
  border: 2px solid brown;
  padding: 7px 13px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #732626;
  color: white;
}
</style>
</head>
<body>
<div class="form">
<div class="about">
<p><a class href="academic.php">Lihat Data Akademik</a> 
<div>

<h1>Kemaskini Data</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$year =$_REQUEST['year'];
$result = $_REQUEST['result'];
$update="update academic set year='".$year."',
result='".$result."' where id='".$id."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Data Berjaya Dimasukkan. </br></br>
<a href='academic.php'>Lihat Data Yang Dimasukkan</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="year" placeholder="Masukkan Tahun" 
required value="<?php echo $row['year'];?>" /></p>
<p><input type="text" name="result" placeholder="Masukkan Keputusan" 
required value="<?php echo $row['result'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</div>
<br>

</body>
</html>