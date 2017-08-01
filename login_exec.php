<?php
	//Start session
	//session_start();

 
	//Include database connection details
	require_once('connection.php');
     
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;

 	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
	//Sanitize the POST values
	$username = clean($_POST['username']);
	$password = clean($_POST['password']);
    
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}

	if(!isset($_POST['auth_type']))
{
	$errmsg_arr[] = "Authentication type was not selected";
	$errflag=true;
}
else
{
	$aut=($_POST['auth_type']);
}


 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
 //print $aut;

 if($aut=='Driver')
 {
 	$qry = "SELECT * FROM `login_dri` WHERE `username` = '$username' AND `password` = '$password'";
 	$file="index.html";
 }
  if($aut=='Customer')
 {
 	$qry = "SELECT * FROM `login_cust` WHERE `username` = '$username' AND `password` = '$password'";
 	$file="index.html";
 }
 if($aut=='Admin')
 {
 	$qry = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
 	$file="admin.html";
 }
 if($aut=='')
 {
 	$file="login.php";
 }
	//Create query
	
	$result = $conn->query($qry);
 
	//Check whether the query was successful or not
	if($result) {

		

		if($result->num_rows > 0) {
			

			/*session_regenerate_id();
			$member = $result->fetch_assoc();
			//$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			$_SESSION['SESS_USER_NAME'] = $member['username'];
			$_SESSION['SESS_PASSWORD'] = $member['password'];
			//session_write_close();*/
			header("location: $file");
			exit();
		}else {
			//Login failed



			$errmsg_arr[] = 'user name or password not correct';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: login.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>