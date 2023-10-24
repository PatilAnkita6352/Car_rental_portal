<br/>
<?php session_start(); 
 if(isset($_SESSION['username'])) 
 {
$_SESSION['StartDate']=$start=$_POST['start_data'];
$_SESSION['EndDate']=$end=$_POST['end_date'];
$_SESSION['Location']=$loc=$_POST['Location'];
$_SESSION['Duration']=$dur=$_POST['Days'];

?>

<?php include('top.php') ?>
<?php
$arr = array();
$arr=$_SESSION['arr'];
?>

<div class="main">
  <center><h1> Available Cars </h1></center>
  <ul  class="cards">
  
  
  <?php 
  $server = "localhost";
$user = "root";
$password = "";
$db = "car_rental_portal";

$con = mysqli_connect($server,$user,$password,$db);

// $start_date = strtotime($_POST['start_date']);
// $end_date = strtotime($_POST['end_date']);
for ($i=0; $i <count($arr) ; $i++) { 
  
$query =  mysqli_query($con,"SELECT * FROM car_info WHERE Car_ID='$arr[$i]' ");
$result_count= mysqli_num_rows($query);

if($result_count > 0)
{

while($results= mysqli_fetch_object($query))
{
  
  
  ?>
 <li  class="cards_item" style="display: inline-block;">
     <form action="testmail.php" method="post">
      <div style="display:inline-block;" class="card">
        <div class="card_image"><img height="200px" width="480px" src="images/<?php echo $results->car_image; ?>"></div>
        <div class="card_content">
          <h3 class="card_title">Car Brand: <?php echo $results->car_type;?><br>Car no:<?php echo $results->car_reg_no;?><br>Mileage : <?php echo $results->car_mileage; ?> Km/l.<br>Price : <?php echo $results->car_day_rent; ?><br>Seats : <?php echo $results->car_seat; ?></h3><br>
          
          <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive Details:</p> -->
          <a href=" testmail.php?carid= <?php echo $results->Car_ID;?>&carreg= <?php echo $results->car_reg_no;?>&carbrand= <?php echo $results->car_type;?>"  class="btn card_btn">Book </a>

        </div>
      </form>
</div></li><?php } }} ?>
</ul>
</div>

<?php include('bottom.php') ; }
else
{
  echo'<script type="text/javascript">
  alert("Your Cab is Booked");
   </script>';
   header('Location: login.php');
      exit();
    } ?>

