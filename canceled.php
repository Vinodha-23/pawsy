<?php 
session_start(); 
include "db_conn.php";

$_cancel=$_POST['id'];
 $sqll= "update bookings set `status`='cancelled' where orderid=$_cancel";
    $result = mysqli_query($conn, $sqll);
?>
<h2 style="text-align:center;margin-top:10cm;">Your Appointment Has Been Cancelled :(</h2>
<img src="https://c.tenor.com/xDxd1bVH4ccAAAAM/peach-peach-cat.gif" style="margin-left: 17cm;">
