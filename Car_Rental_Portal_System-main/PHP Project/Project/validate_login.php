<?php
session_start();
?>

<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
	
	$mail = $_POST['email'];
	$password = $_POST['password'];
	$email_search="select * from user_info where user_email='$mail'";
	$query=mysqli_query($con,$email_search);
	$email_count=mysqli_num_rows($query);

			
	if($email_count){
		$email_pass=mysqli_fetch_assoc($query);
		$db_pass=$email_pass['user_password'];
		$pass_decode =password_verify($password, $db_pass);
		if($pass_decode)
		{
			$msg="Successfull login";
			$_SESSION['username']=$email_pass['user_name'];
			$_SESSION['userid']=$email_pass['User_ID'];
			$_SESSION['usermail']=$email_pass['user_email'];
			header('Location: Main.php?msg='.$msg);
			exit();
		}else{
			$error="Incorrect Password";
			header('Location: login.php?error='.$error);
			exit();
		}

	}else
	{
		$error="Incorrect Email";
		header('Location: login.php?error='.$error);
		exit();
	}


	
}
?>