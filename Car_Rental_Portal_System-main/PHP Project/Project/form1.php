<!DOCTYPE html>
<html>
<head>
	<title>form1</title>
</head>
<body>	

  <?php 

  $seats= $_POST["Seats"]; 
  $price= $_POST["price"]; 
  
  $array = array();
  session_start();


  ?>   

                    
<?php $servername = "localhost";
  $database = "car_rental_portal";
  $username = "root";
  $password = "";

  // Create connection

  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection

  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  echo "Connected successfully";
  $sql = "SELECT `Car_ID`FROM `car_info` WHERE `car_seat`>=$seats AND `car_day_rent`<=$price+5000 AND `car_booked`=0";
  $result = $conn->query($sql);

  if ($result->num_rows>0) {
    // output data of each row

    while($row = $result->fetch_assoc())

    {    
    		foreach ($row as $x) {
    	
    			$array[] =$x;
    		    echo"<br>";
    
    		}
    		
    
    }
  } else {
    echo "0 results";
  }
  

  mysqli_close($conn);
  header('Location: Details_Book.php?error='.$error);
  ?>
<?php 
$_SESSION['arr']=$array;
?>


</body>
</html>