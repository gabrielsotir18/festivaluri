<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); 
include "db_connect.php";

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
		header("Location: LoginPage.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: LoginPage.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = $mysqli->query($sql);

		if ($row = $result->fetch_assoc()) {
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: LoginPage.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: LoginPage.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: LoginPage.php");
	exit();
}