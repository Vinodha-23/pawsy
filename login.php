<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass); 
		$sql = "SELECT * FROM user WHERE uname='$uname' AND password='$pass'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['password'] === $pass) {
            	$_SESSION['uname'] = $row['uname'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['mailid'] = $row['mailid']; 
            	header("Location:http://localhost:4200/about");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect User name or password");
	        exit();
		}
	}	
}else{
	header("Location:index.php");
	exit();
}