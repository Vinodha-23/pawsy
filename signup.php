
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#FFE6E6;background-image:url(https://i.pinimg.com/564x/12/a6/35/12a635c15a6629cd7d3819b284323d51.jpg);background-repeat: no-repeat;">
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
               <input type="text" 
                      name="name" 
                      placeholder="Name" autocomplete="off"><br>
          <label>User_name</label>
               <input type="text" 
                      name="uname" 
                      placeholder="Name" autocomplete="off"><br>

          <label>email</label>
               <input type="text" 
                      name="email" 
                      placeholder="mail" autocomplete="off"><br>

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password" autocomplete="off"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>