<?php 
require('dblink.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM blue WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: adminblue1.php");
?>