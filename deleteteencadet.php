<?php 
require('dblink.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM teencadet WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: adminteencadet1.php");
?>