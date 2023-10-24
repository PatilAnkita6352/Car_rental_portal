<?php session_start(); 
 if(isset($_SESSION['username'])) 
 { 
   $carid=$_GET['carid'];
   $carno=$_GET['carreg'];
   $car=$_GET['carbrand'];
   $usern=$_SESSION['username'];
   $loc=$_SESSION['Location'];
  $dur=$_SESSION['Duration'];
  $email=$_SESSION['usermail'];
  $start=date('Y-m-d',strtotime($_SESSION['StartDate']));
  $end=date('Y-m-d',strtotime($_SESSION['EndDate']));
  $userid=$_SESSION['userid'];

			

 $servername = "localhost";
  $database = "car_rental_portal";
  $username = "root";
  $password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql= "INSERT INTO `rides`( `User_ID`, `Car_id`, `car_reg_no`, `Location`, `Duration`,`start_date`,`end_date`) VALUES ( $userid,$carid,'$carno','$loc',$dur,
'$start','$end')";


$sql1 = "UPDATE `car_info` SET `car_booked`= 1,`Start_Date`='$start',`End_Date`='$end' WHERE `Car_ID`= $carid";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE )  {
   echo'<script type="text/javascript">
	alert("Your Cab is Booked");
   </script>';
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<?php include('top.php') ?>

<!-- Slide Show -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px; background-color: #FFFFFF; border-width: 50px;" id="home">
	<center><h1 style="font-family: Copperplate, Arial;  "><b>VARSU Focuses on safety, wherever you go</b></h1></center>
  <div class="w3-display-bottomleft bg-img3" style="padding: 10px 10px 10px 10px;"><br><br>
    <br><br><br><Br>


</div>
</header>
<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2  style="font-family: Copperplate, Arial; margin-left: 5%;">!! Congratulations Your Cab is Booked !!</h2>
  <p class="w3-opacity"><i>We love Travel</i></p>
  <p class="w3-justify" style="font-size: 20px; margin-left: 30%;"><b>User Name:</b><?php echo" $usern";?>.<br>
  	                    <b>Car No.:</b><?php echo" $carno";?>.<br>
  	                    <b>Location:</b><?php echo" $loc.";?>.<br>
  	                    <b>Duration:</b><?php echo" $dur";?> day.<br>
  	                    <b>Brand:</b><?php echo" $car";?>.<br>
                        <b>Pick-Up:</b><?php echo" $start";?>.<br>
                        <b>Drop:</b><?php echo" $end";?>.<br><br>

  	                    <a href=" Main.php?"  class="btn card_btn" style="margin-left: -20%">Return </a>
</section>

<br><br><Br>
<?php
$to =$email;
$subject = "HTML email";

$message = "
<html>
<head>
<title>Enjoy Your Ride....</title>
</head>
<body ><br/><br/>
<center><fieldset style=\"border:2px solid; height: 850px; width: 700px;\"><br>
<img style=\"height: 450px; width:600px;\" src=\"https://blog.directauto.com/wp-content/uploads/2014/11/01-16_blog_660x440_rentcar.jpg\">
<h2>Enjoy Your Ride....<br>Car Booked</h2><br/>
<h3>"."Name:".$usern."</h3>".
"<h3>"."Car Brand:".$car."</h3>".
"<h3>"."Car No:".$carno."</h3>".
"<h3>"."Location:".$loc."</h3>".
"<h3>"."Pick Up:".$start."</h3>".
"<h3>"."Drop:".$end."</h3>".
"</fieldset>
</center><br><br>
</body>
</html>
";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: utkarshaagodse@gmail.com' . "\r\n";



if(mail($to,$subject,$message,$headers)){
	echo"<script type='text/javascript'>
  alert('Confirmaton mail is sentt to your Email id!!');
   </script>";
}else{
	echo"fail";
}

?> 

<?php include('bottom.php') ; }
else
{
  echo'<script type="text/javascript">
  alert("Please Login your account first..");
   </script>';
   header('Location: login.php');
      exit();
    } ?>

