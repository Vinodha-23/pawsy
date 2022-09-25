<?php 
session_start(); 
include "db_conn.php";
$_name=$_POST['name'];
$_mail=$_POST['mail'];
$_query=$_POST['query'];

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

$sql0 = "INSERT INTO queries(query,name,mail) VALUES('$_name','$_mail','$_query');";
$result = mysqli_query($conn, $sql0);
?>

<h1>WE'll contact you shortly</h1>