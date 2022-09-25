<?php 
session_start(); 
include "db_conn.php";

     $username=$_POST['uname'];
     $pass=$_POST['oldpass'];
     $newpass=$_POST['newpass'];
     $confirm=$_POST['confirm'];
     $password=md5($confirm);
     $sql = "SELECT uname FROM user WHERE uname='$username' and password='$pass'";
     $result = mysqli_query($conn, $sql);
     if($result){
          if($newpass==$confirm){
           $sql1 =   "UPDATE user set `password`='$password' WHERE uname='$username'";
     $result0 = mysqli_query($conn, $sql1);

          }
          if($result0){
               header("location:login.php");
          }
     }
?>