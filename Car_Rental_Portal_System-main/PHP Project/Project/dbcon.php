<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "car_rental_portal";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	
	<?php 
}else{
?><script>alert("Connection Unsuccessful")</script><?php	
}
?>