<?php 
session_start(); 
include "db_conn.php";
?>
<h2 style="margin-top: 8cm;text-align: center;">To Cancel Appointment :(</h2>
<h3 style="text-align: center;">Please enter your Appointment id<h3>
<h4 style="text-align: center;">You can find your Appointment id in Appointments(profile>appointments)<h4>
<form action="canceled.php" method="post">
<h5 style="text-align: center;">APPOINTMENT ID:<br>
<input type="text" name="id" value="enter your id" style="text-align: center;"><br>
<br>
<button type="submit" value="Cancel Appointment" style="background-color: red;text-align:center;">CANCEL APPOINTMENT</button>
</form>


