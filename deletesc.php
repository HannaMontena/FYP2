<?php 
require('dblink.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM sc WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: adminscience1.php");
?>