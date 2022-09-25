<?php 
session_start(); 
include "db_conn.php";
$_customer=$_SESSION['name'];
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

$sql0= "SELECT * FROM user INNER JOIN bookings ON user.uname=bookings.user_name WHERE bookings.user_name='$_customer'";
$result = mysqli_query($conn, $sql0);
?>

<h2 style="text-align:center;background-color: palevioletred;color:white;">HEY <?php echo $_customer; ?>! THANK YOU FOR ALWAYS CHOOSING US :) <br><br>YOUR APPOINTMENTS!</h2> 
<hr style="border-top:3px dotted black;">
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) { ?>
 <head>
  <style>
    <link rel="stylesheet" type="text/css" href="style.css">
  </style>
  <body style="background-color: #FFB6B9;">
          <h4><b>APPOINTMENT ID:</b> &nbsp;<?php echo $row['orderid']; ?></h4>
          <h4><b>APPOINTMENT STATUS:</b> &nbsp;<?php echo $row['status']; ?></h4>
          <h4><b>PET NAME:</b> &nbsp;<?php echo $row['name']; ?></h4>
          <h4><b>MAIL:</b>&nbsp;<?php echo $row['email']; ?></h4>
          <h4><b>APPOINTMENT DATE:</b>&nbsp;<?php echo $row['date']; ?></h4>
          <h4><b>APPOINTMENT TIME:</b>&nbsp;<?php echo $row['time']; ?></h4>
          <h4><b>AMOUNT:</b>&nbsp;<?php echo $row['package']; ?></h4>
          <hr style="border-top:3px dotted black;">
</p>
      
<?php
   }
}else{
  echo "o results";
}
?>

