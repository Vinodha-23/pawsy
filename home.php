<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {
     header("Location:http://localhost:4200/about"); 
}else{
     header("Location: index.php");
     exit();
}
 ?>