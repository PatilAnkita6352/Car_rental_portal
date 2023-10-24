<?php
session_start();

include 'dbcon.php';

if(isset($_POST['submit']) ){

	function input_data( $data) {  
	  $data = trim($data);  
	  $data = stripslashes($data);  
	  $data = htmlspecialchars($data);  
	  return $data;  
		}

	$name = input_data($_POST['username']);
	$mail = input_data($_POST['email']);
	$phone = input_data($_POST['contact']);
	$pass = input_data($_POST['password']);
	$repass = input_data($_POST['repassword']);
 

	 if(!preg_match("/^[a-zA-Z ]*$/",$name)) {  
            	$error="Only alphabets and white space are allowed";
            	header('Location: login.php?error='.$error);
            	exit();
                  
      } else if (!preg_match ("/^[0-9]*$/", $phone) ) {  
            $error="Contact No can have only numeric .";
            	header('Location: login.php?error='.$error);
            	exit(); 
            }  else if (strlen ($phone) != 10) {  
            
            $error="Mobile no must contain 10 digits.";
            	header('Location: login.php?error='.$error);
            	exit(); 
            }  else if (empty($pass) || empty($repass))
     			{  
            	$error="Password  is required";
            	header('Location: login.php?error='.$error);
            	exit(); 
		    } else{

		    	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		      			$error="Invalid email format";
		            	header('Location: login.php?error='.$error);
		            	exit();
		      		}else{

				    $emailquery= "select * from user_info where user_email='$mail' ";
					$query = mysqli_query($con,$emailquery);

					$emailcount = mysqli_num_rows($query);

					if($emailcount>0)
					{
						$error="Email alreay exists";
				        header('Location: login.php?error='.$error);
				        exit();
					}

      			}       

					if($pass === $repass){

						if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass)) {
		 					
		 					$error="Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
		            		header('Location: login.php?error='.$error);
		            		exit();
						} else {

								$upass = password_hash($pass, PASSWORD_BCRYPT);
								$urepass = password_hash($repass, PASSWORD_BCRYPT);
								 $insertquery="insert into user_info(user_name,user_email,user_contact,user_password,repeat_password) values('$name','$mail','$phone','$upass','$urepass')";

								 $iquery = mysqli_query($con,$insertquery);
								 if($iquery){
								 	$get_query= "select * from user_info where user_email='$mail' ";
									$query = mysqli_query($con,$get_query);
								 	$get_userid=mysqli_fetch_assoc($query);
								 	$_SESSION['username']=$name;
									$_SESSION['usermail']=$mail;
									$_SESSION['userid']=$get_userid['User_ID'];
								 	
					            	header('Location: Main.php');
					            	exit();
								 }else{
								 	$error="Unsuccessfull insertion!";
					            	header('Location: login.php?error='.$error);
					            	exit();

								 }

								}

					}else{
						
						$error="password not matching.";
		            	header('Location: login.php?error='.$error);
		            	exit();
					}
			}

}
	

?>