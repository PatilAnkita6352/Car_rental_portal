<?php session_start(); 
 if(isset($_SESSION['username'])) 
 {

  $user=$_SESSION['userid'];

  ?>
<?php include('top.php') ?>
<div class="w3-row w3-padding-64" id="menu">
	<div class="w3-col l6 w3-padding-large">
      <img src="images/user1.png" class="w3-round w3-image " alt="usericon" style="width:250px; margin-left: 25%;">
    </div>
  

    <div class="w3-col l6 w3-padding-large"><br>
      <h1 style="font-size: 70px; font-family: Copperplate, Arial;"><b>Hello <?php echo $_SESSION['username'];?>   !!!</b></h1>
   
    </div>
  </div>  
   <hr>

 
  
    <div class="w3-centered" style="width:80%;margin-left: 10%;">      
    <h2>Your Rides</h2>  
    <?php
     
       
		$servername = "localhost";
		  $database = "car_rental_portal";
		  $username = "root";
		  $password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,  $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM rides WHERE User_ID= $user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table class='table table-hover'>
    <thead>
      <tr>
        <th>ID</th>
        <th>Car no</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Location</th>
        <th>No. Days</th>
      </tr>
    </thead>
    <tbody>";
    $i=1;
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$i."</td><td>".$row["car_reg_no"]."</td><td>".$row["start_date"]."</td><td>".$row["end_date"]."</td><td>".$row["Location"]."</td><td>".$row["Duration"]."</td></tr>";
    $i++;
  }
  echo "</tbody></table>";
} else {
  echo'<script type="text/javascript">
	alert("You Don not have any Ride yet..");
   </script>';
}
$conn->close();
?>
  
</div>   
<br><br>
<hr>

<?php include('bottom.php'); }
else
{
	echo'<script type="text/javascript">
	alert("Please Login your account first..");
   </script>';
   header('Location: login.php');
			exit();
		} ?>