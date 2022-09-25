<?php 
session_start(); 
include "db_conn.php";


if (isset($_SESSION['uname'])) {
	$_SESSION['name']."<br>";
	?>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		    
		<div class="container-fluid">
        <h1 style="margin-top: 3cm; margin-left: 18cm;">PROFILE</h1>
        <hr style="border-top: 5px dotted black;">
			<div class="row">
				<div class="col-sm-3" style="background-color: #FCD1D1;">
					<button style="margin-top: 2cm;text-align: center;background-color:hotpink;"><a style="color: white;" href="http://localhost:4200/about">Home</a></button><br><br>
					<button style="background-color:hotpink;"><a style="color: white;" href="changepassword.php">change password</a></button><br><br>
					<button style="background-color:hotpink;"><a style="color: white;"  href="bookings.php">Appointments</a></button><br><br>
					<button style="background-color:hotpink;"><a style="color: white;" href="logout.php">Log out</a></button><br><br>



				</div>
				<div class="col-sm-3" >
				    
					<img src="bg1.jpg" height="305px" width="348px"  ></div>
				<div class="col-sm-3" style="background-color: #FCD1D1;">
					<br>
					<br>
					<br>
			

					<h3 style="margin-left: 1cm;">Username </h3>
                    <h3 style="margin-left: 1cm;">Name </h3>
                    <h3 style="margin-left: 1cm;">Mail </h3>
                    
                    
                </div>
                <div class="col-sm-3" style="background-color: #FCD1D1;">
                	<br>
                	<br>
                	<br>
                	<?php echo "<h3>".":     ". $_SESSION['uname']. "<br>". 
                	 "<h3>".":      ". $_SESSION['name']."<br>".
                	  "<h3>".":     ". $_SESSION['mailid']."<br>";
                	?>


                </div>
      
            </div>
        </div>
        
	<hr style="border-top: 5px dotted black;">
</body>
<?php
}
else{ ?>
   <img src="login.gif" style="margin-left: 15cm;margin-top: 3cm;">
   <br>
   <h1 style="text-align: center;margin:10cm;margin-top:0cm;margin-bottom: 0px;">
   	 <hr>
	 OOPS! YOU HAVEN'T LOGGED IN<br>
	PLEASE LOGIN TO CONTINUE<br>
	<br>
    <button><a href="login.php">login</a></button>
    <hr>
</h1>
<?php
}
?>