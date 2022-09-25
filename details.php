<?php 
session_start(); 
include "db_conn.php";
$the_type = $_POST['type'];
$the_breed = $_POST['breed'];
$the_name = $_POST['name'];
$the_gender = $_POST['gender'];
$the_username = $_POST['n'];
$the_email= $_POST['email'];
$the_num = $_POST['num'];
$the_address = $_POST['address'];
$the_info = $_POST['info'];
$the_date=$_POST['date'];
$the_package=$_POST['package1'];
$n = rand();
$the_date=$_POST['date'];
$the_time=$_POST['time'];
$the_status='Appointment Confirmed';
$the_place=$_POST['dest'];

 $sql = "INSERT INTO bookings(type,breed,name,gender,package,date,time,orderid,user_name,email,num,address,info,status,dest) VALUES ('$the_type','$the_breed','$the_name','$the_gender','$the_package','$the_date','$the_time','$n','$the_username','$the_email','$the_num','$the_address','$the_info','$the_status','$the_place');";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
<h3 style="text-align: center;border: 5px solid black;padding: 2px;margin: 5px;"><br>THANK YOUR FOR CHOOSING US!<br><br>Your Appointment has been made successfully!<br>See you soon ;).<br><br></h3>

<h1 style="background-color: rgb(212, 30, 91);color: white;font-family: lucida sans-serif;text-align:center;">APPOINTMENT DETAILS</h1><br>
<h2 style="background-color:#F25287;font-family:times roman;color:white ;text-align: center;">YOUR DETAILS</h2>
<br>
<br>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-6">
    <h4>APPOINTMENT ID </h4>
    <h4>NAME</h4>
    <h4>PHONE NUMBER</h4>
    <h4>ADDRESS</h4>
    <h4>APPOINTMENT DATE </h4>
    <h4>APPOINTMENT TIME </h4>
    <h4>APPOINTMENT STATUS </h4>
    <h4>EMAIL</h4>
    <h4>AMOUNT TO BE PAID</h4>
    <h4>PLACE</h4>
    </div>
    <div class="col-sm-6">
        <?php
        echo 
        "<h4>".": ".$n.
        "<h4>".":  ".$the_username."<br>"."</h4>".
       "<h4>".":  ". $the_num."<br>"."</h4>".
        "<h4>".":  ".$the_address."<br>"."</h4>".
        "<h4>".":  ".$the_date."<br>"."</h4>".
        "<h4>".":  ".$the_time."<br>"."</h4>".
        "<h4>".":  ".$the_status."<br>"."</h4>".
        "<h4>".":  ".$the_email."<br>"."</h4>".
        "<h4>".":  ".$the_package."<br>"."</h4>".
        "<h4>".": ".$the_place;
        ?>
    </div>
</div>

<br>
<hr>
<h2 style="background-color:#F25287;font-family:times roman;color:white ;text-align: center;">PET DETAILS</h2>
<br>
<div class="container-fluid">
<div class="row">
    <div class="col-sm-6">
    <h4>TYPE:</h4>
    <h4>BREED:</h4>
    <h4>NAME:</h4>
    <h4>GENDER:</h4>

    </div>
    <div class="col-sm-6">
        <?php
        echo "<h4>".":  ". $the_type."<br>"."</h4>".
       "<h4>". ":  ".$the_breed."<br>"."</h4>".
        "<h4>".":  ".$the_name."<br>"."</h4>".
        "<h4>".":  ".$the_gender."<br>"."</h4>"
        
?>


 
</div>
</div> 
<br>
<br>
<center>
<button style="background-color:#F25287;color:white";> <a href="http://localhost:4200/about" style="color:white;">GO TO HOME</a></button><br>
<br>
<button style="background-color:red;color:white";> <a href="cancel.php" style="color:white;">CANCEL APPOINTMENT</a>
 
</center>
