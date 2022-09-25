<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    $email=$_POST['email'];
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $email= validate($_POST['email']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$vkey= md5(time().$uname);
	$user_data = 'uname='. $uname. '&name='. $name;
	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}
	else{
		// hashing the password
        $pass = md5($pass);
	    $sql = "SELECT * FROM user WHERE mailid='$email'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(uname,mailid, password, name) VALUES('$uname','$email', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
           	
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
}else{
	header("Location: login.php");
	exit();
}