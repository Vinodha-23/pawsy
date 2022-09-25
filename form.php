<?php 
session_start(); 
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
</head>
<div class="row" class="form">
    <div class="col-sm-7">
        <body>
            <form method="POST"
            action="forms.php"
            enctype="multipart/form-data">
        ENTER YOUR NAME:<br><input type="text"  placeholder="Your name.." name="name"><br><br>
        ENTER YOUR ID:<br><input type="text" placeholder="Your mail id.." name="mail"><br><br>
        ENTER YOUR NUMBER:<br><input type="text" placeholder="Your phone number.." name="number"><br><br>
       ENTER YOUR QUERY:<br> <textarea placeholder="Type your message here.." name="query" style="height:200px;width:400px;"></textarea>
       <br>
       <br>
    <button type="submit"> submit</button>
    <br>
    <br>
     </form>

     <br>
     </body>