<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan database connection
include 'dblink.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $_POST['username'];
$password = $_POST['password'];

$mysqllogin = "SELECT * FROM admin WHERE username='$username' and password='$password'";
$cek = $conn->query($mysqllogin);
if ($cek->num_rows > 0) {
	$_SESSION['username'] = $username;
	header("location:adminannouncement.php");
} else {
    header("location:index.php?login=gagal");
}

?>
