<?php 
require('dblink.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM green WHERE id=$id";
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: admingreen1.php");
?>